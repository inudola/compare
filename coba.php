<html lang="en" class="wf-poppins-n3-active wf-poppins-n4-active wf-poppins-n5-active wf-poppins-n6-active wf-poppins-n7-active wf-roboto-n3-active wf-roboto-n4-active wf-roboto-n5-active wf-roboto-n6-active wf-roboto-n7-active wf-active"><head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000000">
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="/manifest.json">
    <!--
      Notice the use of  in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:300,400,500,600,700" media="all"><script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/demo1/pages/general/login/login-1.css" rel="stylesheet" type="text/css">
    <!--end::Page Vendors Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="./assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css">
    <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css">


    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="./assets/css/demo1/pages/general/wizard/wizard-1.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css">
    <!--end::Layout Skins -->
    <title>Ceisa 4.0</title>
<style type="text/css">.dx-g-bs4-cursor-pointer {
  cursor: pointer;
}

.dx-g-bs4-user-select-none {
  user-select: none;
  -moz-user-select: none;
  -webkit-user-select: "none";
}

.dx-g-bs4-inactive:after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: white;
  opacity: 0.7;
  pointer-events: none;
  z-index: 400;
}

.dx-g-bs4-overflow-hidden {
  overflow: hidden;
}

.dx-g-bs4-column-chooser-item {
  font-size: initial;
}

.dx-g-bs4-column-chooser-checkbox {
  margin-right: 10px;
}

.dx-g-bs4-sorting-indicator {
  top: 0;
  font-size: 11px;
}

span.dx-g-bs4-group-panel-item-icon {
  top: -2px;
  font-size: 11px;
  margin-left: -4px;
}

.dx-g-bs4-group-panel-empty-message {
  padding: 11px 0;
}

.dx-g-bs4-table-detail-toggle-cell-icon {
  font-size: 9px;
  top: 0;
}

.dx-g-bs4-table-group-row-cell {
  font-size: 9px;
  top: 0;
  margin-right: 10px;
}

.dx-g-bs4-table {
  table-layout: fixed;
  border-collapse: separate;
  border-spacing: 0;
  margin: 0;
}

.dx-g-bs4-table-sticky {
  position: -webkit-sticky;
  position: sticky;
  z-index: 500;
}

.dx-g-bs4-table-head {
  top: 0;
}

.dx-g-bs4-table-foot {
  bottom: 0;
}

.dx-g-bs4-table-container {
  flex-grow: 1;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
}

.dx-g-bs4-grouping-control {
  width: 19px;
}

.dx-g-bs4-grouping-control-icon {
  top: 0;
  font-size: 12px;
  padding: 5px;
}

.dx-g-bs4-table-header-cell-wrapper {
  overflow: hidden;
  text-overflow: ellipsis;
  margin: -5px;
  padding: 5px;
  flex: 1 1;
}

.dx-g-bs4-table-header-cell-left {
  margin-right: 14px;
}

.dx-g-bs4-table-header-cell-right {
  margin-left: 14px;
}

.table .dx-g-bs4-table-edit-cell {
  padding: 5px;
}

button.dx-g-bs4-table-edit-command-cell {
  padding: 11px;
}

.dx-g-bs4-toolbar {
  align-items: center;
  min-height: 55px;
  flex: none;
}

.dx-g-bs4-paging-panel {
  flex: none;
}

.dx-g-bs4-toggle-button {
  cursor: pointer;
  display: inline-block;
  font-size: 9px;
  top: 0;
  margin-top: -0.5rem;
  margin-bottom: -0.5rem;
  box-sizing: content-box;
  min-width: 9px;
}

.dx-g-bs4-toggle-button-hidden {
  opacity: 0;
  cursor: default;
}

.dx-g-bs4-sorting-control-text,
.dx-g-bs4-table-tree-content,
.dx-g-bs4-table-cell,
.dx-rg-bs4-table-header-title {
  overflow: hidden;
  text-overflow: ellipsis;
}

.dx-g-bs4-resizing-control-wrapper {
  user-select: none;
  -moz-user-select: none;
  -webkit-user-select: "none";
  position: absolute;
  width: 16px;
  top: 0;
  right: -8px;
  height: 100%;
  cursor: col-resize;
  z-index: 100;
  opacity: 0;
}

.dx-g-bs4-header-cell:nth-last-child(2) .dx-g-bs4-resizing-control-wrapper {
  right: 0;
  width: 8px;
}
.dx-g-bs4-header-cell:hover .dx-g-bs4-resizing-control-wrapper {
  opacity: 1;
}

.dx-g-bs4-resizing-control-wrapper-active {
  opacity: 1;
}

.dx-g-bs4-resize-control-line {
  opacity: 1;
  position: absolute;
  height: 50%;
  width: 1px;
  top: 25%;
  transition: all linear 100ms;
}

.dx-g-bs4-resize-control-line-first {
  left: 7px;
}

.dx-g-bs4-resize-control-line-second {
  left: 9px;
}

.dx-g-bs4-resize-control-line-active {
  left: 8px;
  height: calc(100% - 4px);
  top: 2px;
}

.dx-g-bs4-banded-header-cell:last-child {
  border-right: 0 !important;
}

.dx-g-bs4-banded-cell {
  border-bottom: none !important;
}
.dx-g-bs4-banded-cell:last-child {
  border-right: none !important;
}

.dx-g-bs4-filter-selector-item {
  font-size: initial;
}
.dx-g-bs4-filter-selector-item:focus {
  outline: none;
}

.dx-g-bs4-filter-selector-item-text {
  margin-left: 10px;
}

.dx-g-bs4-filter-selector-icon {
  width: 16px;
  height: 16px;
  fill: currentColor;
}

.table-active, .table-active > td, .table-active > th {
  background-color: #f5f5f5;
}

.dx-g-bs4-fixed-cell,
.dx-g-bs4-fixed-group-cell {
  z-index: 300;
  background-clip: padding-box;
}

.dx-g-bs4-fixed-group-cell {
  display: inline-block;
}

.dx-g-bs4-table-summary-item {
  font-weight: bold;
}

.dx-g-bs4-table-invisible-row {
  visibility: hidden;
}

.dx-g-bs4-header-cell-content {
  min-width: 0;
}

.dx-g-bs4-sort-indicator-invisible {
  opacity: 0;
}

.dx-g-bs4-fixed-block {
  position: -webkit-sticky;
  position: sticky;
  display: inline-block;
  left: 50%;
}
.dx-g-bs4-fixed-block .text-muted {
  display: inline-block;
  transform: translateX(-50%);
  -ms-transform: translateX(-50%);
}

.dx-g-bs4-skeleton-cell {
  padding: 7px;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAACqCAYAAABbAOqQAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA39pVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQyIDc5LjE2MDkyNCwgMjAxNy8wNy8xMy0wMTowNjozOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpjYWQ2ODE5MS00ZDMxLWRjNGYtOTU0NC1jNjJkMTIxMjY2M2IiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjY1RUVFQzAzRDYzMTFFODlFNThCOUJBQjU4Q0EzRDgiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjY1RUVFQkYzRDYzMTFFODlFNThCOUJBQjU4Q0EzRDgiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVlMjM1Y2U0LTc5ZWUtNGI0NC05ZjlkLTk2NTZmZGFjNjhhNCIgc3RSZWY6ZG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjk1OTQ2MjBiLTUyMTQtYTM0Yy04Nzc5LTEwMmEyMTY4MTlhOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PvLbJKYAAADrSURBVHja7N3BDYBACABBsQn7L48q0BoMD5SZxAZuc74gF1V1MMfpCARBEEEQRBAEEQRBdovnuxxDq3RD/LIQRBAEQRBBEEQQBBEEQQQBAAAAAAAAABhi8gZVbgxi6kQQBBEEQQRBEEEQRBAEQRBBAAAAAAAAAAAabX2Daux2lqkTQRBEEAQRBEEEQRBBEARBBAEAAAAAAAAAaLR1g2osUyeCIIggCCIIggiCIIIgCIIIAgAAAAAAAADQ6KsbVPnXIKZOBEEQQRBEEAQRBEEEQRAEEYRXoqqcghuCIIIgiCAIIgiCCMIUtwADALYCCr92l++TAAAAAElFTkSuQmCC);
  background-repeat: no-repeat repeat;
  background-origin: content-box;
}</style><style type="text/css">/**
 * Open iconic, 1.1.1
 * Created by Iconic
 * http://useiconic.com/open-iconic/
 * MIT License License
 */
@charset "UTF-8";

@font-face {
  font-family: "open-iconic";
  src: url(/static/media/open-iconic.47151e87.eot);
  src: url(/static/media/open-iconic.47151e87.eot?#iefix) format('eot'),

    url(/static/media/open-iconic.3cf97837.woff) format('woff'),
    url(/static/media/open-iconic.93cc7aa6.ttf) format('truetype'),
    url(/static/media/open-iconic.eca2c267.svg#open-iconic) format('svg');
}

.oi {
  font-family: "open-iconic";
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-style: normal;
  font-feature-settings: normal;
  font-variant: normal;
  font-weight: normal;
  speak: none;
  text-decoration: none;
  text-transform: none;
}


.oi-account-login:before {
  content: "\e000";
}
.oi-account-logout:before {
  content: "\e001";
}
.oi-action-redo:before {
  content: "\e002";
}
.oi-action-undo:before {
  content: "\e003";
}
.oi-align-center:before {
  content: "\e004";
}
.oi-align-left:before {
  content: "\e005";
}
.oi-align-right:before {
  content: "\e006";
}
.oi-aperture:before {
  content: "\e007";
}
.oi-arrow-bottom:before {
  content: "\e008";
}
.oi-arrow-circle-bottom:before {
  content: "\e009";
}
.oi-arrow-circle-left:before {
  content: "\e00a";
}
.oi-arrow-circle-right:before {
  content: "\e00b";
}
.oi-arrow-circle-top:before {
  content: "\e00c";
}
.oi-arrow-left:before {
  content: "\e00d";
}
.oi-arrow-right:before {
  content: "\e00e";
}
.oi-arrow-thick-bottom:before {
  content: "\e00f";
}
.oi-arrow-thick-left:before {
  content: "\e010";
}
.oi-arrow-thick-right:before {
  content: "\e011";
}
.oi-arrow-thick-top:before {
  content: "\e012";
}
.oi-arrow-top:before {
  content: "\e013";
}
.oi-audio-spectrum:before {
  content: "\e014";
}
.oi-audio:before {
  content: "\e015";
}
.oi-badge:before {
  content: "\e016";
}
.oi-ban:before {
  content: "\e017";
}
.oi-bar-chart:before {
  content: "\e018";
}
.oi-basket:before {
  content: "\e019";
}
.oi-battery-empty:before {
  content: "\e01a";
}
.oi-battery-full:before {
  content: "\e01b";
}
.oi-beaker:before {
  content: "\e01c";
}
.oi-bell:before {
  content: "\e01d";
}
.oi-bluetooth:before {
  content: "\e01e";
}
.oi-bold:before {
  content: "\e01f";
}
.oi-bolt:before {
  content: "\e020";
}
.oi-book:before {
  content: "\e021";
}
.oi-bookmark:before {
  content: "\e022";
}
.oi-box:before {
  content: "\e023";
}
.oi-briefcase:before {
  content: "\e024";
}
.oi-british-pound:before {
  content: "\e025";
}
.oi-browser:before {
  content: "\e026";
}
.oi-brush:before {
  content: "\e027";
}
.oi-bug:before {
  content: "\e028";
}
.oi-bullhorn:before {
  content: "\e029";
}
.oi-calculator:before {
  content: "\e02a";
}
.oi-calendar:before {
  content: "\e02b";
}
.oi-camera-slr:before {
  content: "\e02c";
}
.oi-caret-bottom:before {
  content: "\e02d";
}
.oi-caret-left:before {
  content: "\e02e";
}
.oi-caret-right:before {
  content: "\e02f";
}
.oi-caret-top:before {
  content: "\e030";
}
.oi-cart:before {
  content: "\e031";
}
.oi-chat:before {
  content: "\e032";
}
.oi-check:before {
  content: "\e033";
}
.oi-chevron-bottom:before {
  content: "\e034";
}
.oi-chevron-left:before {
  content: "\e035";
}
.oi-chevron-right:before {
  content: "\e036";
}
.oi-chevron-top:before {
  content: "\e037";
}
.oi-circle-check:before {
  content: "\e038";
}
.oi-circle-x:before {
  content: "\e039";
}
.oi-clipboard:before {
  content: "\e03a";
}
.oi-clock:before {
  content: "\e03b";
}
.oi-cloud-download:before {
  content: "\e03c";
}
.oi-cloud-upload:before {
  content: "\e03d";
}
.oi-cloud:before {
  content: "\e03e";
}
.oi-cloudy:before {
  content: "\e03f";
}
.oi-code:before {
  content: "\e040";
}
.oi-cog:before {
  content: "\e041";
}
.oi-collapse-down:before {
  content: "\e042";
}
.oi-collapse-left:before {
  content: "\e043";
}
.oi-collapse-right:before {
  content: "\e044";
}
.oi-collapse-up:before {
  content: "\e045";
}
.oi-command:before {
  content: "\e046";
}
.oi-comment-square:before {
  content: "\e047";
}
.oi-compass:before {
  content: "\e048";
}
.oi-contrast:before {
  content: "\e049";
}
.oi-copywriting:before {
  content: "\e04a";
}
.oi-credit-card:before {
  content: "\e04b";
}
.oi-crop:before {
  content: "\e04c";
}
.oi-dashboard:before {
  content: "\e04d";
}
.oi-data-transfer-download:before {
  content: "\e04e";
}
.oi-data-transfer-upload:before {
  content: "\e04f";
}
.oi-delete:before {
  content: "\e050";
}
.oi-dial:before {
  content: "\e051";
}
.oi-document:before {
  content: "\e052";
}
.oi-dollar:before {
  content: "\e053";
}
.oi-double-quote-sans-left:before {
  content: "\e054";
}
.oi-double-quote-sans-right:before {
  content: "\e055";
}
.oi-double-quote-serif-left:before {
  content: "\e056";
}
.oi-double-quote-serif-right:before {
  content: "\e057";
}
.oi-droplet:before {
  content: "\e058";
}
.oi-eject:before {
  content: "\e059";
}
.oi-elevator:before {
  content: "\e05a";
}
.oi-ellipses:before {
  content: "\e05b";
}
.oi-envelope-closed:before {
  content: "\e05c";
}
.oi-envelope-open:before {
  content: "\e05d";
}
.oi-euro:before {
  content: "\e05e";
}
.oi-excerpt:before {
  content: "\e05f";
}
.oi-expand-down:before {
  content: "\e060";
}
.oi-expand-left:before {
  content: "\e061";
}
.oi-expand-right:before {
  content: "\e062";
}
.oi-expand-up:before {
  content: "\e063";
}
.oi-external-link:before {
  content: "\e064";
}
.oi-eye:before {
  content: "\e065";
}
.oi-eyedropper:before {
  content: "\e066";
}
.oi-file:before {
  content: "\e067";
}
.oi-fire:before {
  content: "\e068";
}
.oi-flag:before {
  content: "\e069";
}
.oi-flash:before {
  content: "\e06a";
}
.oi-folder:before {
  content: "\e06b";
}
.oi-fork:before {
  content: "\e06c";
}
.oi-fullscreen-enter:before {
  content: "\e06d";
}
.oi-fullscreen-exit:before {
  content: "\e06e";
}
.oi-globe:before {
  content: "\e06f";
}
.oi-graph:before {
  content: "\e070";
}
.oi-grid-four-up:before {
  content: "\e071";
}
.oi-grid-three-up:before {
  content: "\e072";
}
.oi-grid-two-up:before {
  content: "\e073";
}
.oi-hard-drive:before {
  content: "\e074";
}
.oi-header:before {
  content: "\e075";
}
.oi-headphones:before {
  content: "\e076";
}
.oi-heart:before {
  content: "\e077";
}
.oi-home:before {
  content: "\e078";
}
.oi-image:before {
  content: "\e079";
}
.oi-inbox:before {
  content: "\e07a";
}
.oi-infinity:before {
  content: "\e07b";
}
.oi-info:before {
  content: "\e07c";
}
.oi-italic:before {
  content: "\e07d";
}
.oi-justify-center:before {
  content: "\e07e";
}
.oi-justify-left:before {
  content: "\e07f";
}
.oi-justify-right:before {
  content: "\e080";
}
.oi-key:before {
  content: "\e081";
}
.oi-laptop:before {
  content: "\e082";
}
.oi-layers:before {
  content: "\e083";
}
.oi-lightbulb:before {
  content: "\e084";
}
.oi-link-broken:before {
  content: "\e085";
}
.oi-link-intact:before {
  content: "\e086";
}
.oi-list-rich:before {
  content: "\e087";
}
.oi-list:before {
  content: "\e088";
}
.oi-location:before {
  content: "\e089";
}
.oi-lock-locked:before {
  content: "\e08a";
}
.oi-lock-unlocked:before {
  content: "\e08b";
}
.oi-loop-circular:before {
  content: "\e08c";
}
.oi-loop-square:before {
  content: "\e08d";
}
.oi-loop:before {
  content: "\e08e";
}
.oi-magnifying-glass:before {
  content: "\e08f";
}
.oi-map-marker:before {
  content: "\e090";
}
.oi-map:before {
  content: "\e091";
}
.oi-media-pause:before {
  content: "\e092";
}
.oi-media-play:before {
  content: "\e093";
}
.oi-media-record:before {
  content: "\e094";
}
.oi-media-skip-backward:before {
  content: "\e095";
}
.oi-media-skip-forward:before {
  content: "\e096";
}
.oi-media-step-backward:before {
  content: "\e097";
}
.oi-media-step-forward:before {
  content: "\e098";
}
.oi-media-stop:before {
  content: "\e099";
}
.oi-medical-cross:before {
  content: "\e09a";
}
.oi-menu:before {
  content: "\e09b";
}
.oi-microphone:before {
  content: "\e09c";
}
.oi-minus:before {
  content: "\e09d";
}
.oi-monitor:before {
  content: "\e09e";
}
.oi-moon:before {
  content: "\e09f";
}
.oi-move:before {
  content: "\e0a0";
}
.oi-musical-note:before {
  content: "\e0a1";
}
.oi-paperclip:before {
  content: "\e0a2";
}
.oi-pencil:before {
  content: "\e0a3";
}
.oi-people:before {
  content: "\e0a4";
}
.oi-person:before {
  content: "\e0a5";
}
.oi-phone:before {
  content: "\e0a6";
}
.oi-pie-chart:before {
  content: "\e0a7";
}
.oi-pin:before {
  content: "\e0a8";
}
.oi-play-circle:before {
  content: "\e0a9";
}
.oi-plus:before {
  content: "\e0aa";
}
.oi-power-standby:before {
  content: "\e0ab";
}
.oi-print:before {
  content: "\e0ac";
}
.oi-project:before {
  content: "\e0ad";
}
.oi-pulse:before {
  content: "\e0ae";
}
.oi-puzzle-piece:before {
  content: "\e0af";
}
.oi-question-mark:before {
  content: "\e0b0";
}
.oi-rain:before {
  content: "\e0b1";
}
.oi-random:before {
  content: "\e0b2";
}
.oi-reload:before {
  content: "\e0b3";
}
.oi-resize-both:before {
  content: "\e0b4";
}
.oi-resize-height:before {
  content: "\e0b5";
}
.oi-resize-width:before {
  content: "\e0b6";
}
.oi-rss-alt:before {
  content: "\e0b7";
}
.oi-rss:before {
  content: "\e0b8";
}
.oi-script:before {
  content: "\e0b9";
}
.oi-share-boxed:before {
  content: "\e0ba";
}
.oi-share:before {
  content: "\e0bb";
}
.oi-shield:before {
  content: "\e0bc";
}
.oi-signal:before {
  content: "\e0bd";
}
.oi-signpost:before {
  content: "\e0be";
}
.oi-sort-ascending:before {
  content: "\e0bf";
}
.oi-sort-descending:before {
  content: "\e0c0";
}
.oi-spreadsheet:before {
  content: "\e0c1";
}
.oi-star:before {
  content: "\e0c2";
}
.oi-sun:before {
  content: "\e0c3";
}
.oi-tablet:before {
  content: "\e0c4";
}
.oi-tag:before {
  content: "\e0c5";
}
.oi-tags:before {
  content: "\e0c6";
}
.oi-target:before {
  content: "\e0c7";
}
.oi-task:before {
  content: "\e0c8";
}
.oi-terminal:before {
  content: "\e0c9";
}
.oi-text:before {
  content: "\e0ca";
}
.oi-thumb-down:before {
  content: "\e0cb";
}
.oi-thumb-up:before {
  content: "\e0cc";
}
.oi-timer:before {
  content: "\e0cd";
}
.oi-transfer:before {
  content: "\e0ce";
}
.oi-trash:before {
  content: "\e0cf";
}
.oi-underline:before {
  content: "\e0d0";
}
.oi-vertical-align-bottom:before {
  content: "\e0d1";
}
.oi-vertical-align-center:before {
  content: "\e0d2";
}
.oi-vertical-align-top:before {
  content: "\e0d3";
}
.oi-video:before {
  content: "\e0d4";
}
.oi-volume-high:before {
  content: "\e0d5";
}
.oi-volume-low:before {
  content: "\e0d6";
}
.oi-volume-off:before {
  content: "\e0d7";
}
.oi-warning:before {
  content: "\e0d8";
}
.oi-wifi:before {
  content: "\e0d9";
}
.oi-wrench:before {
  content: "\e0da";
}
.oi-x:before {
  content: "\e0db";
}
.oi-yen:before {
  content: "\e0dc";
}
.oi-zoom-in:before {
  content: "\e0dd";
}
.oi-zoom-out:before {
  content: "\e0de";
}

</style></head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed">
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root"><body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"><div class="kt-grid kt-grid--ver kt-grid--root"><div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login"><div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile"><div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url(&quot;./assets/media//bg/bg-4.jpg&quot;);"><div class="kt-grid__item"><a href="#" class="kt-login__logo"><img src="./assets/media/logos/bc.png"></a></div><div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver"><div class="kt-grid__item kt-grid__item--middle"><h3 class="kt-login__title">Selamat datang di CEISA 4.0</h3><h4 class="kt-login__subtitle">The ultimate Bootstrap &amp; Angular 6 admin theme framework for next generation web apps.</h4></div></div><div class="kt-grid__item"><div class="kt-login__info"><div class="kt-login__copyright">© 2019 DJBC</div><div class="kt-login__menu"><a href="#" class="kt-link">Privacy</a><a href="#" class="kt-link">Legal</a><a href="#" class="kt-link">Contact</a></div></div></div></div><div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper"><div class="kt-login__head"><span class="kt-login__signup-label">Don't have an account yet?</span>&nbsp;&nbsp;<a href="#" class="kt-link kt-login__signup-link">Sign Up!</a></div><div class="kt-login__body"><div class="kt-login__form"><div class="kt-login__title"><h3>Sign In</h3></div><form class="kt-form" novalidate=""><div class="form-group"><input class="form-control" type="text" placeholder="ADMIN" name="email" autocomplete="off"></div><div class="form-group"><input class="form-control" type="password" placeholder="ADMIN" name="password"></div><div class="kt-login__actions"><a href="" class="kt-link kt-login__link-forgot">Forgot Password ?</a><a href="/" class="kt-link"><button id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Sign In</button></a></div></form></div></div></div></div></div></div></body></div>
<!--
  This HTML file is a template.
  If you open it directly in the browser, you will see an empty page.

  You can add webfonts, meta tags, or analytics to this file.
  The build step will place the bundled scripts into the <body> tag.

  To begin the development, run `npm start` or `yarn start`.
  To create a production bundle, use `npm run build` or `yarn build`.
-->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="./assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
<script src="./assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
<script src="./assets/js/demo1/pages/crud/metronic-datatable/base/data-json.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<script src="./assets/js/demo1/pages/crud/metronic-datatable/base/data-json.js" type="text/javascript"></script>
<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="./assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
<script src="./assets/js/demo1/pages/login/login-1.js" type="text/javascript"></script>

<!--end::Page Scripts -->
<script src="/static/js/bundle.js"></script><script src="/static/js/1.chunk.js"></script><script src="/static/js/main.chunk.js"></script>

</body></html>