<?php

function Logo($args = null)
{
  if ($args['size']) {
    $size = $args['size'] . 'px';
  } else {
    $size = "150px";
  }
  $colorOptions = array(
    "darkPrimary" => "#3e3e42",
    "darkSecondary" => "#7e7e83",
    "darkDisabled" => "#a8a8ad",
    "lightPrimary" => "#ffffff",
    "lightSecondary" => "#c6c6cb",
    "lightDisabled" => "#7e7e83"
  );
  $color = array(
    '1' => '#ff6600',
    '2' => $colorOptions['darkPrimary']
  );
  if (!$args['color']) {
    $color['1'] = "#ff6600";
    $color['2'] = $colorOptions['darkDisabled'];
  } else {
    if ($args['color'] == 'darkDisabled') {
      $color['1'] = $colorOptions['darkDisabled'];
      $color['2'] = $colorOptions['darkDisabled'];
    }
    if ($args['color'] == 'darkSecondary') {
      $color['1'] = $colorOptions['darkSecondary'];
      $color['2'] = $colorOptions['darkSecondary'];
    }
    if ($args['color'] == 'darkPrimary') {
      $color['1'] = $colorOptions['darkPrimary'];
      $color['2'] = $colorOptions['darkPrimary'];
    }
    if ($args['color'] == 'lightDisabled') {
      $color['1'] = $colorOptions['lightDisabled'];
      $color['2'] = $colorOptions['lightDisabled'];
    }
    if ($args['color'] == 'lightSecondary') {
      $color['1'] = $colorOptions['lightSecondary'];
      $color['2'] = $colorOptions['lightSecondary'];
    }
    if ($args['color'] == 'lightPrimary') {
      $color['1'] = $colorOptions['lightPrimary'];
      $color['2'] = $colorOptions['lightPrimary'];
    }
  }

  ?>
  <svg width="<?php echo $size; ?>" height="<?php echo ($size * (60 / 287)) . "px" ?>" viewBox="0 0 287 60" fill="none">
      <path
        d="M36.2 35.0499C34.4 42.45 32.3 45.7 27.75 48.15C24.35 50 19.9 50.9 14.45 50.9C9.4 50.9 5.35 50.25 0 48.45L3.05 35.8499C5.95 36.4499 7.05 36.5999 8.95 36.5999C13.4 36.5999 15.45 35.5 16.8 32.45C17.6 30.55 19.15 24.15 24.65 0.699951H44.4L36.2 35.0499Z"
        fill="<?php echo $color['1']; ?>"
      />
      <path
        d="M59.95 34.35C59.9 34.8 59.9 35.25 59.9 35.6C59.9 38.95 62.1999 40.1 68.7 40.1C72.75 40.1 77.75 39.45 85 37.8L80.35 48.75C72.95 50.8 67.2 51.65 60.5 51.65C47.9 51.65 41.95 47 41.95 37.15C41.95 27.95 45.4999 18 50.5999 12.9C54.6 8.84998 60.9 6.84998 69.75 6.84998C76.25 6.84998 80.55 7.59998 83.75 9.19998C87.5 11.1 89.5 14.8 89.5 19.55C89.5 24 88.75 27.4 86.4 34.35H59.95ZM74.35 24.8C74.5 23.9 74.55 23.4 74.55 22.8C74.55 20.05 72.7 18.65 69.15 18.65C65.1 18.65 62.25 20.95 61.45 24.8H74.35Z"
        fill="<?php echo $color['1']; ?>"
      />
      <path
        d="M119.15 8.44999H132L128.6 22.45H115.8L113.45 32.15C112.85 34.6 112.65 36.05 112.65 36.95C112.65 38.95 114.05 39.9 117.15 39.9C119.3 39.9 120.9 39.75 123.5 39.25L121 49.4C116.4 50.3 110.2 50.9 104.95 50.9C96.4499 50.9 92.7499 48.6 92.7499 43.45C92.7499 42.05 92.8999 40.55 93.2499 39L96.9499 22.5H91.3999L93.5499 13.45C101.6 7.69999 104.6 5.29999 110.25 0.0499878H121.2L119.15 8.44999Z"
        fill="<?php echo $color['1']; ?>"
      />
      <path
        d="M166.5 0.75C173.95 0.75 177.25 1.2 179.8 2.55C182.85 4.05 184.75 7.65 184.75 11.8C184.75 20.6 179.85 29.55 172.9 33.5C168.6 35.85 165.15 36.45 154.6 36.45H149.7L146.45 50.15H126.6L138.5 0.75H166.5ZM152.6 24.85H153.7C158.2 24.85 160.35 24.5 161.75 23.35C163.6 21.95 164.8 19.45 164.8 17C164.8 14.2 163.25 13.5 157.05 13.5H155.25L152.6 24.85Z"
        fill="<?php echo $color['2']; ?>"
      />
      <path
        d="M226.95 50.1H208.25C208.4 48.6 209.45 44.9 210.6 41.65H210.25C206.75 48.45 202.85 50.75 194.85 50.75C186.25 50.75 181.85 46.45 181.85 38.1C181.85 31.45 184.2 22.2 187.35 16.65C191.1 9.74999 196.4 6.79999 204.65 6.79999C212.65 6.79999 216.1 9.59999 216.1 16.25V17.3H216.45L217.35 12.4C217.7 10.2 217.8 9.74999 218.25 8.39999H236.95L226.95 50.1ZM201.1 33.45C201.1 36.2 202.75 37.75 205.7 37.75C208.5 37.75 210.65 36.35 212 33.6C213.1 31.3 213.9 28.2 213.9 26.2C213.9 23.7 212.2 22.35 209 22.35C204.4 22.35 201.1 26.85 201.1 33.45Z"
        fill="<?php echo $color['2']; ?>"
      />
      <path
        d="M264.55 47.1999C260.35 54.75 257.9 57.1999 253 58.7499C250.5 59.4999 247.5 59.8499 243.25 59.8499C243.25 59.8499 240.95 59.8499 236.35 59.7999H233.55L235.35 48.6499C246.1 48.7 246.5 48.6999 247.65 48.3499C243.95 46.9999 242.6 44.5999 242.15 38.7999L239.55 8.44995H257.9L258.1 19.2C258.05 23.65 257.95 24.7 257.8 26.65C257.65 28.15 257.65 28.2999 256.75 33.8499H257.2C257.65 31.3499 260.1 24.6 262.55 19.2L267.8 8.44995H286.15L264.55 47.1999Z"
        fill="<?php echo $color['2']; ?>"
      />
  </svg>
  <?php

}


function singleCube($args = null)
{
  $size = '50px';
  if ($args['size']) {
    $size = $args['size'];
  }
  if (!$args['color'] == 'color') {
    // b/w version
    ?>
    <svg width="<?php echo $size ?>" height="<?php echo ($size * (115 / 98)) . "px" ?>" viewBox="0 0 98 115" fill="none">
    <path d="M49 57.5L1 30.5L49 2L97 30.5L49 57.5Z" fill="#FF6600" />
    <path
      d="M49.0005 113V57.6562L97.0005 30.4375V85.5091L49.0005 113Z"
      fill="#2391B4"
    />
    <path d="M1 85.5091V30.25L49 57.5V113L1 85.5091Z" fill="#1766AA" />
    <path
      d="M1 30.5L49 2L97 30.5M1 30.5L49 57.5M1 30.5V86L49 113M49 57.5L97 30.5M49 57.5V113M97 30.5V86L49 113"
      stroke="#3E3E42"
      strokeWidth={0.5}
    />
    <path
      fillRule="evenodd"
      clipRule="evenodd"
      d="M49 1.41852L97.5 30.2154V86.2924L49 113.574L0.5 86.2924V30.2154L49 1.41852ZM1.5 30.7846V85.7076L49 112.426L96.5 85.7076V30.7846L49 2.5815L1.5 30.7846Z"
      fill="#3E3E42"
      stroke="#3E3E42"
    />
  </svg>
  <?php

} else {
    // color version
  ?>
    <svg width="<?php echo $size ?>" height="<?php echo ($size * (115 / 98)) . "px" ?>" viewBox="0 0 98 115" fill="none">
    <path d="M49 57.5L1 30.5L49 2L97 30.5L49 57.5Z" fill="#FF6600" />
    <path
      d="M49.0005 113V57.6562L97.0005 30.4375V85.5091L49.0005 113Z"
      fill="#2391B4"
    />
    <path d="M1 85.5091V30.25L49 57.5V113L1 85.5091Z" fill="#1766AA" />
    <path
      d="M1 30.5L49 2L97 30.5M1 30.5L49 57.5M1 30.5V86L49 113M49 57.5L97 30.5M49 57.5V113M97 30.5V86L49 113"
      stroke="#3E3E42"
      strokeWidth={0.5}
    />
    <path
      fillRule="evenodd"
      clipRule="evenodd"
      d="M49 1.41852L97.5 30.2154V86.2924L49 113.574L0.5 86.2924V30.2154L49 1.41852ZM1.5 30.7846V85.7076L49 112.426L96.5 85.7076V30.7846L49 2.5815L1.5 30.7846Z"
      fill="#3E3E42"
      stroke="#3E3E42"
    />
  </svg>
  <?php

}
}

function multiCube($args = null)
{
  $size = '50px';
  if ($args['size']) {
    $size = $args['size'];
  }
  if ($args['color'] == 'mono') {
    // b/w version
    ?>
    <svg width="<?php echo $size ?>" height="<?php echo $size * (115 / 98) ?>" viewBox="0 0 98 115" fill="none">
    <path
      d="M97 29.8549L49.2487 2L1 29.8549L33.3316 48.2591L49.2487 39.3057L64.6684 48.2591L97 29.8549Z"
      fill="#C6C6CB"
    />
    <path
      d="M49.2488 112.922V76.114L65.1659 66.6632V48.2591L97.0001 29.8549V85.0674L49.2488 112.922Z"
      fill="#A8A8AD"
    />
    <path
      d="M49.2487 112.922V76.114L33.3316 67.1606V48.2591L1 29.8549V85.0674L49.2487 112.922Z"
      fill="#5D5D61"
    />
    <path
      d="M49.2488 57.7098V39.8031L65.1659 48.7565V66.6632L49.2488 57.7098Z"
      fill="#7E7E83"
    />
    <path
      d="M49.2488 40.7979V39.3057C54.2728 42.1317 64.0541 47.7229 65.0785 48.6465L65.1659 50.2487L49.2488 40.7979Z"
      fill="#7E7E83"
    />
    <path
      d="M33.3315 66.6632V48.2591L49.2486 39.3057V57.7098L33.3315 66.6632Z"
      fill="#A8A8AD"
    />
    <path
      d="M33.3315 66.6632L49.2486 57.7098L65.1657 66.6632L49.2486 76.114L33.3315 66.6632Z"
      fill="#3E3E42"
    />
    <path
      d="M97 29.8549V48.2591M97 29.8549L81.0829 39.057M97 29.8549L81.0829 20.5699M1 29.8549V48.2591M1 29.8549L17.1658 39.057M1 29.8549L17.0829 20.5699M33.3316 48.2591L49.2487 39.3057M33.3316 48.2591L33.1658 103.637M33.3316 48.2591L17.1658 39.057M49.2487 39.3057L65.1658 48.2591M49.2487 39.3057L81.0829 20.5699M49.2487 39.3057L17.0829 20.5699M65.1658 48.2591L81.0829 39.057M65.1658 48.2591V103.637M49.2487 112.922L65.1658 103.637M49.2487 112.922L33.1658 103.637M49.2487 112.922V76.114M97 48.2591L49.2487 76.114M97 48.2591V66.6632M49.2487 76.114L1 48.2591M1 48.2591V66.6632M1 66.6632V85.0674L17.0829 94.3523M1 66.6632L49.2487 94.5181L97 66.6632M97 66.6632V85.0674L81.0829 94.3523M81.0829 39.057V94.3523M81.0829 39.057L33.1658 11.285M81.0829 94.3523L65.1658 103.637M33.1658 103.637L17.0829 94.3523M17.1658 39.057L17.0829 94.3523M17.1658 39.057L65.1658 11.285M65.1658 11.285L49.2487 2L33.1658 11.285M65.1658 11.285L81.0829 20.5699M33.1658 11.285L17.0829 20.5699"
      stroke="#3E3E42"
      strokeWidth={0.5}
    />
    <path
      fillRule="evenodd"
      clipRule="evenodd"
      d="M49.25 1.42191L97.5 29.5677V85.3545L49.25 113.5L0.5 85.356V29.5662L49.25 1.42191ZM1.5 30.1436V84.7787L49.2474 112.344L96.5 84.7802V30.1421L49.2474 2.57809L1.5 30.1436Z"
      fill="#3E3E42"
      stroke="#7E7E83"
    />
    <path
      d="M54.2228 68.1554L38.3057 58.9466L54.2228 49.7513L70.1399 58.9466L54.2228 68.1554Z"
      fill="#C6C6CB"
    />
    <path
      d="M54.2229 86.5596V67.8208L70.14 58.7047V77.4434L54.2229 86.5596Z"
      fill="#A8A8AD"
    />
    <path
      d="M38.3057 77.4434V58.7047L54.2228 67.8208V86.5596L38.3057 77.4434Z"
      fill="#5D5D61"
    />
    <path
      d="M38.3057 59.2021L54.2228 49.7513L70.1399 59.2021M38.3057 59.2021L54.2228 68.1554M38.3057 59.2021V77.6062L54.2228 86.5596M54.2228 68.1554L70.1399 59.2021M54.2228 68.1554V86.5596M70.1399 59.2021V77.6062L54.2228 86.5596"
      stroke="#3E3E42"
      strokeWidth={0.5}
    />
    <path
      fillRule="evenodd"
      clipRule="evenodd"
      d="M54.2228 49.1698L70.6399 58.9175V77.8986L54.2228 87.1333L37.8057 77.8986V58.9175L54.2228 49.1698ZM38.8057 59.4867V77.3138L54.2228 85.9859L69.6399 77.3138V59.4867L54.2228 50.3328L38.8057 59.4867Z"
      fill="#3E3E42"
      stroke="#5D5D61"
    />
  </svg>
  <?php

} else {
    // color version
  ?>
  <svg width="<?php echo $size ?>" height="<?php echo $size * (115 / 98) ?>" viewBox="0 0 98 115" fill="none">
    <path
      d="M97 29.8549L49.2487 2L1 29.8549L33.3316 48.2591L49.2487 39.3057L64.6684 48.2591L97 29.8549Z"
      fill="#FF6600"
    />
    <path
      d="M49.2488 112.922V76.114L65.1659 66.6632V48.2591L97.0001 29.8549V85.0674L49.2488 112.922Z"
      fill="#038A9C"
    />
    <path
      d="M49.2487 112.922V76.114L33.3316 67.1606V48.2591L1 29.8549V85.0674L49.2487 112.922Z"
      fill="#0163A9"
    />
    <path
      d="M49.2488 57.7099V39.8031L65.1659 48.7565V66.6632L49.2488 57.7099Z"
      fill="#7E7E83"
    />
    <path
      d="M49.2488 40.7979V39.3057C54.2728 42.1317 64.0541 47.7229 65.0785 48.6465L65.1659 50.2487L49.2488 40.7979Z"
      fill="#7E7E83"
    />
    <path
      d="M33.3315 66.6632V48.2591L49.2486 39.3057V57.7098L33.3315 66.6632Z"
      fill="#A8A8AD"
    />
    <path
      d="M33.3315 66.6632L49.2486 57.7098L65.1657 66.6632L49.2486 76.114L33.3315 66.6632Z"
      fill="#3E3E42"
    />
    <path
      d="M97 29.8549V48.2591M97 29.8549L81.0829 39.057M97 29.8549L81.0829 20.5699M1 29.8549V48.2591M1 29.8549L17.1658 39.057M1 29.8549L17.0829 20.5699M33.3316 48.2591L49.2487 39.3057M33.3316 48.2591L33.1658 103.637M33.3316 48.2591L17.1658 39.057M49.2487 39.3057L65.1658 48.2591M49.2487 39.3057L81.0829 20.5699M49.2487 39.3057L17.0829 20.5699M65.1658 48.2591L81.0829 39.057M65.1658 48.2591V103.637M49.2487 112.922L65.1658 103.637M49.2487 112.922L33.1658 103.637M49.2487 112.922V76.114M97 48.2591L49.2487 76.114M97 48.2591V66.6632M49.2487 76.114L1 48.2591M1 48.2591V66.6632M1 66.6632V85.0674L17.0829 94.3523M1 66.6632L49.2487 94.5181L97 66.6632M97 66.6632V85.0674L81.0829 94.3523M81.0829 39.057V94.3523M81.0829 39.057L33.1658 11.285M81.0829 94.3523L65.1658 103.637M33.1658 103.637L17.0829 94.3523M17.1658 39.057L17.0829 94.3523M17.1658 39.057L65.1658 11.285M65.1658 11.285L49.2487 2L33.1658 11.285M65.1658 11.285L81.0829 20.5699M33.1658 11.285L17.0829 20.5699"
      stroke="#3E3E42"
      strokeWidth={0.5}
    />
    <path
      fillRule="evenodd"
      clipRule="evenodd"
      d="M49.25 1.42191L97.5 29.5677V85.3545L49.25 113.5L0.5 85.356V29.5662L49.25 1.42191ZM1.5 30.1436V84.7787L49.2474 112.344L96.5 84.7802V30.1421L49.2474 2.57809L1.5 30.1436Z"
      fill="#3E3E42"
      stroke="#3E3E42"
    />
    <path
      d="M54.2228 68.1554L38.3057 58.9466L54.2228 49.7513L70.1399 58.9466L54.2228 68.1554Z"
      fill="#FF6600"
    />
    <path
      d="M54.2229 86.5596V67.8208L70.14 58.7047V77.4434L54.2229 86.5596Z"
      fill="#038A9C"
    />
    <path
      d="M38.3057 77.4434V58.7047L54.2228 67.8208V86.5596L38.3057 77.4434Z"
      fill="#0163A9"
    />
    <path
      d="M38.3057 59.2021L54.2228 49.7513L70.1399 59.2021M38.3057 59.2021L54.2228 68.1554M38.3057 59.2021V77.6062L54.2228 86.5596M54.2228 68.1554L70.1399 59.2021M54.2228 68.1554V86.5596M70.1399 59.2021V77.6062L54.2228 86.5596"
      stroke="#3E3E42"
      strokeWidth={0.5}
    />
    <path
      fillRule="evenodd"
      clipRule="evenodd"
      d="M54.2228 49.1698L70.6399 58.9175V77.8986L54.2228 87.1333L37.8057 77.8986V58.9175L54.2228 49.1698ZM38.8057 59.4867V77.3138L54.2228 85.9859L69.6399 77.3138V59.4867L54.2228 50.3328L38.8057 59.4867Z"
      fill="#3E3E42"
      stroke="#3E3E42"
    />
  </svg>
  <?php

}
}

function footerCubes($args = null)
{
  $size = '250px';
  if ($args['size']) {
    $size = $args['size'];
  }
  if ($args['color']) {
    if ($args['color'] == 'payments') {
      ?>

      <svg width="<?php echo $size ?>" height="<?php echo $size * (112 / 113) ?>" viewBox="0 0 113 112" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect y="84" width="28" height="28" fill="#C43300"/>
        <rect y="55" width="28" height="29" fill="#FFAB8F"/>
        <rect width="28" height="28" fill="#E8E8ED"/>
        <rect x="28" y="84" width="28" height="28" fill="#E8E8ED"/>
        <rect x="56" y="55" width="29" height="29" fill="#DD420A"/>
        <rect x="85" y="84" width="28" height="28" fill="#FF703E"/>
        <rect x="28" y="55" width="28" height="29" fill="#F85115"/>
        <rect x="28" y="27" width="28" height="28" fill="#FF8A61"/>
      </svg>

    <?php

  }
  if ($args['color'] == 'payroll') {
    ?>
    <svg width="<?php echo $size ?>" height="<?php echo $size * (108 / 109) ?>" viewBox="0 0 109 108" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect y="81" width="27" height="27" fill="#005C6E"/>
      <rect y="54" width="27" height="27" fill="#E2F5FE"/>
      <rect width="27" height="27" fill="#E8E8ED"/>
      <rect x="27" y="81" width="27" height="27" fill="#E8E8ED"/>
      <rect x="54" y="54" width="28" height="27" fill="#2391B4"/>
      <rect x="82" y="81" width="27" height="27" fill="#40BFEB"/>
      <rect x="27" y="54" width="27" height="27" fill="#37B4E3"/>
      <rect x="27" y="26" width="27" height="28" fill="#88D9F9"/>
    </svg>

    <?php

  }
  if ($args['color'] == 'corporate') {
    ?>
    <svg width="<?php echo $size ?>" height="<?php echo $size * (111 / 113) ?>" viewBox="0 0 113 111" fill="none">
      <rect y={83} width={28} height={28} fill="#003A79" />
      <rect y={55} width={28} height={28} fill="#8CBFE2" />
      <rect width={28} height={28} fill="#E8E8ED" />
      <rect x={28} y={83} width={28} height={28} fill="#E8E8ED" />
      <rect x={56} y={55} width={29} height={28} fill="#0163A9" />
      <rect x={85} y={83} width={28} height={28} fill="#4594CF" />
      <rect x={28} y={55} width={28} height={28} fill="#2177BB" />
      <rect x={28} y={26} width={28} height={29} fill="#65B1E2" />
    </svg>
    <?php

  }
  if ($args['color'] == 'mono') {
    ?>
     <svg width="<?php echo $size ?>" height="<?php echo $size * (116 / 118) ?>" viewBox="0 0 118 116" fill="none">
      <rect y={87} width={29} height={29} fill="#3E3E42" />
      <rect y={57} width={29} height={30} fill="#A8A8AD" />
      <rect width={29} height={29} fill="#E8E8ED" />
      <rect x={29} y={87} width={30} height={29} fill="#E8E8ED" />
      <rect x={59} y={57} width={29} height={30} fill="#7E7E83" />
      <rect x={88} y={87} width={30} height={29} fill="#F1F1F1" />
      <rect x={29} y={57} width={30} height={30} fill="#5D5D61" />
      <rect x={29} y={28} width={30} height={29} fill="#C6C6CB" />
    </svg>
    <?php

  }
} else {
  ?>
  <svg width="<?php echo $size ?>" height="<?php echo $size * (115 / 113) ?>" viewBox="0 0 115 113" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect y="85" width="29" height="29" fill="#0163A9"/>
    <rect y="56" width="29" height="29" fill="#FF6600"/>
    <rect width="29" height="29" fill="#E8E8ED"/>
    <rect x="29" y="85" width="29" height="29" fill="#E8E8ED"/>
    <rect x="58" y="56" width="29" height="29" fill="#FF6600"/>
    <rect x="87" y="85" width="28" height="29" fill="#038A9C"/>
    <rect x="29" y="56" width="29" height="29" fill="#0163A9"/>
    <rect x="29" y="27" width="29" height="29" fill="#038A9C"/>
  </svg>

  <?php

}
}