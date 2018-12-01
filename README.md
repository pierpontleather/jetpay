# JetPay Official Wordpress Theme

Copyright 2018

## Features

- Modern JavaScript through Webpack 4
- Live reload via BrowserSync
- SCSS support
- Helpful HTML5 Router for firing JS based on Wordpress page slug.
- Nothing else.

## Requirements

- Node.js (at least Node 8.9.4)
- Yarn
- Local by Flywheel

## Getting Started

```bash
git clone [this repository account]/jetpay.git
yarn install
yarn start (live reloading)
```

## Developing Locally

To work on the theme locally, open another window/tab in terminal and run:

```bash
yarn start
```

This will open a browser, watch all files (php, scss, js, etc) and reload the
browser when you press save.

## Building for Production

To create an optimized production build, run:

```bash
yarn build
```

This will minify assets, bundle and uglify javascript, and compile scss to css.
It will also add cachebusting names to then ends of the compiled files, so you
do not need to bump any enqueued asset versions in `functions.php`.

## Changing ports

There are two ports involved, the port of the dockerized wordpress instance,
and the port the Browser Sync runs on. To change the port of the dockerized
wordpress instance go into [`docker-compose.yml`](docker-compose.yml#L25) and
modify `ports`.

```yml
# docker-compose.yml
 ...
  ports:
    - "9013:80" # only need to change `9013:80` --> localhost:9013
 ...
```

If you want to change the port you develop on (the default is 4000), then open
[`scripts/webpack.dev.config.js`](scripts/webpack.dev.config.js#L102) and modify
`BrowserSyncPlugin`'s `port` option. If you changed the wordpress port above,
be sure to also change `proxy` accordingly. Don't forget the trailing slash.

```js
// scripts/webpack.dev.config.js
...
new BrowserSyncPlugin({
  notify: false,
  host: 'localhost',
  port: 4000, // this is the port you develop on. Can be anything.
  logLevel: 'silent',
  files: ['./*.php'],
  proxy: 'http://localhost:9013/', // This port must match docker-compose.yml
}),
...
```

## Project Structure

```bash
.
├── footer.php
├── functions.php
├── header.php
├── index.php
├── package.json                 # Node.js dependencies
├── page.php
├──scripts                       # Build / Dev Scripts
│   ├── build.js                 # Build task
│   ├── start.js                 # Start task
│   └── webpack.dev.config.js        # Webpack development configuration
│   └── webpack.prod.config.js        # Webpack production configuration
└──src
    ├── index.js                 # JavaScript entry point
    ├── routes                   # Routes
    │   ├── common.js            # JS that will run on EVERY page
    │   └── <xxx>.js             # JS that will run on pages with <xxx> slug
    ├── style.scss               # SCSS style entry point
    ├── styles                   # SCSS
    │   ├── _global-vars.scss
    │   ├── _base.scss
    │   └── ...
    └── util
        ├── Router.js            # HTML5 Router, DO NOT TOUCH
        └── camelCase.js         # Helper function for Router, DO NOT TOUCH
```

#### Authors

- P.Pierpont (JP)
