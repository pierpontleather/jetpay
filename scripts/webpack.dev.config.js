"use strict";

const webpack = require("webpack");
const autoprefixer = require("autoprefixer");
const AssetsPlugin = require("assets-webpack-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const FriendlyErrorsPlugin = require("friendly-errors-webpack-plugin");
const path = require("path");
const fs = require("fs");

// Make sure any symlinks in the project folder are resolved:
// https://github.com/facebookincubator/create-react-app/issues/637
const appDirectory = fs.realpathSync(process.cwd());

function resolveApp(relativePath) {
  return path.resolve(appDirectory, relativePath);
}

const paths = {
  appSrc: resolveApp("src"),
  appBuild: resolveApp("build"),
  appIndexJs: resolveApp("src/index.js"),
  appNodeModules: resolveApp("node_modules")
};

module.exports = {
  mode: "development",
  bail: false,
  // We generate sourcemaps in production. This is slow but gives good results.
  // You can exclude the *.map files from the build during deployment.
  target: "web",
  devtool: "cheap-eval-source-map",
  entry: [paths.appIndexJs],
  output: {
    path: paths.appBuild,
    filename: "bundle.js"
  },
  module: {
    rules: [
      // Disable require.ensure as it's not a standard language feature.
      { parser: { requireEnsure: false } },
      // Transform ES6 with Babel
      {
        test: /\.js?$/,
        loader: "babel-loader",
        include: paths.appSrc
      },
      {
        test: /.scss$/,
        use: [
          "style-loader",
          {
            loader: "css-loader",
            options: {
              importLoaders: 1,
              minimize: false
            }
          },
          {
            loader: "postcss-loader",
            options: {
              ident: "postcss", // https://webpack.js.org/guides/migrating/#complex-options
              plugins: () => [
                autoprefixer({
                  browsers: [
                    ">1%",
                    "last 4 versions",
                    "Firefox ESR",
                    "not ie < 9" // React doesn't support IE8 anyway
                  ]
                })
              ]
            }
          },
          "sass-loader"
        ]
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].css",
      chunkFilename: "[id].css"
    }),
    new webpack.EnvironmentPlugin({
      NODE_ENV: "development", // use 'development' unless process.env.NODE_ENV is defined
      DEBUG: false
    }),
    new AssetsPlugin({
      path: paths.appBuild,
      filename: "assets.json"
    }),

    new FriendlyErrorsPlugin({
      clearConsole: false
    }),

    new BrowserSyncPlugin({
      notify: false,
      host: "localhost",
      port: 4000,
      logLevel: "silent",
      files: ["./*.php"],
      proxy: "http://jetpay.development/"
    })
  ].filter(Boolean)
};
