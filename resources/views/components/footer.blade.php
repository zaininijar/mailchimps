<div id="scrnli_recorder_root">
    <template shadowrootmode="open">
        <div>
            <style></style>
            <div data-v-acf651b8="" class="app-root">
                <!---->
            </div>
            <style>
            .app-drawing-canvas[data-v-4a4934a8] {
                pointer-events: none;
                cursor: default;
                position: absolute;
                top: 0;
                left: 0;
            }

            .app-drawing-canvas.active[data-v-4a4934a8] {
                pointer-events: all;
                cursor: crosshair;
            }

            .app-bubble-clicker .bubble[data-v-bbbd8920] {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 99999999;
                width: 26px;
                height: 26px;
                transform: scale(0);
                opacity: 0;
                background: red;
                border-radius: 50%;
            }

            .app-bubble-clicker .bubble.show[data-v-bbbd8920] {
                animation: 0.6s ease 0s infinite bubble-bbbd8920;
            }

            @keyframes bubble-bbbd8920 {
                0% {
                    transform: scale(0);
                    opacity: 0;
                }

                30% {
                    transform: scale(1);
                    opacity: 0.6;
                }

                60% {
                    transform: scale(1);
                    opacity: 0.6;
                }

                100% {
                    transform: scale(0);
                    opacity: 0;
                }
            }

            .vc-editable-input {
                position: relative;
            }

            .vc-input__input {
                padding: 0;
                border: 0;
                outline: none;
            }

            .vc-input__label {
                text-transform: capitalize;
            }

            .vc-saturation,
            .vc-saturation--white,
            .vc-saturation--black {
                cursor: pointer;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
            }

            .vc-saturation--white {
                background: linear-gradient(to right,
                        #fff,
                        rgba(255, 255, 255, 0));
            }

            .vc-saturation--black {
                background: linear-gradient(to top, #000, rgba(0, 0, 0, 0));
            }

            .vc-saturation-pointer {
                cursor: pointer;
                position: absolute;
            }

            .vc-saturation-circle {
                cursor: head;
                width: 4px;
                height: 4px;
                box-shadow: 0 0 0 1.5px #fff, inset 0 0 1px 1px rgba(0, 0, 0, 0.3),
                    0 0 1px 2px rgba(0, 0, 0, 0.4);
                border-radius: 50%;
                transform: translate(-2px, -2px);
            }

            .vc-hue {
                position: absolute;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
                border-radius: 2px;
            }

            .vc-hue--horizontal {
                background: linear-gradient(to right,
                        #f00 0%,
                        #ff0 17%,
                        #0f0 33%,
                        #0ff 50%,
                        #00f 67%,
                        #f0f 83%,
                        #f00 100%);
            }

            .vc-hue--vertical {
                background: linear-gradient(to top,
                        #f00 0%,
                        #ff0 17%,
                        #0f0 33%,
                        #0ff 50%,
                        #00f 67%,
                        #f0f 83%,
                        #f00 100%);
            }

            .vc-hue-container {
                cursor: pointer;
                margin: 0 2px;
                position: relative;
                height: 100%;
            }

            .vc-hue-pointer {
                z-index: 2;
                position: absolute;
            }

            .vc-hue-picker {
                cursor: pointer;
                margin-top: 1px;
                width: 4px;
                border-radius: 1px;
                height: 8px;
                box-shadow: 0 0 2px rgba(0, 0, 0, 0.6);
                background: #fff;
                transform: translateX(-2px);
            }

            .vc-checkerboard {
                position: absolute;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
                background-size: contain;
            }

            .vc-alpha {
                position: absolute;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
            }

            .vc-alpha-checkboard-wrap {
                position: absolute;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
                overflow: hidden;
            }

            .vc-alpha-gradient {
                position: absolute;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
            }

            .vc-alpha-container {
                cursor: pointer;
                position: relative;
                z-index: 2;
                height: 100%;
                margin: 0 3px;
            }

            .vc-alpha-pointer {
                z-index: 2;
                position: absolute;
            }

            .vc-alpha-picker {
                cursor: pointer;
                width: 4px;
                border-radius: 1px;
                height: 8px;
                box-shadow: 0 0 2px rgba(0, 0, 0, 0.6);
                background: #fff;
                margin-top: 1px;
                transform: translateX(-2px);
            }

            .vc-sketch {
                position: relative;
                width: 200px;
                padding: 10px 10px 0;
                box-sizing: initial;
                background: #fff;
                border-radius: 4px;
                box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15),
                    0 8px 16px rgba(0, 0, 0, 0.15);
            }

            .vc-sketch-saturation-wrap {
                width: 100%;
                padding-bottom: 75%;
                position: relative;
                overflow: hidden;
            }

            .vc-sketch-controls {
                display: flex;
            }

            .vc-sketch-sliders {
                padding: 4px 0;
                flex: 1;
            }

            .vc-sketch-sliders .vc-hue,
            .vc-sketch-sliders .vc-alpha-gradient {
                border-radius: 2px;
            }

            .vc-sketch-hue-wrap {
                position: relative;
                height: 10px;
            }

            .vc-sketch-alpha-wrap {
                position: relative;
                height: 10px;
                margin-top: 4px;
                overflow: hidden;
            }

            .vc-sketch-color-wrap {
                width: 24px;
                height: 24px;
                position: relative;
                margin-top: 4px;
                margin-left: 4px;
                border-radius: 3px;
            }

            .vc-sketch-active-color {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                border-radius: 2px;
                box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.15),
                    inset 0 0 4px rgba(0, 0, 0, 0.25);
                z-index: 2;
            }

            .vc-sketch-color-wrap .vc-checkerboard {
                background-size: auto;
            }

            .vc-sketch-field {
                display: flex;
                padding-top: 4px;
            }

            .vc-sketch-field .vc-input__input {
                width: 90%;
                padding: 4px 0 3px 10%;
                border: none;
                box-shadow: inset 0 0 0 1px #ccc;
                font-size: 10px;
            }

            .vc-sketch-field .vc-input__label {
                display: block;
                text-align: center;
                font-size: 11px;
                color: #222;
                padding-top: 3px;
                padding-bottom: 4px;
                text-transform: capitalize;
            }

            .vc-sketch-field--single {
                flex: 1;
                padding-left: 6px;
            }

            .vc-sketch-field--double {
                flex: 2;
            }

            .vc-sketch-presets {
                margin-right: -10px;
                margin-left: -10px;
                padding-left: 10px;
                padding-top: 10px;
                border-top: 1px solid #eee;
            }

            .vc-sketch-presets-color {
                border-radius: 3px;
                overflow: hidden;
                position: relative;
                display: inline-block;
                margin: 0 10px 10px 0;
                vertical-align: top;
                cursor: pointer;
                width: 16px;
                height: 16px;
                box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.15);
            }

            .vc-sketch-presets-color .vc-checkerboard {
                box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.15);
                border-radius: 3px;
            }

            .vc-sketch__disable-alpha .vc-sketch-color-wrap {
                height: 10px;
            }

            .app-color-picker[data-v-5b5d1e13] {
                position: relative;
                font-family: "Didact Gothic", sans-serif;
            }

            .app-color-picker.no-transparent[data-v-5b5d1e13] .vc-sketch-color-wrap {
                height: 10px;
            }

            .app-color-picker.no-transparent[data-v-5b5d1e13] .vc-sketch-alpha-wrap {
                display: none;
            }

            .app-color-picker.no-transparent[data-v-5b5d1e13] .vc-sketch-field .vc-sketch-field--single:last-child {
                display: none;
            }

            .app-color-picker .color-wrapper[data-v-5b5d1e13] {
                height: 40px;
                width: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .app-color-picker .color[data-v-5b5d1e13] {
                width: 34px;
                height: 34px;
                border: 1px solid var(--input-border-color);
                border-radius: 4px;
                cursor: pointer;
            }

            .app-color-picker .drop-down[data-v-5b5d1e13] {
                display: none;
                position: absolute;
                bottom: 50px;
                left: 50%;
                transform: translate(-50%, 0%);
                z-index: 1000;
            }

            .app-color-picker.open .drop-down[data-v-5b5d1e13] {
                display: block;
            }

            /*! nouislider - 14.7.0 - 4/6/2021 */
            .noUi-target,
            .noUi-target * {
                -webkit-touch-callout: none;
                -webkit-tap-highlight-color: transparent;
                -webkit-user-select: none;
                -ms-touch-action: none;
                touch-action: none;
                -ms-user-select: none;
                -moz-user-select: none;
                user-select: none;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            .noUi-target {
                position: relative;
            }

            .noUi-base,
            .noUi-connects {
                width: 100%;
                height: 100%;
                position: relative;
                z-index: 1;
            }

            .noUi-connects {
                overflow: hidden;
                z-index: 0;
            }

            .noUi-connect,
            .noUi-origin {
                will-change: transform;
                position: absolute;
                z-index: 1;
                top: 0;
                right: 0;
                -ms-transform-origin: 0 0;
                -webkit-transform-origin: 0 0;
                -webkit-transform-style: preserve-3d;
                transform-origin: 0 0;
                transform-style: flat;
            }

            .noUi-connect {
                height: 100%;
                width: 100%;
            }

            .noUi-origin {
                height: 10%;
                width: 10%;
            }

            .noUi-txt-dir-rtl.noUi-horizontal .noUi-origin {
                left: 0;
                right: auto;
            }

            .noUi-vertical .noUi-origin {
                width: 0;
            }

            .noUi-horizontal .noUi-origin {
                height: 0;
            }

            .noUi-handle {
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                position: absolute;
            }

            .noUi-touch-area {
                height: 100%;
                width: 100%;
            }

            .noUi-state-tap .noUi-connect,
            .noUi-state-tap .noUi-origin {
                -webkit-transition: transform 0.3s;
                transition: transform 0.3s;
            }

            .noUi-state-drag * {
                cursor: inherit !important;
            }

            .noUi-horizontal {
                height: 18px;
            }

            .noUi-horizontal .noUi-handle {
                width: 34px;
                height: 28px;
                right: -17px;
                top: -6px;
            }

            .noUi-vertical {
                width: 18px;
            }

            .noUi-vertical .noUi-handle {
                width: 28px;
                height: 34px;
                right: -6px;
                top: -17px;
            }

            .noUi-txt-dir-rtl.noUi-horizontal .noUi-handle {
                left: -17px;
                right: auto;
            }

            .noUi-target {
                background: #fafafa;
                border-radius: 4px;
                border: 1px solid #d3d3d3;
                box-shadow: inset 0 1px 1px #f0f0f0, 0 3px 6px -5px #bbb;
            }

            .noUi-connects {
                border-radius: 3px;
            }

            .noUi-connect {
                background: #3fb8af;
            }

            .noUi-draggable {
                cursor: ew-resize;
            }

            .noUi-vertical .noUi-draggable {
                cursor: ns-resize;
            }

            .noUi-handle {
                border: 1px solid #d9d9d9;
                border-radius: 3px;
                background: #fff;
                cursor: default;
                box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #ebebeb,
                    0 3px 6px -3px #bbb;
            }

            .noUi-active {
                box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #ddd,
                    0 3px 6px -3px #bbb;
            }

            .noUi-handle:after,
            .noUi-handle:before {
                content: "";
                display: block;
                position: absolute;
                height: 14px;
                width: 1px;
                background: #e8e7e6;
                left: 14px;
                top: 6px;
            }

            .noUi-handle:after {
                left: 17px;
            }

            .noUi-vertical .noUi-handle:after,
            .noUi-vertical .noUi-handle:before {
                width: 14px;
                height: 1px;
                left: 6px;
                top: 14px;
            }

            .noUi-vertical .noUi-handle:after {
                top: 17px;
            }

            [disabled] .noUi-connect {
                background: #b8b8b8;
            }

            [disabled] .noUi-handle,
            [disabled].noUi-handle,
            [disabled].noUi-target {
                cursor: not-allowed;
            }

            .noUi-pips,
            .noUi-pips * {
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            .noUi-pips {
                position: absolute;
                color: #999;
            }

            .noUi-value {
                position: absolute;
                white-space: nowrap;
                text-align: center;
            }

            .noUi-value-sub {
                color: #ccc;
                font-size: 10px;
            }

            .noUi-marker {
                position: absolute;
                background: #ccc;
            }

            .noUi-marker-sub {
                background: #aaa;
            }

            .noUi-marker-large {
                background: #aaa;
            }

            .noUi-pips-horizontal {
                padding: 10px 0;
                height: 80px;
                top: 100%;
                left: 0;
                width: 100%;
            }

            .noUi-value-horizontal {
                -webkit-transform: translate(-50%, 50%);
                transform: translate(-50%, 50%);
            }

            .noUi-rtl .noUi-value-horizontal {
                -webkit-transform: translate(50%, 50%);
                transform: translate(50%, 50%);
            }

            .noUi-marker-horizontal.noUi-marker {
                margin-left: -1px;
                width: 2px;
                height: 5px;
            }

            .noUi-marker-horizontal.noUi-marker-sub {
                height: 10px;
            }

            .noUi-marker-horizontal.noUi-marker-large {
                height: 15px;
            }

            .noUi-pips-vertical {
                padding: 0 10px;
                height: 100%;
                top: 0;
                left: 100%;
            }

            .noUi-value-vertical {
                -webkit-transform: translate(0, -50%);
                transform: translate(0, -50%);
                padding-left: 25px;
            }

            .noUi-rtl .noUi-value-vertical {
                -webkit-transform: translate(0, 50%);
                transform: translate(0, 50%);
            }

            .noUi-marker-vertical.noUi-marker {
                width: 5px;
                height: 2px;
                margin-top: -1px;
            }

            .noUi-marker-vertical.noUi-marker-sub {
                width: 10px;
            }

            .noUi-marker-vertical.noUi-marker-large {
                width: 15px;
            }

            .noUi-tooltip {
                display: block;
                position: absolute;
                border: 1px solid #d9d9d9;
                border-radius: 3px;
                background: #fff;
                color: #000;
                padding: 5px;
                text-align: center;
                white-space: nowrap;
            }

            .noUi-horizontal .noUi-tooltip {
                -webkit-transform: translate(-50%, 0);
                transform: translate(-50%, 0);
                left: 50%;
                bottom: 120%;
            }

            .noUi-vertical .noUi-tooltip {
                -webkit-transform: translate(0, -50%);
                transform: translate(0, -50%);
                top: 50%;
                right: 120%;
            }

            .noUi-horizontal .noUi-origin>.noUi-tooltip {
                -webkit-transform: translate(50%, 0);
                transform: translate(50%, 0);
                left: auto;
                bottom: 10px;
            }

            .noUi-vertical .noUi-origin>.noUi-tooltip {
                -webkit-transform: translate(0, -18px);
                transform: translate(0, -18px);
                top: auto;
                right: 28px;
            }

            .app-vertical-range-slider .slider {
                height: 110px;
                width: 14px;
                border: none;
                background: #c3daff;
                border-radius: 2px;
                box-shadow: none;
            }

            .app-vertical-range-slider .slider.noUi-target {
                padding: 8px 0;
            }

            .app-vertical-range-slider .slider .noUi-connects {
                margin: -8px 0;
                height: calc(100% + 16px);
            }

            .app-vertical-range-slider .slider .noUi-touch-area {
                height: 16px;
                width: 16px;
                border-radius: 2px;
            }

            .app-vertical-range-slider .slider .noUi-handle {
                background: #ff9600;
                height: 16px;
                width: 16px;
                border-radius: 2px;
                box-shadow: none;
                border: none;
                right: -1px;
                top: 0px;
                outline: none;
            }

            .app-vertical-range-slider .slider .noUi-handle:before,
            .app-vertical-range-slider .slider .noUi-handle:after {
                display: none;
            }

            .app-vertical-range-slider .slider .noUi-connects .noUi-connect {
                background: #c3daff;
            }

            .app-vertical-range-slider .slider .noUi-connects .noUi-connect:first-child {
                background: #3c84f7;
            }

            button.btn[data-v-dd2c3b0c] {
                display: inline-block;
                font-weight: 300;
                line-height: 1.25;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                user-select: none;
                border: 1px solid transparent;
                cursor: pointer;
                letter-spacing: 1px;
                transition: all 0.15s ease;
            }

            button.btn.btn-sm[data-v-dd2c3b0c] {
                padding: 0.4rem 0.8rem;
                font-size: 0.8rem;
                border-radius: 0.2rem;
            }

            button.btn.btn-primary[data-v-dd2c3b0c] {
                color: #fff;
                background-color: #45c8f1;
                border-color: #45c8f1;
            }

            button.btn.btn-outline-primary[data-v-dd2c3b0c] {
                color: #45c8f1;
                background-color: transparent;
                border-color: #45c8f1;
            }

            button.btn.btn-danger[data-v-dd2c3b0c] {
                color: #fff;
                background-color: #ff4949;
                border-color: #ff4949;
            }

            .text-muted[data-v-dd2c3b0c] {
                color: #8492a6;
            }

            .text-center[data-v-dd2c3b0c] {
                text-align: center;
            }

            .drop-down-enter[data-v-dd2c3b0c],
            .drop-down-leave-to[data-v-dd2c3b0c] {
                transform: translateX(0) translateY(-20px);
                transition-timing-function: cubic-bezier(0.74, 0.04, 0.26, 1.05);
                opacity: 0;
            }

            .drop-down-enter-active[data-v-dd2c3b0c],
            .drop-down-leave-active[data-v-dd2c3b0c] {
                transition: all 0.15s;
            }

            .move-left-enter[data-v-dd2c3b0c],
            .move-left-leave-to[data-v-dd2c3b0c] {
                transform: translateY(0) translateX(-80px);
                transition-timing-function: cubic-bezier(0.74, 0.04, 0.26, 1.05);
                opacity: 0;
            }

            .move-left-enter-active[data-v-dd2c3b0c],
            .move-left-leave-active[data-v-dd2c3b0c] {
                transition: all 0.15s;
            }

            .no-tr[data-v-dd2c3b0c] {
                transition: none !important;
            }

            .no-tr *[data-v-dd2c3b0c] {
                transition: none !important;
            }

            .overlay[data-v-dd2c3b0c] {
                position: fixed;
                background: rgba(220, 220, 220, 0.8);
                display: flex;
                align-items: center;
                justify-content: center;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                transition: all 0.2s ease;
                opacity: 0;
                visibility: hidden;
            }

            .overlay .modal[data-v-dd2c3b0c] {
                transition: all 0.2s ease;
                opacity: 0;
                transform: scale(0.6);
                overflow: hidden;
            }

            .overlay.show[data-v-dd2c3b0c] {
                opacity: 1;
                visibility: visible;
            }

            .overlay.show .modal[data-v-dd2c3b0c] {
                opacity: 1;
                transform: scale(1);
            }

            .panel[data-v-dd2c3b0c] {
                padding: 6px 10px;
                display: flex;
                width: 100%;
                box-sizing: border-box;
                align-items: center;
                border-radius: 6px;
                position: relative;
                border: 1px solid #eaf7ff;
                background: #f7fcff;
                outline: none;
                transition: all 0.07s ease-in-out;
            }

            .btn[data-v-dd2c3b0c] {
                cursor: pointer;
                box-sizing: border-box;
            }

            .light-btn[data-v-dd2c3b0c] {
                padding: 10px 12px;
                display: flex;
                width: 100%;
                box-sizing: border-box;
                align-items: center;
                border-radius: 6px;
                position: relative;
                border: 1px solid #eaf7ff;
                background: #f7fcff;
                outline: none;
                cursor: pointer;
                transition: all 0.07s ease-in-out;
            }

            .light-btn[data-v-dd2c3b0c]:hover {
                background: #e0f4ff;
                border-color: #8acfff;
            }

            .primary-btn[data-v-dd2c3b0c] {
                background: #239bf5;
                color: white;
                border-radius: 6px;
                height: 46px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: 0.2s ease;
                font-size: 14px;
                font-family: "Didact Gothic Regular", sans-serif;
            }

            .primary-btn[data-v-dd2c3b0c]:hover {
                background: #40a8f6;
                color: white;
                text-decoration: none;
            }

            .shake[data-v-dd2c3b0c] {
                animation: shake-dd2c3b0c 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
                transform: translate3d(0, 0, 0);
            }

            @keyframes shake-dd2c3b0c {

                10%,
                90% {
                    transform: translate3d(-1px, 0, 0);
                }

                20%,
                80% {
                    transform: translate3d(2px, 0, 0);
                }

                30%,
                50%,
                70% {
                    transform: translate3d(-4px, 0, 0);
                }

                40%,
                60% {
                    transform: translate3d(4px, 0, 0);
                }
            }

            .pulse[data-v-dd2c3b0c] {
                animation: pulse-dd2c3b0c 2s ease infinite;
            }

            @keyframes pulse-dd2c3b0c {
                0% {
                    opacity: 0.7;
                }

                50% {
                    opacity: 0.4;
                }

                100% {
                    opacity: 0.7;
                }
            }

            .flash-once[data-v-dd2c3b0c] {
                animation: flash-once 3.5s ease 1;
            }

            @keyframes fade-up-dd2c3b0c {
                0% {
                    transform: translate3d(0, 10px, 0);
                    opacity: 0;
                }

                100% {
                    transform: translate3d(0, 0, 0);
                    opacity: 1;
                }
            }

            .fade-in[data-v-dd2c3b0c] {
                animation: fade-in-dd2c3b0c 0.3s ease-in-out;
            }

            @keyframes fade-in-dd2c3b0c {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            .spin[data-v-dd2c3b0c] {
                animation-name: spin-dd2c3b0c;
                animation-duration: 2000ms;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes spin-dd2c3b0c {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            .bounceIn[data-v-dd2c3b0c] {
                animation-name: bounceIn-dd2c3b0c;
                transform-origin: center bottom;
                animation-duration: 1s;
                animation-fill-mode: both;
                animation-iteration-count: 1;
            }

            @keyframes bounceIn-dd2c3b0c {

                0%,
                20%,
                40%,
                60%,
                80%,
                100% {
                    -webkit-transition-timing-function: cubic-bezier(0.215,
                            0.61,
                            0.355,
                            1);
                    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                }

                0% {
                    opacity: 1;
                    -webkit-transform: scale3d(0.8, 0.8, 0.8);
                    transform: scale3d(0.8, 0.8, 0.8);
                }

                20% {
                    -webkit-transform: scale3d(1.1, 1.1, 1.1);
                    transform: scale3d(1.1, 1.1, 1.1);
                }

                40% {
                    -webkit-transform: scale3d(0.9, 0.9, 0.9);
                    transform: scale3d(0.9, 0.9, 0.9);
                }

                60% {
                    opacity: 1;
                    -webkit-transform: scale3d(1.03, 1.03, 1.03);
                    transform: scale3d(1.03, 1.03, 1.03);
                }

                80% {
                    -webkit-transform: scale3d(0.97, 0.97, 0.97);
                    transform: scale3d(0.97, 0.97, 0.97);
                }

                100% {
                    opacity: 1;
                    -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
                }
            }

            @keyframes dots-dd2c3b0c {

                0%,
                20% {
                    color: rgba(0, 0, 0, 0);
                    text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0),
                        0.5em 0 0 rgba(0, 0, 0, 0);
                }

                40% {
                    color: #8492a6;
                    text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0),
                        0.5em 0 0 rgba(0, 0, 0, 0);
                }

                60% {
                    text-shadow: 0.25em 0 0 #8492a6, 0.5em 0 0 rgba(0, 0, 0, 0);
                }

                80%,
                100% {
                    text-shadow: 0.25em 0 0 #8492a6, 0.5em 0 0 #8492a6;
                }
            }

            @keyframes recording-dd2c3b0c {
                0% {
                    box-shadow: 0px 0px 5px 0px rgba(173, 0, 0, 0.3);
                }

                65% {
                    box-shadow: 0px 0px 5px 5px rgba(173, 0, 0, 0.3);
                }

                90% {
                    box-shadow: 0px 0px 5px 5px rgba(173, 0, 0, 0);
                }
            }

            @font-face {
                font-family: "Didact Gothic Regular";
                src: url(data:font/woff2;base64,d09GMgABAAAAAGZAABEAAAABOqQAAGXdgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGiQbgc0yHAwGYABECIFCCZdiEQgKgtxMgrpyATYCJAOKUAuFKgAEIAWGVAeVAwyBMVv1JXEDvX0rUXA7sOP5Oz/2bETsdjAn89cLUjGOTQXoDodQ0yhm9v//n51UZMw0QLJNPhzAL4qgh5htlgyTbJQUbwkmCho1Iln6qdMdqRQUwbHBvczDKaaL1nmbV/yGP1KbyfQILd4cHJ34wts+YyF+QjFFRZEtNBQkTExdcpdXnPp+9N1wHGSDWEVicmjRMnEP9+7PN3am4Z1VRESkmGzqZLEkrq5HTXkPmckmQjZzNrFtMYkcUSixhumKxseOH4xfxy/OzGys/TU+k3q9zjX+91cGdL2phrLE2LUhJGOKxdH6PPTZPd+t6pl5/liDkciMDElFm+35bRDN2exJVEnAE6S4JcGqSIJ/aMu3VMzhhVfqBl7S4BX4VGjTvOXzJg5PdJ++nXM3ufkD5RKrDdAoFfygluucfdfePyDjYgcogdDnX3NtDpIrjYXem5AzekKiX1+q+UJ3/wGYlIEhFCiHFEhu0tJBKycUagirWKNxCjBwvuzR8P+vrqTTh8DNU37ClruwQxpKeJeloDQLRb1F7a66ctiGtoI1h2T9zHmx6ot2Dp1WHLbXJhg0IxSIBkmEy3nKD0VF0ZQbQBTg7ssMiYLSSU2J4abc/G/m6vbmOtX+KtXui9sTs6i/BAkECQzswiqwWdAzuc+KGKHHwF3UkLuGeQx6BfoSvwBogH+pgIPzQp5wAQP83Hrr64gW5QCVyg0YY8G29xbvvcV7C5ZJ1aAn0jqwiTQQA5vz9IvMaI7LsJiRF+21Z/4HABy1lVU1cFI1RF2Bnh02YSXJJJlzgeQ3fKMqTfeJvvR5BfBvhm6Iei4tkF8m/rojE16dkSO3HeBHUR9UiVFnDPOiDsdixY7ED7FiW1RCI96QxPYWsWZvGhpM//eazURdfltFPimy+QFgK+A2Ff6rMQ3g27uJFRGW0VE7/p/dG18hUVdHRhaIgcDm0FcH/C+V5UHIh6aNnlpddFlc5hJhts3JK6olTU02Av7P1LSdjyUuKENOkfajH+XM56IJsfVz0fipqXb/LEDMzs7hdnFpMYROIC4tVxQFgKBuCQWQSlTKmcsFjgSUCCri6JRTFWOdiurcdupcumhcN/7/bdpXKsnu9hBQENruHliEINwg9Lv3vVcu7qqS5CNLstuWGdqNr16V5JLknjX0nw/kT2z30AeyewD55LtBAoBJvkEiDXsjomiDbCfJNk0/T183sHv2wTy5pYuaWYw0jIh2jdeC4kVVdG/8YLli9DD/6a6ARvTbyPx7GvZS2iKLiPg3IiKDERkGf++m7ESzk/O/78DtTtcR0h1EMMEYIYQQQrjjZ6zV78OOKXOybRvHmSxRUBEQUNBM59r9xxkBBLexv4qvHgST3eKPzPn/Pyi2r9r61+q9SBJFlrAzTiYEawMBxoB5UKtDPAxnR9i21QTwwIaCxCKH77N+JXgYoEpkDjtg7T6R5zIo0KWCKQKQiMVn6zVpy6Zcmptzbz6WQ+lJb/6Qv5WQEl0SS1mpKnPK4vJI6Sh9xVc+K980EU1qU9Nsbo4315vXmj+a/9qQNr9tbFvbntbb/tJp+ie7gG5pt7lz91Q9fa9h8lHvcO9i762+X39l/2R/pH9+8JPqwU3Fmrzjw24OwJ9tMG2wdNARWfXNYKjtyTvxpcP/nGLwxzBs+OxwxtAcaFZtXuEQzsrhZsidw+ZAXdAqWuMv/uzw8LBneHP4TuCIEWpGAaPToy/GnHWusnHQuGm8d9wzvjv2jP+b+E2yJ6snW+vlJ80Tt1Wf/yI/mnwx+QnRhsXFJyAkJiElI6egpqMXIIRBuCkyZMmRK59Jiammma5MuSrVatSq9xC7BrPNsVNSQDCC4sTrSzMsxwuiJCuqphumZTuu5wdRnGZ5UVZ103b9ME7zsm77cV7385yLC5xbbrvjrkn33Of2gMcLXvIyL5+3fOwTn/rcF770rd/96S9/+2f5eykmEiKbzuZnF3f3L28ffzGPNxjSbid3Jx/9nBehh9Cy7JUjUg+jEo184hNq+aq2g9r9fBylRhOelHfIp7wf8fxEkd8eS8VPDdMI+KH0jiPYbseNgw4+WOC6rQIERdxMN76TgIKdFqhltzbrdzxutJ/HM69xfCJyw0IUSTAZvQOH4IbgOGYK62qF9KsbAmaGnzBjKCrt6CnOy+CWW8L4W2kWLAfPYMWG1etW7Jx4+DVTMAoUCELWHCcJfTcdYUgU8vGTEy/Y+kAgLohocX4QQxgbxLDBDgg0uShsBJPQYvQJZaWNN2L2pJrxteE659+27UT6Yg5cPoHzeEtF0VSYLHbtYTxxIunu/mY4VZZq2Vrl8Mq1XB6eBA4MQoixa0YATEGClMMjOIAcDOGNzkelVywhTp3GyUqqSJJOUgE4gCGAMXA8p1wdYmBAIIAIEGCgpSGiNEEO/AMWXAYTbNiEQ+dp3Ksoh1S9YjlAuabKY0FvSwXSAAFADwb1KgnwC8RJUcA8hBBAEyQvlxmlgSLg1EInKlDh1QwUXpB+BVUwAAMElDmjOACVMCkQM9gTaKAB41lh3jaET2zKxFmFCZkgZ0cu9mqv1jfmMH5nbmBixLNRtD4+MBFxZW6PTA64C57DTmlDn/XCO/6ttVTtGWvrdyBxNOxcpqfQN+Co5ew3EDay/2ag8XipiUaubrfrTaJV92Ge8pqVorbUgbEz1rtYaCcCHDUhBBMwlEAHB3zognN/A4Q5IVktI0/l2hJ9bx6cXk7FBjDfkXKj3cbHJkZcA7czkzl3SjEoIW7AnR92sVV75aow4pwYNf7xXhNhLq8XCp+nu/JO1sddKjMxcQODSPuYH+CDSqNp08J7M+nSLbkF0k/6BsZrKbQJVt+tZ6Qv49goAhtMwIBc7Y9Y4WqQWijp/dWb3uC3Lvf27X6qdWba0bo7V05w9xSPTvPlOq/OYhYHnZvi6TTPZtpKbs39T20kFDx1ThZuyVA1IPE39NakmLMBLJ4Sq2XcWg8+zPwMeBh/sDHJEmMpDGt5sbYrdRXsoOTsHHBAwHWsvLbQJ7ifcCjYUZ8SY5uhFS3+EW7wxkRordveXMuxvF/nU9BPZbuGDDvuENrYFWxMmoqn5WLeuXCL+ymRBV1Qea9ZXQrYG9RyUNtG7bVLoIK/MrFDCDQ6LIHLt1RpkZvD0AnzCYWOeLHh1l7J+AT1auaN8fR/sDCd94ARXsGbyk8CZH581nZgCEILhTEzGWZ+dZNmk5UhYqPsduL9WIhLHBLGz8SpLzGZJoCopKicFMkEAh74kEAEiQIWCi42BSmOEsyPYYkEJCZkKjBzSTUWGiMMfjUpdR/xjCtFA3zVxFdJCZtM+AUelj6B8YvEJ1ZWmA0zFZG5wBqLrRRMMJoFNvR5LyjvrTuRD+xaCSnIQeeu1Pt7V16pH67ju66GjZ2vNvAng680tNyw9Y/82Oi/jHn32u9dB7sBuNl4/O2e+wPX+916pTsG7sI9uO+6f+cBwj1/98Jib22nYNJrKxx4dQEeoxylztRA1uubPpob32iilStxOzJZyT3kyUaWAHMoSeV4ZCJ3W5ok4WaZE3BQuCkEXb6cPHH1bS90OzBx1sj2x7UqnSPi10kMjsGLcmnkFm/6spAFG1QoCvsJnpzAOVIEff5eo4XxzSZ2ur3QZDXPYF8V4+gjW6g4zW6r3GStMfUhWu4kWlLq+k6pfZdmX9oBnvXikDO3GkCO5wVRCeN4xIHCOG/jOXqNlAxE5chkQexc61YyfZWcxVboDAhLjTPdvt/kbO4wz7B9LDLWLxaOUwKLjSgup3VkrbCjsZ6Jvojas84O0yD/QQhp6IMBEOrcBmwMiZh4St9UbHXeueDq5j47oca48BSe/h/1UtQfY+D/fL2uhvI0NDKSnfgoeCuUjlQQri+ukAISlu4BiVMbGyQ1xv9+lFx+N1oEQFl4QL0/H+SFwgF6gsqg0Yt/aGRHoCY0Joh3iTAKBGih23i0KdqDLvQjDX8/uyZIDPd5qFJ58GwCNYojgQusGaJ1it5yt6AO0sasCVuMH63P1dbDCoAShBmhuJk4HjxAMfVCieTV+nt7enz8/8Xv2mXr6iuj4Mj+YJMPkFlRtLxKQwq9mg1CiVDpwck4DoaWhDrRk9rRWYWQDXANiJt2iz2rGuIUyEKEEygwQLkXDopCxYRkkljxv4M9UmClJ4yUAFovbBhaEkv9aAq5Qigq1Jc+WrUXLWkWF+HKBHGU8S1gzDNgHlUiKIFcXZEvc66EMYdDKYdBL+geTTBSP5E+s0Xlr9KqJYtczePg2SBu004wXNlRMkhUIVEDksnHWpJRr7KLaQn/FgcrMc6JNcGdw+l8Tk4EuOKEe3BgSdYWBIP90HprTvD0U8Vd1pGuqQaV742sxqNwDkSM+4AZRbGAlshvhykEIlZcjdL4OaDoAbygggoSb8k9HSVKwiCYeoC95jW6FOxkwDMKBVKi+UGjh+LAI+1Mne2RlZwXjOEwXVW1YH73zprBnC2vlUEPpofnQ7n6a0nO7atKXsupG0Rgt8/mykyQt6fD3oG7qHZrp8emqeGwIGd7ewMEHKpLTYLwViMh/qk1ypz2jqrS5BLEANghBlQ6H40jyIBBWkdRO4huqO1cQ5slfUxU6+m0nLnfA1tZE8sLpFooIHEiqT9l+UgHU28pBkt/qUF671Qjq9CD2XR2TnPfphqb3LYN1HUkwc+L7tyoz9NS+1kQ0No+dYNmUL04xbyHeFqfeXTuKWGWnBU4zodvKgyC7F9cKO4lOQ1Kv1lVFqo237DN+W9rBIXkhdpZX+2lZZA4azyz7T7NQKkgGV4sBzb/AQUEokqKykqp9yMpMKFYR2LwTUEasrnFRiMtHpnChKjO52Fy78Q1EnVvVw5AT9Z3GoPZuk0eRiBAzeU07adSdPDkOlLzIayqwORxDdsbhyh/uqpYSd1mx2iliAxcwbz0PqAEKlgBNZ+3wfPYEmWJGVGo8jt0HSixYRKHnT0saqXUiy8VFLZGTSUHblgz5J5yyMyhTThp3/5gVQ5sTlmeFtVvOpBEp0syK/ZGmRqUiEYNWwzP0gW8WAlVVicXu6EgDV37mSqWkInRh45XFoJz9lS4Kxl1PyweYLoy1VA3FBhltyvXQBftWV2ari9TU1gGPKjQgPIww1JaNyE1kiPjo4iHvA5+hZTTUkBzMwhV2mjl39RqJAB5vcFlYIUiof7FpwQQHSP0f3pYTnpqll298hr3aWgqMsP0ozwug3TAINoz8iXZewWX0iY3XpJc9h4Wm6Y+OLTXDsXB6XHAXuiJ39DhW8LuGcxiYUD9zVFAM3gb3bw/jPN0M1RZAsf2o1FkUy09fADVDl6vFmP9sJ6eYi+Uppk2bNFCD4J1WJ7ZR7VfVenbCPkYY/Sg9WbndoIUxbadYDKq2pYZcOuMSVg1/6tEQyhDBQoqYVRqKEuyUnRdRfXLGNRIqPaQbHeyatOpjpfb7JMacHQ9Ahm5jOOSt24NCyEaY1m2zN32ugFJOSCEUIohGj19zyD0jJ2+r9i6azyjwqjuCgKbOixVA0C7xhDNT5wKc9jLQxS7xqTcspucoRTB/0EkRW4AA5XoViY7mKgWcAv/CNfVgarxAf01gYQrQAXPqkV2Ta0y8G0paaMcqhEDIng1kq4Ebks6vg1ZSlAlaeuzkCIp+RS4UTrZClNER6KiCLVrLJ0TAqo4XLiowReehgHQpGGzN7beChCT07VK6KimI39vgxM08VomL7oWcAa3Yx4NNJkclqvCTLuOEvTBmP9WaDr0hOowpR2s7f4c/NsLG3Rv904fgs+3+M+tygkXPHTDHZ9iexic2Z2DrG3Spksxurl/9G1fgEeK0ePaBs8wMiYWcpYERHScT+C2YlJq2oYub5TQDWzXGwys2JIksX2yImURmV0+TZSqt+X7fKle1hXCLiQfHZJSuRsPowH1qoiEGjbF7jQr4A1p91yLckFeAOPqubzPWWwmWZKroVLiFzWN1MrxpBrG9CIfarTqyfKjgAuxjmoFN4FASNBAhNtAYa4SdQdq9lcBikSdcEFfRuuIxpjNhBSrUPmV4mOGisGV9VRdylYnRKuWMe0IIvWoCkpOb1KcLko+H/KDYZBIR0HmEZ2AppRjYaEnZB9gIZ27YyZZSUTZ/yMwNrwP1aAYvCaJ2QV8AYVFLiMKjopMvn/f8mCOw1vjSg6BUZSEra6PCIpPYnLpnMA8k/i4wE0swqXzWstLQVhxKpFFlB4SlhH+AtlyRHPHPXPBQ49+ZeY9N9MWTLlYEGAnOJrlw4deGl7BU6xlnZ7CpIJAq9lLZhuXt1Xfjboi25hJh4GwUv4Ql+ajTGEtEVOGEwvJkS8EOGI72ZCXs01/2gQ/hK1dYviCENAO0qK2oGKg0LjMOY6zyOVEnamJe/R3DQfntiEFYSzeq2WPb2gSdbiSY40qYPhZNdN61ufToKZjeyuuhH+0kCi8HRoHy6SNIwSR4gwLgaUcVeNYptYJhi50xJaoP1GI28FLDQT1qtFimtc+ADetGCUawKxxzcBSxUg9BprsRWjxUBRRhMOwrEkIIbL7VXrDj1q97hx/iLvLjoICb+trQRTehrBLZBG8ZRfjhOI3tsz2wGOzwcyuIMsI9bX1ChbTDnSSgjziIOR30QtBV3yfenBlkmaPKhm/zst+OUypfV5abQhyJIqJuobQN/SQQL6RyI4LQ/15UvXZWxU4Z1fkTaJ8poYN5OWoN39gt94cuoDOgUABWgRZhC6qJPL4LV1mfq68kL1GuYEzdlgRa6rQFr0vtPOPxoGJ3GdBmbaC6uKJO+7pzVSFYarllrxYBiWjXcr8NpRFXgSuIqKayzQQwjDy2DUyWCE4ngJB/XodcTnz5GqxIRV9Umoo8gUY9P6+chwSXuqAoGGh+H1jNjaXw8RylTHo5f+iLAoMW6IIF9QwhpDXxXCRPPJYAzlJspOCAu46i4BC15IRzZ2xhKiDq6w0UfuSDq5RaO8MgNdDTYRAGrRuUWf8o9GyaPsdaXeFB6CLbo7Bq7VAZFF+XJpIWEnh6mno9jW+xkZg5Zcogldy4A5BqBS66Yro5WRd/N+HvuJhtS1HRu0aikqxvqvy+ZCDozaE/6lMqv8AnzwSZlIbmZAQQ0wabfaGurwjYA5a9T9Wv1znfbvfZAA+EwSkYP0st0LOkN/S5P9Zarer0a5Gnw7y+WrLPJB3lQfXe60ue61Oz2/ZUi1Lkxp1X2q3470Ouh3qqLesRuCbyKchFQV1FT2tMVhmV74O8zeFzxBcHjAnND60iuYhIPgeAhGCzKKlrv4YzAza3Ch3ttogWXO8rQ+EnvYwSsbeblKh1xi0PQk+AYq4J0NKiaXlgs/kZ8Kj+nzmiRmZSBSZLdpOjyvyBI8KL/Da7zXvOOLjUDodmvD3YgRFsFfDEBFejymR7+2wxAw/gmCjTAx2fSxcBiwnzqxJsEL+eh0JjrIaHDPEAsWYxePg4oErJMJbHTGJSXyvwL0oqahpaK2VKDeeUxg9fwEC6YQK0p3BQoRC2M+lOgZG4XQiRIoyRTQIWleSHMlSpCKWJr2dDPlgU2aZsmTLkStPPhPzgedfqDALygsUKlL8XQg44U4zXarhlrkhG7vKb0cYrFOv/lsSZD37oH9Xgmc3V+OM2+hh9YrbDzVhN02qzDNfZvsECbypPJ8DVZ5cW9UxbIYF8tUyqYvGgJymMT9spoVmWaRQg9vIUouRnGouQggyq1dmiXJLv01XwwzYwbKc1SDyWIMNhQHrqmFh/5aQQ1otp0SUwCO8KLCpOZiH8o0b6s4ZpfjcceUSaNBDXA3N3xNYEpCwlfvpob8Bc4qkOYrIKGskSuhr9MLEhLQCSIS7Kocr66Ezh0APD0wO6Jgs+KQ7p/DzwvQUwhgoRTj4QYpgb8du5orVHrLR4q5KYXV2MU7i2cWyO66e4HGn6KywJBlKZbLLuuLZAHXhNRKVsbGJlzgEuO3gJqhk87jNQ8dX8fLZlHvcBGAurQIreIhCVqs/yAQ2L2uT5whVSqRsx6tPkyNd8vXJk+Qm5SyJCHHSogBkpnxPZikHpJGFiiBl5/CYOAkSUOihXFqipyMvUYUUSMiBQ3gMX2H1XhRYXV6C57ihF2B4eCCQ0R+/YCGvTw+4KgqPPyQHD0icApT/DlXLxOEdusOBxU0wC/kO9Mo1BQ1NQsjALUB8m2NgATRI8NgsJ07AYyTCSLsxBc5s5jb/xwcLNGAufbkD/vj/558fBLBND8SEXJvFt1DfSJjxg9z1B/6OJ5oYk38M+es6o7/id0LtR/DyXp94nxXLOZDU0HSFgPJmaSR7D07mCib5disFBLEC1XGWpHf/ILG+g3P5HEmdEnXNxxqqI5SW//r4GIoObNk4B+pBoU1HEDAHDwEh/rGHgg7FxAZgnM9jVFpydjCD40UHrWnrS3TmmqFOVGzsi8ypEZnxbpnXpEqZK4dEoXjCEYkLm0QqMsEkia+1CMEx5isjBG8I4kg6SV+aU1pvIJaSgYp4lJKHhmaC0SJVIMuNCCsBjgQV/AniexjYrliHlQ2DsCit2XDHkx/Gnx1A713GKmqwsH/VamJ+b2ALmzFvNGUrRUsuCfN2xBtNs+K8a3lYwOW9EZSRGOd8cySYgCEUqPAYEkF82L2HC4k5SsiDf0wqVOl+zDllp/MUTcfDyK2mOAt3ndmPgY9uMAUMmhEzUAijWbPBEHQJNZUNf3MOETLFbKBh0GplWv1hERa1MJY4CvybNWZLRNiY3CisZFu6xcZcuus8YlQq49FUph4JiIokRHxbVHsekJAQJ8AG4lKPFEKmD1f/mFTE852GhFlDo5BIMI8M73ZiZeJpuo44sROPHO8247vtFKtxG0XZXYEKaeFuUrqaQ4KA1BIohNJQRT9A7EIGJhUyG7FqzoXRMHQt1unsnRVJvJpNHpKnKd2xpARbyM4WmHHaaf+03gwVQDaFEOSPJLSbPg6UWKmo4p2IVIJmCCUgEBg/KEOC37LWKjRwCENjVRTubLjXXEseFSqU9zxqVBIRTYQi2ghN/CIM0UVYoo9wiH+ESwIiPBIY4e8yBWZyB45v3CJTB3n2jpN6ojMWajp+Lx2zMKLjf4MOwgoTUw2CIQhCMGKhycjCkBmQGZGFI4tAFoksCvOxUK+DjZK4wozM18TO+aQd+4lPrJv+0MSDOCNu70mAtFAH9lt5ZKPh/s/VbHC1J7Fdg8iAhH1l0/1ZvIlh4w6WZJT9yMonQ/dlvRYpWCG8Gk4dYjUjbhk0v5vvh+d/bo9qctrf9aRCvRay/iiBwvLIk4buUu9JJ8tBeEDaJAOVSg1uqNMCGAbEhjdD68J0iuLk0GKCSBjT01H//F1PJoAGRr/T7ED4vHc0xIvUD2wmZGWl1a0HBCOBYkbRuBGFeTP+pFbrc7PuwllvUwgmeNRgoLyGNs8w7IO7ZUHsXhFAMR8aNMthVo5iaV6NPHaNS+8vJsE4Nu8+Zsxzcyh9ohyONWthGDDDshzlYLUcxyXQmKEyXAXQTubG6FjFpz95stVPKllYB0qsf+TJScvBk4BPzsGasKMgtFwcCs+MuRRVsVNvrrniG01ycH07HE2UvbmL01YKdF7WKUS+vCePu8V20fIkL20eb8eRfJg6g32w+VZUn7oan3b3PKa0FhsVzJTB+Tdtacm0CqcVtGTZUCtYCpE0AL0TGHbEm6fQubhhwbKGTb26HkKressuaisvp8EOvy8Wjgeiw9ji9Hb7ELs65ZJ8WrEmuOqJkpSzJVNBaW58qqHume6IIXi3nOtI3Xum4ZD909sKojpH2mtuRkvGE5nph2Zm6jQfJIiv7FmtLVrMXMEoKG1HMGAWqJERjePBdBQxYmCZKTJiccRsFHFi4DNXZMTjiPkoEsRAs1BkJOKIxSiSxMCxVGQk44jlKFLEAFgpMlJxxDAb1HrCZ/nFRrlZn/VWLGxw90tawCbh1MqlUaF43Yg3cJJ24aohRXFNxDuI+IVrRiiKx0Q8QSMy/hPCGcpGs65NhJh+3oL7aOMOJ9NJgAdBanUW2rHLaVHe2yC2g1nWA+YOoNx3JPOAduy37dcCeh4yNBZVJhClIkAmTcuvaDmBRhpwypAHm2ISJbGvbMjVY6ha7RqCHGJCysEieXASqKjH6SFJMbw0jcpryFkorC1acmRl0pKJZXmsoBUpKiJQDFqUUcMYmsvsN43fY9wUjiFZVaohZ+0zvj+pqcIhQk4nYa7ZqmkohCqkBR2dwAsgXQqZFcu4ZhC3OL/0iwKWqiXvkWUmYixee30JkGZiujJLxl4VBoYYcUUWb6JlNcINARHj9xMLt5F26TejTYFEpAb+WHHeoEc6tmqLXw4P9icKNSFGE2tyjNmkzFTNDLF7O+giCcZSFVhXC5OiWI/EA5y677OuU1WZftbLvgGeenGjOSrCbj7ehTKzFEJitMdqMVTgajSdfP29vm92h9PhvNqkrMnm85Me1ExyzBxTGo2m07J2G3Y73tHu2FrJmMlzpqErPJmAWSqnOp8TtVMmfefp39vQTpMcfqJzd09rjcN2aLGg47NCyR5vDWxNcjEy87HvxYjh15+me/B29+FNkPIAvKcHzNz6dDDuO+c+dIwkRkLxzBPQQx9uBtOhoctvxwef6P58nVp9yev0Zfyi/GfSrSmOXhKSzXBJUL4CLfVpgsI1rrk9to/raU6cM5Dnn5a+Wl1RoIyzFHbzoz0qzjpDWa823N5vEt0F02yVojkD/rDAGyH0QDDSl8Of/chgAPC4yfc0Cp3oUa1p1ChiXJZDTgnafb11WSVFPytLK8qXf1ht1lO5S443JORaCIrVMP+YqPxk3JzXQhUp78lPu+Kzn1yPmXs045yb1ElTEQ2Se3Ouk5WU8myxEGEQcyjn+rXI1Z5BlgsBbjQe+f9SzdfC3FBQnl/rx0SXVZylEboCcl4uDpIsyKvdwyR1NxW1ZP6cwVS4t0Fo5Av8p4bJx8nllhdvRdG3I2+MNUxRcXxV9bhQMO1YXlwyobZmojHU8jmnVUpeSbd+kJjrplOVdKta0ffFeTSyiC+qqHec6N+6wpQtV0/IB9yQEt8Pzqa0iIKcRxGyl2d2KNLeQ/XSI9HoLI2gQuO4LVptOPuzmNMFJVeDSmdpZhPZ5ihwFQYIF177ish6w+LrM3/WLRFbe/zaoDksXIttsnIishm40o4Z6N+G8lhmUY4Fj35R5CVLqeDBq227J2tRVMh2Krk7Dq/A9NNKO9Q+w6VQrsXLcpbFihBOs4x/LNp70ahA4YXVmrnBWL9I3BAXVV4FFR6X7bWpdQ3UAW3tHL10v3HW3SXWBHNPZsGoCF3AJmfwUDkS8ttysbBeZWNyKcaNCivW0TxPYYErQg4l5wVZBS4fdJhAwFLEgH3USJeTr5mi0J8VeHNsxSsFE30j0VUgC0LleiMl4LAwtp5Is2qvnNk68VOjO3LZ477lsQ3GghE/9vWdfYO+e5rBanJKeyUq34BunYYsQsbEsEmwIVYEcjSDTFiRiloelQhei9/te32DxeK1mNPbWGW7OHa1Jdn86WAeTPi4dG9kMzCxex9XpJp5HNd7i4kPz2teloIcBn0kpD6ZTZa0tIMTFeV9ue7coa/r+HEH6JiWXBvjEhLqsdomf9CdYNWmy4fniiH7qLhOkCXtgXYUe+Fz7nIz/4SxZglzlwH7kj2fAo9kyMtJFjhEFzbWMNeijBXoajjc05gMpltdcP9rTGdNp7becwXKQLOedt/kN8Iscs2429RS0M3OsOcFeGpSm/3XyUfNfbZPn7fkLSLXI3/SjLYbztl/bSFfSy5HF6n1qIQXndVXGzBgq3omUHawB191+qVP0Vly0bq7NJ5zfJn2bze3EQikOd5zJImAN23gPHiXRj44UD2o8t6pDvealCTO1cEyLHv/IK04+1OzKapTjvcGgbbySISz/y09/dfwUjnfC7xCZJPDMzR38ZHl7FoAtU6MRIbfLFYFYTYzAvUTZ741FQhdmMqIukFK3FwZFNThiarHVcu0YMrhT9w45Qq28ziHVpgwO544ZuVEUbzlWphkalF+joBnF+lWR46MneItnEEfawCy+Rkj29yRalyHVkXJdpJmoTp475w38CKsrXD17rtlGZDo4MIgQda5EUolDht5SCPIVrZXDmnVLe6tS85yOdwSyx8qU9+Dg4EfVapUnakc6Nzj7wOYexCrNNversYig7LUfG3XuZxxna+R8C3PdviomSE5S9pw0c9FReq+TRBaRf7l9qVaozKHrgYMsIC5B1JZ5tsmHZCQH0Zp1PVYBVmx20+pcWj/kWgnDjmtmTs+XStpLum9LirpWuimcAkfySouN54+rIE/xh6nmGgCwdLHySMyywVEJ8YM/ucYooAtisNj5qpAh+ON31whht91Oq98mm/t39fNV1/LHjBCEJdXG/H1nzyPuvrGagmAOrxL/pFu29uDeTdsMaf1FfdvtGm3w4gWUotGlICui/HejeMXfqxnIhY61KFDk0vq0ccCCzawKFgMkZtlc2C4iZyotW5J+IkQGd4Z7sQMAB/M+y5fvFRZcFQY1qwww7EgcMjMx6IOTue/AVUH5f6/wEJCBvMoIGQoQmNP6Pn3VA9yqWa/P6k/9+jDLYwkZK1IYieaf/WetqSIbcTGR6cDgnVQGZRxXxASeSQfJ7JsJC7rBFiMDEQufUc9BjLG5mth5SHyFvm1Y22snAcwB+vqryjmdUypKAhAatdHlcqvXiQ+KOT08mD8gqazud9mj0YCiSclWfmIruEwn30dPWBnrBCl8cXqsuQHzfPErsFc/3nSNFEwZ/vdggcgwLU6Eq/d7mXRvFwmuYUFT3BOPQ0ZzOKThk0oEihLlvyWIAcgW5Qy6KzyYGKtgWsiWZw5FPjjzfAZCHhk+NnIbgl1Rv4qE11n3tfsNuQclt5j1Tk9o0/DqU/gPJeU++yjEbya269Z+wiAezp10m+k2N81ZHg4fWX8Aa9wvSMoTm0EZDE8No1GYjghlHYW41cquM8lJScSZBd2KHwcKW+0LJGr249Idpxh4fcc5gC3yYVgH/pcQBzWd8W4cqEwfwDXqnZNJuXnv+8fUeRzlJycHK9YYcdIbWxPXOT0eUA/X++/wEc8oHxY/wfNusb2PnKuRw0MrHjSYSUFBciOMuQ8gAWWyCfHl+d0fqR9BJoYRVydw8lXlGGAEyoje5o1KhworylvpgXAuAoTN21Gn/T2cW3EIOd2Q/6UAkW988JDpj5rk7uLcfg1VyYlipoL2cGoZrzfhGrTbNVWyIbbkoOwxtTVl4nznHr/SkXID6Tx2GIPwvtTHvetcY0i4Zku0pnN8lUHKH6eaYU+arNpYJQyqnuejsSgUdolVTs8lAEZJG79ihNy4bVOTvDi73mL3s+IuJhBo5pmnUXMZdodkUc7UosIkgQQfF09j5C7DzGImJlNSwMftcvqyn61AgfqRyPpmMO43i2jLwXErqk9G1W95tz+/yKZmWXuJA+wMq1jGgnwTMvwEnxQ6Bj7EplGo1cLLZgpq+qKu1JjjDtfgstMB2ChCrgqC8RHhkFKnc2Anr2cIsoSSfIarDtLfEc+XyS0mwOPwmmmV7yTqikh8alWp3O/Lx3Mn3aqz8ii+KyPz+aZxe2rfI4sihUxZiymICv7QjYODMO/Nvnwbn7Ai04FwoH8j07hYNzt4xTu2AuvKW7FWmPwuzDAVp/TWtjofQT2OdI6+rjeR4yXQ7sh79Ot/GqZvT2bkt+yLL10YY1AvHQX1LqwNBYokUj+p0xR/GymyRau/P3WhYHilX9rIwC9WLj8i4MvI8PW0FTyMS5IiApO+rCuRnYz6fzhcYgCTfl5rmK8hvxfUZyYwYfSwQfVX84LxKTQyOCQa6HMgM3qFuNxiGeR1TYpY5KFn40OFBgpSg45R0inSiure2+OBMBoYJA9vnsBz15Hg6VEdg7UnKvkX0jSXOfJzONfZx49CcPyT7Pkn8MZg1vnrv6XMUekYcOpwjTh8GnXXodSUVT0x4L0uVsTlInvTgLOhB+ddHVs2sF75wcH3yjwZ68mUoIeUR6FpR6JX4SPM82+mjU9/4+JL7v9b/70Rtv0v7aTG49+Itj+9oVtc+jWOaMp14X6lxdOjyxFCd9C8IE0pHSrBYMoVBGpcWPmK9v2AAOZba226mBBqRkZ1VRMCgvbttJc1pFSW3YFKbzELIpPQq0APz0ZhNZxfRMgXjOblAkyGBiB3RxuyyQo6qzSNBDTl3EecR67UTeEQmfQMzmoEi9UENlVQmsxT6ywyIiQ9xhBZIVXndycWdvU1FDa2V29rWcJ+mHftnPbtxXmpx1ASkwCY9Qv7OsRzGtgFqoXcnbZCl2jbf29ocg1wK6BD343K/uiBqwOHtLxeIiWN6RBdmyaUbWYDqw3qUwiYhndad9SYzJvq7E7y+li4kchdIRcj+Q08nNyaQKKMbGMz4d3M4Jx9WdMj3J22Qtd1sJd1iKX1GVUsN1UyK7nrtmUgcuEVmmNeP0RtvDYCuJN/Ctf6uZyNj+EMhDzSWxlSmpPWDdx/0M5y6ksxQB1Q7WcEI40/lM7nQw//+ei8YUgnpv1g6yVLJE3lRbL6sTUoVAwNYoQtC5WLzjcO7vdfHKuw33w9ja6IPy8ci165ONXn4sZA5aiJmbuyVPP3k3y469hFybwD81EPGCTTNocE5tLMuLTSfrX1vKZVzM25Ho4fD3v3xlKllxdx/2eK3V/pHVaMCWa1cDRsm07iq39mog+SMd3aXnwznWeDiaHnZ7W7TId+D7DZG/dgS9TDnxd16rf/i5cq9Y4pn+qPqE1Q20sJhvhNiZbpdSeN6mu/ZY1JnEFNXhSz6Br67bBnh6p1L0JpHleAr+uyQN0Z+8FfZ4kGfgZuOQaaK8d+hy/78sWsRXG895NRmhUo+NkU7P9mBp/pSrcJjJI3RieiMfWpBgRE0/VE+O5w9z40Q5nmCNBJ+5zKQQuDxU9x54XOpv1QKkkHASom/CCEdtSUkCn4QnCFP57taszCAB3U9kv8p/kMje69CNK+tHiJSDZTLl01I3yqDS6U1fX+ubZemZdfeups90kuIQzt39QV8DXP+RK3R5rX/GcgUYNRDWH98Fa3rJPmzKfv1H/kKGcz39P0G6ussFWyqKejrECQ99HhaCiuSq9+NdkE2ktSPCxZMXBdYur+eiyR1Ir1tSY5Po6S2mnrmE7z2IQcanMsMehXY1V+wtiHmiJlXqXpZG7AUtmuR8ZQaJeRWXS+WQ4uBm4C8w7USdHED2SN1Is7ThZb7viEclIf8ee+obOPbn/LBqN2D5DPkfyXp3DwoUo8eysqD+hL0HcH98Xf0Ykb1VKkv2iXdkXsjNEecF+Rq7sWda7TEn6Zfbo6688Shta8J5Mk5nQDJxB9XjDasayUqXcB28m2d32pDdjosee2ZgSbiSeSsp35yedinnx9Pxfo3tP+tZqWh75Bf2LqETut/Wpd3csj3F9uHNEZ+KJAdgDMxHMqBOJ9tirN5Y6f9pVG7u6QRb0DEJ4YpOub6SwaMewziTIm6LnYyGmSmfr+kcYBGWZs1PJRJ6IY696GOKQpicLqn49CPws11P4o5hor3x20olanoWsZMHOcvnF9zJzw1RIkRLp9ZuJjH0U114BVEzAEwyA0Q6o1UBkjcxf3w+qHBXmPeAeDl8iSqu+weAzPAEi5IgEbVh53k9q7D37uEzfUFCSqu/9exLkeiBP57mzZX5NXfNeCa0EVGpgTSnrGTR38aJ9ZuZmgmL/bwWXiuFn0DP8V+yeDAgKGFXx98cDxa0EMmTpPT2C9CRhWVFzzZ0eKHVcfpKiQqZwy48kNFfT7G111tAN+kHHIMDUE7ubfIrHYZ+GTtHdalonVgLcUnlNbSUUYN2EquKXH0QVXCv63e9f60FnIFwl0XYRqhZIPhggB5/khR07l/C46+FpiaL1h5A4aL1Uzy2k5S88glIzWHmZ8T7WtK+fPYLKIvcCjL3w3hY4aQVtWiEP9sApR/U5i+tXF9Dxrl1d6LUF0fHxBUFjvXtAGuua6gTXKlFdMS+mPvrXtk/y8vcnZWfD+F8yx1lyebLnGvK7Dj0mkL53zYNmxe8FrICf2f80U+XUhzGBpcGxR2sJhQom/fe3ibKgyNMygi0kMmh1WQxdziz0rx2LDQ4sjeGdObCcA8Ep8GrFFALkQSh4kTQSAZMq02JKwKBIAQkPNm2JNRQE4wPxz6JcAtd/DsNxh64XX5c2zCxxgXTP78Bva0zA5hujzLG1jen+pb79n2wZHIdbZcXKdjQFTJFtq7BPI4m6VSu973AIY7hwTtVl5h1sXmRGa3ZDaCmLqts5VDTYF/4VJrJW3V9TwzOTlQaYp+LtlRSJOUiHcVvSZhWiYcQt3iRQ5IYp4SIVDPz+l9v+hsVOJkZtuv1G0+vFwl/u1TFgLuyJFQq2zLh8iCwTAvTkW2uE5fj7FOQW3NsR8U398huCWBKN/KglGB8cFTQsND3o5giJX6GevrHo9vR7EU8ubndTMzaBzJoqdWNEzI05iU56BSbCsBLf8V3vju/hEWKYqNhvdPf8yHjJ/Ha+X1EVwityDPkLfEtqd5Q4Rm2yz94JaMINzAIKHG7c/HX6oLegwdHdN1Gz0wUYsLKNxaxi1d7vZ1DnLty0FyyrHF1R5g/6ryivHJEZvN+Cu3tk8NaBAWbs47gYQ1TfJLH7A+f1gNzJ1OrTSTsiKihKFLUzq1wbpDVqInauvQLTzPejHMW8PEFPsma6cbgyOSb/sJGbQpyYu0bq3gWK71defbd+q9oUcqyfk14Bys7VOxP7MXkim8mh36UYUyqCwgNoCkq2PEOJILfIKPnWbjdDmS1XUGgB4UGJIDGBTTOez5f33xMYOJVny2SZ2QS7ZmeWya5JOAZB/718+Xmakfc9SDQ31RUQGkq6astURRmmkky4BTZIKKBVouYqMU52JsSjpCjDnIS4mjiS2mEyWa1EjMajom6UzsvFslVHvjtHUJLkchiIsatmTh5HzjNk2yfcqHMld37WvSZ7/ABQEGPjX7kr66/YUCHcxuxH5b9ohehn65TMhO0TuUUiFstW1j3m2Iftk6sbRqpASHS43U8J2KKpUe3cMSUQMEvq0UX5mVP1RBPRr8G9LtY8aN4J3ovqN+3R8ufeaFhj9V23X0Y/DrNS3NtGG9HHioXazLLKkRXlgWDgirLKUZkGrnXrt7fWHfg65cCXdb2WchWMKq9Np25UNswybklD5anrXq4qxuV5iNe0r6kYeovwXoaKURMWFUEtIgRH2/hqFPBaesNTf0A9RpteGQrOg6FiI9+2s9h6Vnf1aTpCgTfGvftCqOke+rRjSKPduGcTOkrqKOCgvPRFv1uVlR2qqgnV622srNzN8vRU6GgcigGNyUPr+PkapnqHCg+v5asvtrAEKjRJ0MfykICfJuqkVtaTnyEnX9yaOiH+HF0C/cP8xzIx30noC/IJwIORvr+1GePv8O7Ex7X99i9F4gN8glJ8MzRxygxjH1Hmf/triPGS4ZjlzX6S/pLL+OddfxnR2KfMWGJyvb5z6iFYtCKHL8EzhX/Gnu5xhZ14HIwoEJBcaUhWcStFvKTv/Wu4dzmcDxstEOK021keaMfi7UoPtPm/XrtXQuP42B2/+XZFvXZFS3Z4929ucPqHs523h0GpigkDgGPNBqF44IkTluCFrAU4VtWiEjhV2w9nLkhcTT1NFkabNRcyB3mgWyG3ylme3R5oImRCv8Ec9L2ArauU3DpbZWSOOWFnKKztGS4qHBjRkUV34bsiytuK+RQWuYa1SENLUBCdY68WS3SVbP7uMGY/LO9j0SY0UR1hXc9dTwF5G5glCgbiQT4PQrXF+YXtCx5WtnNuAj7uq/A8sx+S/8q5UPlDaH7/1eU6roCQYdq+e98G4Mak2t4oRbF6qX2i65UH9izxFAeGho4Ik4TH4AKMvfvjYlstwcL8yb0kpsWyHPkd/NUX1CtoIiIvMdWUnfW2gH2o1FWwVendycxPC5s2TIXFX9O7XqrbqTi0pFVud+FMplt7dPcvq7ebMgQE7m5Z5jCpXlm9T9F0whlbidVL7D3PQge2kwfmzXtSEFQJa84AM9Kh9OPg8bfVpVPXHsFBvWCaTuEL/gD+shyxWJhTzCF0d+XKSVU7DJs4/su+cVUbGT3teJLgOTitYO+t4FuqV8v4w5/Gqf2EaoQSRnFe997zHJND8hMd99MZoHrE++mM+O/wEXjfeDr9tPhfTxmXKxttLZ/P6B6WxqUzhzFlt07fQq54kk6P/6fETf4Tn0d/S3z+HWNr5SmHzJjO106112F1pdSGA/18EtU+2/scJzgApwAuQIFDu5vC+9a9zUEEbPXyKpYtNBkYTco0ZAL4nMmOpgxEVXW3msuJ34TlkTh/CcRddzR7BfALK8HEWZwXe4aYpgHZ6qPJsP5Slud5P/f9NPFYwCEK9867tuDxLZQtU9hUq/d/lPzD40BFcQml5DX0v9Ogm89/U7UFje0NPZbmWkBEltbIhBZOLmbEIe84mMbPHDW3YYWxrKBWVmQlUcl842glJdfCrxmQTd8SEnbXqTAB/DJZO6OSUIdrnAd9k9eBGY3Iy2T1DMqHbKt5ortKU0m1xvucMkW+LU1WSxeZRUz4gfGVsx3314HM7BqA+SLu0vMK0p7TzDWstfMN7O24vdbLTL09DE4zligk56Fu5n+5elZGg95Wa2aEPPDr/+E7XOKmnDShMAKOSpfDgUz7MbPERdzRE03GOH/9ZDrT1BS+2fNFD3UuhakGzcx/e7YH3x17fxbiWpj1xWiAD5VruedXSBX2SPoc5luyhPj6mYQmYSqMY9zXO+Q7HTz7GrwUtZ7WLFu4YYTj8thX/pSnvzwLH2jY5lqwW3JNOMjHiNgWpm9P0vXFWCO/cSLfysK/4RzWLMKyMPUXToQ4LWiuf5YPwFHtASgEHWBL6+SHZqes6s5xsLeGfilFYODlSKhvOJZ88Y980gAl0vTZVPRbdmrehn2fD1dXnVckRbLXyncZGmpPajNu6Rx3e0UTPFi9c/Rre11vXOSZO2kCy/+r8Y51kcndxlP6DVEf55O+zOFqOoeKxZo29pqpENDGlMorWVGHIVG7irsdBOD1JZsRvswP9r5LuNR6WYQsZnWKCalrhsA2k9b8QMS5/l/WxCxwDpi1XfAD5lKDm0/moJs3n6LE4p8o8xhfBKRHX9sF5kDLp+T/jP6st5Ip9msL6K6u8fdjt8xOKRyEBvMOr7YmXJP/yy/azyVb9TJ2TsM8RDfjXWWw36bP5kbx+zH5L05d373P7K+IZQneGu2zvGveQnmZpJlBFL1D2CRO7UmyKiYgUysP/f4xo/0OVC1UEYMKUJydYTd71Q6VlAwX8mr+rrxuYDR+l57PF8NLFUV/BTp0hdYuq8yXmQWtKNvz4GEh4ZffYx9iD5eXnNIO3sjBVV6KpayiIZYjCn0UVjs0YmaZsrNNq2vgWa/QRtNs0wXLLF5qUQUCF1Q6akTbZhT6/g9C4uKrKtgN8UJhUBjalo8YitpqKnz9+0PaOxn97upQR3GmlDnsdd7qpRbfev1uji4O2PZxT47aO8K97Wzwv8yojaDf4/oq3iDzae0zFbk5+YBY73WZUbF71o258V5575OoOXwjWHG4Qt5r9xdHalyo3Po+32EtMV8IcBhK7CRKAc//5q9cyuzdL85Ups7Qd/c/BvwKUHe0tWKeQJ8qda60fincI8xl1EuJBfaJE9sjA2qokU/KBYV6BhHDZrCruhfgsGCGdRx+J+QW9CmaZnciQ82P2hKCWfP5gPFw/WChM8kvmfJBlfbAJOYRlHAomqMZiVK34ikbdDp1MlBCuNhYPk9o3TLrRvX5tsJ5seJTBC1qpH76Vv/gga/qOkeubnnmFVq/flpXBLU1L9sSLK9w8Nv6OOlOO6523MJkELX2Ht+I/XyuwYc3SlduqBc8+kVVmGHS3qE+DBK5lM5xFdZz354v9t0LSIDLnzcFlNUg9oYik0Ukeu99PlvIh7IbtfXg+Y+LcF44nE0TP/dsYN1yBle6fuzw+vGjR8+siPNHnWNyt1DCidSCIIrvxTbp6g1aZgfqxTUZGr9rktBwfHsYfmPgMSgvk1epALaNOmyPNowDFN/bhk1dhLyUzE9uVK8i88VTUw+Ui6EvXV0Ea8ol733dwzWwlL7Dubabd/i8OvRg3cwl0/6xYwcZi0IpfAOXGX4CRIC2/VkfKp+zUSfQfQJR9oVYQ3kSscbeBx31F8sOr7tYBDq23P/sSJ1vy065J4KBxa1dqU6yeq3amxKRsneVrykJCV2LxSUHSnkk5qlwfmYOjJB4zHqZStTrzFO2de3piN3aHkgmi5VsAkWHImz/hiwHyrSXs2nrOH/wtYGwgRJZ2gDTOyw88UVYuc5RPvCs7JCOeGweX/wq4ihiThfFEQmcR11IwKH+xUjlPTT8LCU3npRwZQuqxhejIh294omgxCjJylaeAkqEkqFsU3KUIqpkd1JZJ2uT8MGA2046W6VE2a40KHZlBV8px/Ou249WduhXapRZyiqzNH/xiYQPv65ZPy8UfJCr0qlMKAuU5UquOdMYkZPNA9RbizOdWONbNtGnyBvE8V5DK/P5UlCaOpYZH1FH9ysPxFUHiTRsQ2JgVZO4zmM25b/iACgO4UxwEz56UBEqA4Mb81HPdCmitXX125mV1qj47jLRQ4qVD8qtLBGrsfygRCInYVcIorlKSbRLUQg3J57GN3pWSYlOKLG6e/E110ObM0k37RtuzmRcfViJiwkeyEPcBu7yRAfw7fix//j2TMz860RcP+H8rkYmbPaz38mOBnQbpAjBv+ZBvY+CgNyulLJCfFmOR7HS+jmZfydi6g/aRwxP43/ZHf3D7q68UhXXvRupK9M7Livqsc+SLARNJ6Hc0sHbOcaDiSCsK8dYIRcoJ6NaK5cTFBCvlwoZ43nmomjb+KzjS42WV0AiyeYDKrvGK+ElyrI4HCR0KiH+BX84ztVA/ApUlZXxQ3RVFohvciC5tqYqIA9eBnHfK/G+6prXKYW4fjxTURadt+TfguHaRWLBDSbsr7WakqQ02afzT57iD5NONSC+pigx3YyehgDy5xyjafxbfk4L5aBSQQ/5Dq3etaKCdyLZ25UD1YNUPRnAWtvj+66qomVhwOoAgsifcdbRUqebAMc+TO6mrL/x2S5fmysXtcxiHYqWHnK3K40LEMCDWKmAS+96oVZdrEPRUpr35BzS9wMkpMOFQnbfBgMg7pLF/Iv3otz4bfgwhyGgVlh6JkkVcb+bSHZsDUg/BwDcQl7ytaWh9DqQR0Bisy4A3zSld/7kkWUPHJ5qUUmTPOswiUEAPy8d4CsgsRbf+JA1Kfi6CXsHos0nVsK5+0k9Lg/4znxeAbE/lZXzTtWyxuthdwSHy85NXlektcv02mo0Z2KaQanOlox3RROky/JGGjqVagfa/qpcR5msodjkWa97JfNtAjzd+8SuDVbuUmol/yz1EghnidHPaPg9A19g49eutZKXiKol//JV4h53/ULEdmqEkpoowhkTwM8B9mUolr1aXASHDzTBEbmhGVuSoe8HHHWl4sDu6txIrY4h+iwr9MvKM5bWSdINcMH1BxmVE4m2Rf3DeKFY21ps6KxodS1L2mELeKmnRvp+dWaQVwW4B/FmVABvsT+qgLwEJLRFeiXd0pv7Cq60jPtgKKgdgUJ3dPXp1716NCPcqXq7yqQJV4JFurAwWCwTK38cgOH7oRuV7wQCqZdcEqR8OeAV5UDdFQ6QV3z1kx3CekL7WsRi4Cnkq7EDQRsQKg4PhG4nlq+TxM3MV0byY7XyoyhxRl3vwI61tHZxmMLPhUEkMSLlQJWvryFtz6t4Msfix7VX9cFDzgeefOpVgoleBwYL+3rEHRgVHMUqITUt7fvWJQGX0l/CHuDvWtUpFwm0FalBaYcZr2zYLKmW3GWhca19sx/UwSX4g+UWqaptpYhF+sk1YGjPTmXKCZLbiCMbQyFmzy8GGG/5TUVpACtaXRcYmTZJerYNPWadqL7itLxaalGayC3N1l6BrYOk2rwRBIg7Eusqqnp4tLmAHN0gtIMNWnsE9vNaooKkAx7Ve1LiMuoY9hrHQcC+JRLnGF6lo2aoMxzdYuKEAoWF01FubtA7kFGauK4AkGjFK+9vN90KEMGJtJpgmswEhzxuJDJdAvOXIsGmrTpB0RQqZIXiKa01roYz7Ukq1NDGNfQaTL99Y+4rd4UCCi2AOVFV562MT7eC7+JuiKpxD7bw1jmFo8HzoCFZsPBzBBQPQOoR0zUoQXrdJQkgkffl6FQvaLuQ6OpGjLBh06IjXSZzbEZz6CrmPVE+3Qx9M7bjwrk5D/StZI3yMe2sucZGCuOKUQsrywP38jUVNBoVphSHNIUET0BMpwamGFm/z6+77ZGPevLe+rh6Zv0EPKnxqy5D2A6gwCmdgILpt7XBuzLa15/wSMhvGU3+VbKGMbFODHD7i7CvwW1j75dHtTwQxk5olH9Uc+ihDAfbNO9IwBv319nyxouPnxTOzPRtbn7KgWc8Mn65JTSbGz3EP5FXK+6OhDT+RFFZd0I0+VF1wUPf7CE36zRG+gNexe/Hvuc5vOFf9XOeY4KOuuffImbmbLpale295UucUbPdTVo05D7vldrSfvb/5fO7N8vUd3UpeH7MZy3xHf5X9WgqmgUvOeEd9s8RY83HdBzeC3H7EYaMNQnewuAn7csjALTP6o31eKYX5ycpPE6Z03uexCF0emYD/GAgR7oCIocUknzDxNdN1V1mC3iyk22psrN5Sd5OcPwyr8fmbVG2iisIUuMiWxNY0UklA8ZdmnsVTGZt0Qag16XVIIxYBffbOVpIWvBUMmuDQbQEtztw/Kgy5CIcYf4ykax2x5453NkNkMghZF6O35FlGjGibDJbFQmcyKqPygI4wtH90D4zzCpltilCNKljfIkchyl6fNM1gBlm8klfCudHwP0dVG8wJhX76KEJZHORLnVBwOAdTe4qvMra/szNl9FatJtEhBmjEDNPs+I5M4cKiP0FwuXfehFcQ8ZAGA+u66uBwIjhmebARTp7kUH25aO+YvAuvdcFtoxKzH4mqLWmhzL9EjaJR0NvetucOcxGniRKs8oLfPcytZtxSCVdFh7SCIG/GH9XZQjvCzxQMLQsEHso4ug15whA7KHUFnixMoXf9bzq7Jwb836SseNGQ38j/tu4BnCM4weCvX4ZcqvaYDM+VDrwuMn6AqfaO68YlDmGiPHL8lWn2KEQyfhwjBgx6TU2B2j6HwFfN2B+v7jXEzPMPns8z6I1+45u7BzyXD1MLzDcEqwAOb4wlGeVBGoEYxpAYa/PSyUHN06xsli9FcTQmPs8TTXotPkFAYvVZoYnzeMRDSi67f6Lww04e9KeyoJTCy+H4TJ+rrfYRxnwWBHdgmKG4/CkkiHrLg3b8xftn3bchN3FZ1g7Jit7xbgAAhLQ3sw2NL7NkQHT8wJA9qQRzvOgzc3FLP1GH0jABbaEY6gxNeHQKDVWvduiMGQ2e91Cf+jNUmmdOog1fUECgJ6/ty+GisbuLQu9KBt6066o6+eIrjlGpRS0H/sH7yUIdsGd2hy000fDLrNkvVRK1lhCn3gEvVp2kTBAaqjVr7GBoAmPc9RgL5knRapLgpEnlKtDxN54MgUJC6pctpElUFgM3SDQb6HHGPyW3dM/fZiTffcUH1LM2GUqsokwB3mPN+R1BU1sAW5qOwhIjACuxC0GMpBTM/gJOjLj3n7k2EDI1PjhhXWS57adAbyInaD4LnEPyQn8KAAkOXshQzkdktlxixEOeHd2A2FkpSAfjjSAfh+qCSFaYMsbDp/pA5VNyQQpF/oBby67BnrKdrFG3tw66loUYvo0bVN5ZOy4jMJQadf2odo8xUreN2AsbmiEx3ZXEK1CpGlFTiniN8qSJtVV3g0xeNJzDO7TfTe+x0ovTM98bwWwMBmJgxuIPpPF0tiM4wYHFMX90plZPvRIXD/1UYOJzOGV4rWE75D351rZXsaWVXPDDfpHTFEnXVe8KqM7/b6UIDPi+rcCawdQiZoIN8hGwyyFwgkEIq7XO1g0kNsMzVjYLpAc3tsG7BsIzuE5YpgmGzJKbBJbovdRvwrnx/z//9UKgw+LXHrguo5aWsfsBQPRd7m1zyM8rE2jP1rroyPrPsDGbK6uBZ7/g+xsID1q+n0rQ0InLMWBoosoWruzgCEot7lBY+TwzGK7WshSI9cwh0lOfvGRGgjIlDACeAwB5Mj1BLEXokX5f5nr7TiSXSbP2SUEMr1oKfO6Dr8u1jZV3dQxUZerCjPDJIo214Eh7S6ll0SuYzchpJtsWp6s4ctfsLLm/ln6ugT3E/UEYHS2DRNep2jm4xtiZQgOW94Itg7Fgs2TMWIXPBsB3oVhn5PLDCq3OOKscUEFwPugeL85xRQHMpoNMqbPgRGeDhJ5UYzwFDL2sY947yaYK0xaRgMCSNM7YQFnGiIX/7WSLBE6JSG5ZV+39Ho35Vx6EQM0VkkGE8BFUevLGfE1kNZEDbmH5MU+Bb/AySkg2dwtvwGpPBKmrZLsm8yetAO8Y8GxFD0+ns/29dGNbaOORwcdHaDmYH+l2ffKCrKZdVbB3IV0iOA6dhl9Qa4BrjKskSkL6rYv50T5q/wuGh4wx6RBBzcxz43s1jLYrqIiA5eHXnFzj2bOjDWesCrqu/b3QTw/gEI90P1ilTY+p+cJBVz7ZWLVmPREY78m5jdgyHRCmGMD4EexVYxCW9UsdAvrJBeyHK5+D26EzAw/EteJ95s0OSdBg8z0Cd2RP3Mrx2PLa0UcKTC8BMq5NO58bNNPNiOOV4vvNAUV6l3ejsDCxkVfBnoKgLZG0JsRD7rsOJp1FcZDfqb1qISHD2/qqSrY4vA4iVtF8I3jFgl+DZB8+nXfyrZZtmV9AjMjOsfIzdiya+Oc1X/OZtJDMGT7BrPl1BMFck0Jk8ERhPBAgntqEr7dAeJaGYm2Rikk4+r37FiV/htCpWrSSQeb8UchTUHRs62SwxOGpGlxBfOil+wKF9aO2XvQKrx1pP/S/v8XSJYQTqja538c9b1ViqPLXwmTlFY6o0m/UDtTc8qlaWkN2wG4qYQdWzfhwe3u4UVX6tbQgiZ6pgLyr6xDm26SUJ5xHkSDEd58ah5D3uVK+P/19fO7t9w6MxlcWvoL61squj6uPmvt5qBRQtiRDSkAj9HKe+yx0jo2z7VYcFVIUY/osipFQcu/knj8MSG/pdeWQLstfrJN/rM0V07koTGrtC+D9pXhlMmCKw2bGwBfp1/b3qxcbE0h31XPl3FIH7WvBMfmABEaf7W+7sdEh2vm/SnhN8BMRmBJGp0fVSjYUgi4TjxVEqZQpDaemLqkr5Fy+6Um/ADEMQvJr8DGb/VZPxdza3AjTCP4HVgBh+9m3qlkL5Ss2MXA1DLJGY2/hgogp0S75qYysmIHspjlm91Q0cbqEAP03p46KAxAJD7w6yFVmslacMQi8ESkYzTb7eeKmPYCRWftnNJkCwRlQL6bgMxK8NcBF7zTOWMBtvHbkxrdvGab774ARWJrgGVw8kZIK0eqxYEAN+8aKz+crI9Q8/hgLnqa7XvpGpx3ysYcRTvtti2GlVPEMtpS2SiSvBIb0dZa+5L83akzBngwoxY8uE/3ObRD1KQRg1tKANRc23E7dXjhSz7lAiwncjk359YSYGrijFBJdzP7vxngAQeVVhMuXSkP4CE97C4HsJn6+Vn/GV6P9ul39v9/ru/MBIm/GlNuDzaHyFbijdRAHHD4EFlrfxQdwwAQyBS8DvWduFiNGcpFk7e7ACQ8BHu5fod/cKpsbCcuUrhhHz0+j39YPSYELlq8YUcP/JZto2R6KjKHiayl336kUW1MJQ9ZMP+bJYbruHB+EZa3U5xo3O7be44x98dkhyp1FLP9bnKWbGyFmpGm2RGjDS8YnKBpqW9SXW9Jc/CbadX+XQ8PUvHWOLpmpCdrYEXTczafFKuGGGCBJTZ4zh3bDlzbOTinnUmOW2XxipbPFGRH7YvEaIJD9zVrOEnymguYS3vMaF765AMEVTZxTw2Fts6KVo1UWamlP0p3yi/T4mGWaBluuiEEFWM90ipmvhtigzkN7bKJp/XYXZkI9kaVcirUvjXiLoPnPBQ8qVSD8VtDVOfJcmCUd/SIsUBfjDrRpQDj9dfuG2GgUqJYrlg2KVeJZ1fRNRDY462QkVgukYqtN79bQeu1qdN02UQxhk0ucFilQR+Nt0kxcb8O0BpzqCpR7xoyz/htZBrqbDyfrqMx4TSfIv2op/cegSXPNO//Ge01MZ+7Z5FIxhcENQgBNCRpGfwpF3Duqqiqwkqi6colgbfu93J8NO8e5k9qqJeZQhlrjdoJ52jzce95tAOPjEgU+CzWHgo8awXvCFfF9hgEINwykudIeFqTkN84LDCjP/nI2ZpYn/G2zv4ub0BLn2xlU6r0rH4i3rFOGrx5dhyLYcbI6CZsDd4o5uTY4liyQyaK6etbS2zP7l7KWfNV/VQybVeUSyQFgOHZOrH9XLh4L+KdYsFgNNJQpQJF67NDI6Xzci9aEFH7Y7dpi/QcXHQXwJS32C+G/tIPqAlthy+UK13+k41q0+0kJVWbK7S6/e2AcD6LIrhPE75pGOzJcs7OB2yOUiUjbxggB6CTAJtOH6eleZCVoyO0DUzuHRumeHcpJvtkfzcp7bIxLBwnwrF30CA4WsQt5IViZb/QbU1LuDVRyZquEE+pnCi4BYdTZiuJZqByU3AkwLNNqYPHZq7WBJHlqg1qx6L9JCxyRvqQDWGEW+0ypzXR+gk2yoqThnW8h5XkTQR4vBG1lsW99ILHOJpyFojofI+kxWnOVh7xpCtLaHg5dQ4+hd0SfJYJ6FZ7wd+BUppSlliIY6w+XK4JztAHyz7m6utW5S9wL/lgbq8crtitgjx/Qg9GUdmNolDwJn5kDOms2H4hRM0nHQ6wOLT/yC9iAC25UjzWU6O0m4kRuNiHHmU6eSBghHdLPfaFq6/pRaSh2I5AENNhoyxpcuff0DWAL9h7W567u7SwNmE/NvbCEMALzFUPsDbOCgVBRdh6dOk7mf+/m5YLfacHD+UwoxayJOQAw+hF8aplOB6U9N6ANstHekhnTMsO+KPZlIZBaftzyazLVFEZqiKt9FyGK4CkFGqKGKOLUFjo+/Xk2ZDdI6bsadIjMTgJ6PoGvD7rHtA+ayEqUxVxhY+8yfwYX2Pdhb4CGutP4SSBEWVocDf2AkeS6N2AQxgmW00aZUgwI5jAJ0V2PwV/4fqsBbGawk6fSPB3vF8Ab5N9AY6MbYh4AWiuYkTIMsmbq6IxnTbIhCcPfcmYYmi0c3//ikfHv+ZjPYuO0WD8zvCr7bKyeUvdLW0SEQoJTg4iG9+1QWCjTzqOGUVYtUH7JjFdqAf0q/9yGwxR64vQqwoGT8wirnQmUzAb+7W3jHwRZgqXQyifJKiuB+FeZmwUNyPTMfgpOZqVCopHGTYIoO57p7Qg+IJTlSLFwx4jAWZQp3vACZ+06TUUSKEU8RtlSfMyxzMQpJDiJvNIszmsN+sOTemJLc9Y6ZqfdwRN3s5Mc+3LR4IUB5yUEF0SgybWnwVKWpkZiZs0xSfQHG4RwNmifSs7rjiZbRR6RCG/etrQr711UV+xAqkiNqQCC75rSTCFbyZwtIhJBjDHDMK+bqM9ILa8EILAZGps6ZRcWMYvjbYBe42CBhn3ZznfFNfaMv/4dH06ON2yQRso18+VyEWTRNX+iqk2lukQm9N+rqaCuRzddvWWL4ul6nHBA29YNKTMHgjTKqllCo0UOp6azKIo+44QkKdOevARCi6ZE+geZ68PMsR5FQNsYuvZZqUYW1SWUT0Hb6eIkvxGLADSbMubXTAnY6KdeJBnT4FIbqGUySDRdIsyd/jtO8YsY7xODLmCMaZzvoWHLBcDix69B5+qc/LBlaN95wfElhfi5jKJjbJ0Fkwak99sJAysWL+2o+2ytV5Yrczcl4xWQrFhjqlyB+fhldgjMzrVGnBfcwr871Udz9mluw7C2dnQN93SklR/SUej9WJJfudzq8CB9ZvgJm28hZHg/tWFB3i48koWwQOJiNxS+gzLrb0fKxz7IHlw9lIMpm/jh4qCPpDdAQuwYSJXTtBfST4kp4EH5+DjadbIAm3DNmxBg2k2hp7605hCWA47Y1hPKWjlx1EC/KsQP6UHJHAr3aljBJxC4JR11NnwnsQfofNQTPYA9yemajHJBYjXBXulYZbb6UlTg5/XnhezA5oTJUypagG4LgbXb8aLiKSfBTpUt6N+BS6iW2vd19wjdWnPNn9+E/e/P5bOWYVxxtOj9sh2bTB4s1Xl7h1VrJffjtob0Zi9iLjdaVYrekOajIFKdoOTZ/ZFdG1/XDJAgTUBGrqUWNewe8/VYQHnsyoQsl/7pZOPhIOAkFprdnATOe8UynVOM8oPbDKfYqVf2VQw3RawsQZoedQw1FSfPfFKPooms8lW7VL+Mv7IMwCGVvB3FR7Lb7npSl3BAl3xJSS+BysJWEEy9SjHaB792ZKdRkaAT1zoeOzDbv9ya2osjHHFH/PNsN5Rp/hN5DigbBlqyXfOqw5hn1rK65Pzb55lq2zgszUMPGVLO0dwLikiWhG31wdIq5U+WzkY5m6DnoyGoKB0Q6s8jVWkHhamZuXQ409UROovxnaKg0KYzm+EJGqP8dIlXg8YBydV5tYsK3+iB/F8rk+Af9G0LCOA63sbco/hOgGBhYAMvTugcNMo22rZGEvcIkeRVoFBMlMPchLLKQKDgtfIMupsIGdTIkZaATbvnJEHCIEadW3EFl83hgLUIhLP6WwkG/siPAPvKss5WiKFbPnyfWcks0wteKQ2U0m8qzaHFBOr15jvTgM7LCy3pOUJwO/1DZVTU0+/qnS5IG3Jy0PjZy5ocd6KzPvtxTwueMXrn9KvtQQSNcy89hIj/E3Wy8oDIUimb+mAB5JjAp5IlZijKBVlTh3CD4V/kRe9ZY9K9Kw3+3/Mn+E9qvOXU51Klll0EOt+yL6EmVVaJSxDWqxEuCsiCZD17XqFQK93lfZRnmnuREr99q+RlQr4P4jM/PsIGkB8IqilCr4jfX6F6pZjGPXc8Ef/CcLC37DCf2FR2WriOuBtPw+fRhY3k3+EXDHEjf15VX4prwS1y7+gN4j+E6+b71WLH7o266bz1kUgY7rCaPcL/OJSg9/TAsgj6xx90Q7feA/Vdd6K/UlxTal08kKHhq7tQm9gFf2Lu5QtXdjLdTXpVdQg5V+uvFbk2sXgPCv4is5j/ieu/Km0D70pCHTEhM5jfrdsCblpOqgdTiEAfE/1btAC6OfO7twtZhsfr1lze46OATuHzGnBx1fpN0ErMg5UTA8neclB/IxOONMqQPFpJ89tfyHOaYwW+VEPXqXYflSyyh6M168z86UpR0J/qfzUCmcqtzusYEP5TvAxNwSF8hhAh4hantpf2j7wWMnVr4H0+thUioVaEJ5fAcIwQWMxwAWIaFaneCx8CKLKm9hrLHQOwxQ3faEpl52rvh21PTclC4fQmG2kQsnqhQLieeEeFBzYlmpCSW1owRdXY1g7RTbxj9YnajcYSZqCUij9MpgWLnYq6uUad7UVT8jskSa3dlZEVHzrcR0MbphgTj/rAIXwOASAzwp1wBQNdrvQL1PkLevuPafwnLxZ2WonZIo1cqUL9+DCc2Uz8cIgW+R0WJsnFaSV/y/yMiVpLB/TSAO9KbosM5AQJdb1xXBk4WqKZ7QyxWmkqGpGC9OSAygtH8MqvKjZ2trdkCE2IPpRmsaOqUiYDOVkFEQ6wkGh1ssmnCKdJRWutP9tgchfDbBKR6TLI2IgYT6izAqq4tOVrRHwMRFGsx1GON6SApp5qYDYX2zhcMaO1suYglDZ1XC87jUK8mocRH8wuF4PvhFI4OMYFbbSdQrg2ZZupZohwymc2oMXJKXB90zpRnNKm1/mZxwEEFr90MxYXs0yXyvR8ns26ykym60ljMgWFZkWGx1zlGLDKNGpLfFiUDsNgXjyrbSpKQAttJx2e/k9hCO9AyiixhtkPktsvvZzPeEgGpBS1MGivDur3PJB4mUoU2C8MxV70i/HnFB6lrTnF1EyvU36ue8F5ye6Go/vGCnntLxib9JcYeC/xO46vjT2/VCxJf3Zvbh2Zdy3BbZ2oTyTrWRemlx5nBjozLpCM4aC+dJL+FhWrULz7CwFy2/JqMeccx8NWVRHqRAvTQj0KAHfdN1cDsM9ANheMZEDwL9TWiAj31L5NPb5JkMcPzi6MwtEBnKXaq6zN0Lmu1EzRBYsbHXej+keENjWSF89Z0GClBZbqvczqvTXNcJ8NqefkrrqRh5OuMeFL/hTH8ycfAQovavdL4UaFZJozgRL79Z+KlrIMHqblJa7VED85eGHmsD8UQwklADEGMYgW2nYlM8M7En8/S8lIvJ67BRkaVaequlOzpyFHmxiLx08bBn6gtYhLRLmyy/STZIA6dQJSXuNAl5Gj+iWqy+FY9jdvE4qf7uK2lSZPCDVEErdPTUi1ba9lapn/kqyENydLkUmkV5kqmYxXiRbCO1uRkJ8gVaCX5U5DbC9IPKXocSDbVNKcp/YBAuqdaxbiGDF5Mq7vXy6p2ll1RRbQYh6Swj6XHwaQGG/HVShq+gnfvR4ZWNbtLMIZrEaiyIqLPnSdgi5vK9uOZXBITDd571VMEwmV8NBi+XzOH87juSg3efKTV7G8TkonJBsMxRCqrLlLgNrwSjo5Vy6Pm3B7eT2zzmr9x7EuPfnVREzC33C7kKUaC9SXGOw/YViNm+EeN4Zy8pe+rTRBVa/xKBPFAoqdCiOcWLggCK02QKsa9OdEsSa2sZupmD7E1LnTt4lJ1nmxHUrFtkmcBRA1o3qdgk6RTdRZwdYSwiUTgGG0pW6onuwGKI59uptCvQrOIpAD1leLS9oxXRDB7W1ZuEE4ochkFWILKcsnUVj3pqBd056cw6lL6TWNbXFuzRBY2dQVINGmlzrffy2buC6VbZ1i1LdLgWdnKiFE+Gnd1shpwxDD16fHv75hLbGVTi9/2rlQl9J4PFgofdq500DEl+BKNi9Q6BVeryUthWJSVMtXiWnNruktiIjD6RPPRWE1Z/DgIEgdkoIKiYcVRLaX0reI+o6WuhXl7rqY7alcskwok+D2T3bwy5OrwhFHFmvojZLugDkR+tnJdkSZng8IO9zRpCmA89K/h1NAnFgKhA+4eCx/1LPLxK9d6GoGqHBDQZ0H/xQ7cE7MAw6s89SRnL3g+t5XSV5LF9FpDGTp3Mgp8YV2QGtqC6pHRkBAJzU14gsS/5REVG4jvRTBHZhtE8N7jyotQwRtXBJtFyZ+8jcIZ+PKMh6FE5NCMi+oa90q79UnmkEG5mfFNyBmo5XwcS6PI23JYEOzYyzlL1gQxYl/ExD5ovyDJEHso/s6CwGwuvsi4IOzRL7dMMmSmSsTemDi4Hpgsc3smBijqy3mtN8qiR0uJDPjl8P1ldyuHEQFiyIIXNpo5q9pAlyhWVriqIC9rqOPoCFXqacfputFepgQPLGoInb9aX2DcfXmMpIsCcRuynh9aZlRFSR1OORvwrZW2nZvPDsMPtl0+bYXIQnESIV44t9cDkhxiz5Au4yQGNPNOMlc4P3klsID6lTM7BpZyUY1dWNrNkRnPLytf631yBgYqIU8dj/0jT5+n7Zj+zgeucQT04PkelFnk1xcqwND++g41BYO/9hNnvxk2nYAtaS6oA1dfDyn0V0tizYM1cvtaCFd9MkFfejFdGvgs/1B+TU1CdWB+qVNGH3UDtP3INPP7u2+rfPitdEH8M73FUcV1nJ79fygn5VqTMtXZ4sXlPgFlXhX2Frbv6h8mwIuHVFq6VyJmdlzlFT6TISIoMqW3AY7lDl5QMSpHvHRORkLRE8yRsQbhoaUSSjikSR+NpMQsMx+JQBd+KsBAfJ6y9xvNCWmLFbDdX11fgceVXTdWQx4AAVTwxAW1hbplZJle+h5xqq1d11diYv9Wa/p+4O6W0+0tW5Bw8o52lF17Ir5VUFkIEoTiugjv9Z53Su1p4RSWpX9uIuvpCGcHULW9HAU9WxvOyamqoXcwmdEHrkwgHVz2jQOCQwWIa8KT0jugrbOMtCVt6RGWRdoXrWdBIVGH09jSso71bCeLw+I4ojMpLGksXC2akii1cWPvrzNngM0R0qjHWzXDMhJRNtw0IqfX1shSXJTpkLUGKNLq8ilO9CK4igbkvXzK5w/SzB0+fnDW1LGotEvBOpwp3pER4llj94m0bA+OQjd5/uqwaIJHc/EK7To462tgJyilIVHhzzEMSsANlk+kBsDYQ3Eg/1dwtuXmERfGI9skgDCJwNnl/uf/Xdqdz/ENwgnPmNM5prAD7Ya2L/9/J/QapDNgHmTfUImN7UaWgkCeIcEmZNLYldEljZva12BT+Bf1jCKjejRMWnjBksKo2C3ZTrB8SaVqKjSULcEellSVEly0vW3cuQ+XlOvgsAE6RBhkiIiUI4UT7M14wvvuEfRxWqVtPiDUGFYEqWIjmLNWeIy9WHJI0VX4GtCMlKEoXp8StRhvrkTQpKLGs2m8E+MZltwfa2SBOSFJTZambOqP8XSxt/08QnkAWRwUdxuywMwar4Unz4IK6QC+xBWuILtYMh9fnQC/RBBhZ3xbpbvXVVil9SUlQssWUZUoI5i+JGPt4WjGYGOeFF8gOy6CD1gdEnwr8I4FBkRxuTRVrcltP3qKKp3+Qs8T1TSPr/X/vRKAvKJgHxVa6pb0lrwbhXE+k0PWCJp+WaJ8EMOSRCxMA08i4rb7l8in/eEjFtPn2UceRZpgnhVauF3BaUx6Fcq5xXKOOU353EfYrch/JAsZzFWpp5Eo+qomynTTEEUqDBEvk0yBNdiVZk15MUlHTYkiaLlcPoWSu0PMZaOob24ZfQXCegPGulib8Md6WWFu+xxEaWLMDwMdXn9OGgzCAWY8XrulQCNteJ36M8qOLSIg+acUgp9JosDTKNJT4VkC6WfFP11OLnPpZ4yf2EMj9SKksiue9PA3ltLW4YpI6PBbtnSr1Fiy2R4PIWsBXpRdDZy5p1lQvp4nsBOaMnzxLvsFLhmGR2E3KHdVso7bRFTZ8ywrhKmbMhGVhSSOvPJIvX67/qjLsKbO5QJH1RabDyBUv6FhdDsU587mEcLTpCYQyUMY6KT2AkUcvPMK8iGhdNi4Uy+1HZJDT+FCAL5YbNBTOg+FO6PEXCeVmeIfWd/BgmMzCCP78LL0uQXAHsG46DPU6zuNSVDoj3PMtIoaxxi68GOO4UiJHNwtJfkO2to40bldwNFhhHORDNOmFLHWIymWH0JoYgM0OApDh+tPfxdKK9RfFePjaxjKHYJw3sLEyiib9ITWuq6KXIZlcQiF1UYy061KcYpdoEzh59NEv26pm89ybY2PdUv7GIA33pShyruopoG7oaIme6WpG6J3axidMolOn1aKThA17iVV2EPg53UUTR30WriutdDL+UdbHKMmoiR02UqYh8Lk0CP91zYOsSONOkEIpgm6XK+Aw9ClMDK3USVebkdM1EGMnASwwFeDpq9XhthEup3n7no1PYdyQwU0mw4YIk0lzPBosEc02OizMynNuUOr/GYAkYQWq50cJdyVAL74ke1U9K7ylEVrlvjVEyk0aeqcSc1LG0/p59L0ZppK7Rafcc2LoEzjQphCLwTB0bM1uHHoWpgZU6idaRuSt+ijqEe4fMwl6KGRQGeLortBjedBvhUkbd89EpYvuOCfiMFltzNnzECGp3rudFYpGQcyXAND+rC5xqS9HKYCt0MgKvu9lfBHqKcZWhbglWxuSPWfh9TzJyvSrmHJRgmeZNn4WpxHyJ3Anuze+8F6PUZNX9QOdapXnp9jTu9WYhH/MMy1RNQc6tmc71yccTM48Le9rxqiXrB7OYc/QskonFD62YU/yQtmYTrzw6Pjk9e85mnMsrjLNUPXszOIv42xHf+x/m5/vfNp/q4+Pb15Fn3pLK+DMORXkFRfML8cpzKcPqx70DiDB5XmX+lyWk0oZp2Y7r+UEYxUma5UVZ1U3b9cM4zcu67cd53QRJ0QzL8YIoyYqq6YZp2Y7r+UEYxUma5UVZ1U3b9cM4zcu67Yfj6Xy53u6P5+v9+f7+CIrhBEm93p/vj2ZYjhdESVZUTTdMy3Zczw/CKE7SLC/Kqm5a0PXDOM3Luu3Hed3/x559Bw4dSUnLyMrJKygqKauoqqlraGpp6zjW1SORKVR9Gj0ffxZeYLdlw7YnbMAHKrTt77IJUkTL+9GOHGDb4uAlD106HkqY79x0CphYMn9VBom67R+fTT4J5nEhV9UJh2uvub1O2SjLoWWISIVBWK4qDiFDSimtKpjHhQw9Y4wxxhhj9QcuZLIbBEKZx4UMqWwyCGUeFzL0SimllHoqxnIe/YJo1xmma43bapiGaZiG6WUKyFO171H4KY1XpfktaGPfvQL+eNmpW6Ip87hYJcoHbey8fgImlHlcSOWDNja1AQAAAAAAAAC01lprrbXWWmutjTHGGGPuDOeXFvUPtDY21bsEHFhrre0mVC6ttdb2CDhwzjnnnHPOuXELuUsgwzDtfI17O9U5CHl6z37yf1FPcrQD3I0ebpiWGjKMaF93A0F5P6cf2Vf3GN4LL1HfFXdJXVCbE270tOrDUJ8AezYG/4JI4w9uwTTDR6PofiN5bMf/9Dn9WF0QiXDGeLs/AsuZL55fdUe6aZNfYskJrP28/0R3rtoeI4p+jPx/wX3MU/dTKHqQbepQtAkAAA==) format("woff");
                font-weight: normal;
                font-style: normal;
            }

            body[data-v-dd2c3b0c] {
                margin: 0;
                font-size: 100%;
                color: #3c4858;
            }

            a[data-v-dd2c3b0c] {
                text-decoration: none;
                color: #45c8f1;
            }

            h1[data-v-dd2c3b0c],
            h2[data-v-dd2c3b0c],
            h3[data-v-dd2c3b0c],
            h4[data-v-dd2c3b0c] {
                margin-top: 0;
            }

            svg[data-v-dd2c3b0c] {
                outline: none;
            }

            .app-main[data-v-dd2c3b0c] {
                position: fixed;
                z-index: 2147483647;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                pointer-events: none;
            }

            .app-main .container[data-v-dd2c3b0c] {
                width: 100%;
                height: 100%;
                overflow: hidden;
                position: relative;
                pointer-events: none;
            }

            .app-main .container canvas[data-v-dd2c3b0c] {
                width: 100%;
                height: 100%;
            }

            .app-main .container .controls[data-v-dd2c3b0c] {
                position: fixed;
                bottom: 0;
                left: 0;
                z-index: 2147483647;
                padding: 30px 30px;
                box-sizing: border-box;
                display: flex;
                pointer-events: none;
            }

            .app-main .container .controls .btn[data-v-dd2c3b0c] {
                background: #f8fcff;
                border: 1px solid #cde5f6;
                pointer-events: all;
                width: 40px;
                height: 40px;
                border-radius: 6px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: 0.2s ease;
            }

            .app-main .container .controls .play-btn[data-v-dd2c3b0c] {
                background: #3c84f7;
                margin-right: 20px;
                border: none;
            }

            .app-main .container .controls .play-btn[data-v-dd2c3b0c]:hover {
                background: #5997f8;
            }

            .app-main .container .controls .play-btn svg[data-v-dd2c3b0c] {
                width: 14px;
                height: auto;
            }

            .app-main .container .controls .play-btn svg path[data-v-dd2c3b0c] {
                fill: white;
            }

            .app-main .container .controls .items[data-v-dd2c3b0c] {
                display: flex;
            }

            .app-main .container .controls .control-item[data-v-dd2c3b0c] {
                box-sizing: border-box;
                margin-right: 10px;
                transition: 0.2s ease;
                position: relative;
                border-radius: 6px;
            }

            .app-main .container .controls .control-item .btn svg[data-v-dd2c3b0c] {
                width: 16px;
                height: auto;
            }

            .app-main .container .controls .control-item .btn svg path[data-v-dd2c3b0c] {
                fill: #1aa1fa;
                transition: 0.2s ease;
            }

            .app-main .container .controls .control-item.close-record .btn svg path[data-v-dd2c3b0c] {
                fill: #fd2d5e;
            }

            .app-main .container .controls .control-item .input-wrap[data-v-dd2c3b0c] {
                position: absolute;
                top: -135px;
                left: 0;
                width: 100%;
                height: 135px;
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .app-main .container .controls .control-item .app-vertical-range-slider[data-v-dd2c3b0c] {
                pointer-events: none;
                opacity: 0;
                transition: 0.2s ease;
            }

            .app-main .container .controls .control-item:hover .btn[data-v-dd2c3b0c] {
                background: #d9efff;
            }

            .app-main .container .controls .control-item.active .btn[data-v-dd2c3b0c] {
                background: #3c84f7;
                border-color: #3c84f7;
            }

            .app-main .container .controls .control-item.active .btn svg path[data-v-dd2c3b0c] {
                fill: white;
            }

            .app-main .container .controls .control-item.active:hover .input-wrap[data-v-dd2c3b0c] {
                pointer-events: all;
            }

            .app-main .container .controls .control-item.active:hover .app-vertical-range-slider[data-v-dd2c3b0c] {
                pointer-events: all;
                opacity: 1;
            }

            button.btn[data-v-acf651b8] {
                display: inline-block;
                font-weight: 300;
                line-height: 1.25;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                user-select: none;
                border: 1px solid transparent;
                cursor: pointer;
                letter-spacing: 1px;
                transition: all 0.15s ease;
            }

            button.btn.btn-sm[data-v-acf651b8] {
                padding: 0.4rem 0.8rem;
                font-size: 0.8rem;
                border-radius: 0.2rem;
            }

            button.btn.btn-primary[data-v-acf651b8] {
                color: #fff;
                background-color: #45c8f1;
                border-color: #45c8f1;
            }

            button.btn.btn-outline-primary[data-v-acf651b8] {
                color: #45c8f1;
                background-color: transparent;
                border-color: #45c8f1;
            }

            button.btn.btn-danger[data-v-acf651b8] {
                color: #fff;
                background-color: #ff4949;
                border-color: #ff4949;
            }

            .text-muted[data-v-acf651b8] {
                color: #8492a6;
            }

            .text-center[data-v-acf651b8] {
                text-align: center;
            }

            .drop-down-enter[data-v-acf651b8],
            .drop-down-leave-to[data-v-acf651b8] {
                transform: translateX(0) translateY(-20px);
                transition-timing-function: cubic-bezier(0.74, 0.04, 0.26, 1.05);
                opacity: 0;
            }

            .drop-down-enter-active[data-v-acf651b8],
            .drop-down-leave-active[data-v-acf651b8] {
                transition: all 0.15s;
            }

            .move-left-enter[data-v-acf651b8],
            .move-left-leave-to[data-v-acf651b8] {
                transform: translateY(0) translateX(-80px);
                transition-timing-function: cubic-bezier(0.74, 0.04, 0.26, 1.05);
                opacity: 0;
            }

            .move-left-enter-active[data-v-acf651b8],
            .move-left-leave-active[data-v-acf651b8] {
                transition: all 0.15s;
            }

            .no-tr[data-v-acf651b8] {
                transition: none !important;
            }

            .no-tr *[data-v-acf651b8] {
                transition: none !important;
            }

            .overlay[data-v-acf651b8] {
                position: fixed;
                background: rgba(220, 220, 220, 0.8);
                display: flex;
                align-items: center;
                justify-content: center;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                transition: all 0.2s ease;
                opacity: 0;
                visibility: hidden;
            }

            .overlay .modal[data-v-acf651b8] {
                transition: all 0.2s ease;
                opacity: 0;
                transform: scale(0.6);
                overflow: hidden;
            }

            .overlay.show[data-v-acf651b8] {
                opacity: 1;
                visibility: visible;
            }

            .overlay.show .modal[data-v-acf651b8] {
                opacity: 1;
                transform: scale(1);
            }

            .panel[data-v-acf651b8] {
                padding: 6px 10px;
                display: flex;
                width: 100%;
                box-sizing: border-box;
                align-items: center;
                border-radius: 6px;
                position: relative;
                border: 1px solid #eaf7ff;
                background: #f7fcff;
                outline: none;
                transition: all 0.07s ease-in-out;
            }

            .btn[data-v-acf651b8] {
                cursor: pointer;
                box-sizing: border-box;
            }

            .light-btn[data-v-acf651b8] {
                padding: 10px 12px;
                display: flex;
                width: 100%;
                box-sizing: border-box;
                align-items: center;
                border-radius: 6px;
                position: relative;
                border: 1px solid #eaf7ff;
                background: #f7fcff;
                outline: none;
                cursor: pointer;
                transition: all 0.07s ease-in-out;
            }

            .light-btn[data-v-acf651b8]:hover {
                background: #e0f4ff;
                border-color: #8acfff;
            }

            .primary-btn[data-v-acf651b8] {
                background: #239bf5;
                color: white;
                border-radius: 6px;
                height: 46px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: 0.2s ease;
                font-size: 14px;
                font-family: "Didact Gothic Regular", sans-serif;
            }

            .primary-btn[data-v-acf651b8]:hover {
                background: #40a8f6;
                color: white;
                text-decoration: none;
            }

            .shake[data-v-acf651b8] {
                animation: shake-acf651b8 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
                transform: translate3d(0, 0, 0);
            }

            @keyframes shake-acf651b8 {

                10%,
                90% {
                    transform: translate3d(-1px, 0, 0);
                }

                20%,
                80% {
                    transform: translate3d(2px, 0, 0);
                }

                30%,
                50%,
                70% {
                    transform: translate3d(-4px, 0, 0);
                }

                40%,
                60% {
                    transform: translate3d(4px, 0, 0);
                }
            }

            .pulse[data-v-acf651b8] {
                animation: pulse-acf651b8 2s ease infinite;
            }

            @keyframes pulse-acf651b8 {
                0% {
                    opacity: 0.7;
                }

                50% {
                    opacity: 0.4;
                }

                100% {
                    opacity: 0.7;
                }
            }

            .flash-once[data-v-acf651b8] {
                animation: flash-once 3.5s ease 1;
            }

            @keyframes fade-up-acf651b8 {
                0% {
                    transform: translate3d(0, 10px, 0);
                    opacity: 0;
                }

                100% {
                    transform: translate3d(0, 0, 0);
                    opacity: 1;
                }
            }

            .fade-in[data-v-acf651b8] {
                animation: fade-in-acf651b8 0.3s ease-in-out;
            }

            @keyframes fade-in-acf651b8 {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            .spin[data-v-acf651b8] {
                animation-name: spin-acf651b8;
                animation-duration: 2000ms;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes spin-acf651b8 {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            .bounceIn[data-v-acf651b8] {
                animation-name: bounceIn-acf651b8;
                transform-origin: center bottom;
                animation-duration: 1s;
                animation-fill-mode: both;
                animation-iteration-count: 1;
            }

            @keyframes bounceIn-acf651b8 {

                0%,
                20%,
                40%,
                60%,
                80%,
                100% {
                    -webkit-transition-timing-function: cubic-bezier(0.215,
                            0.61,
                            0.355,
                            1);
                    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                }

                0% {
                    opacity: 1;
                    -webkit-transform: scale3d(0.8, 0.8, 0.8);
                    transform: scale3d(0.8, 0.8, 0.8);
                }

                20% {
                    -webkit-transform: scale3d(1.1, 1.1, 1.1);
                    transform: scale3d(1.1, 1.1, 1.1);
                }

                40% {
                    -webkit-transform: scale3d(0.9, 0.9, 0.9);
                    transform: scale3d(0.9, 0.9, 0.9);
                }

                60% {
                    opacity: 1;
                    -webkit-transform: scale3d(1.03, 1.03, 1.03);
                    transform: scale3d(1.03, 1.03, 1.03);
                }

                80% {
                    -webkit-transform: scale3d(0.97, 0.97, 0.97);
                    transform: scale3d(0.97, 0.97, 0.97);
                }

                100% {
                    opacity: 1;
                    -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
                }
            }

            @keyframes dots-acf651b8 {

                0%,
                20% {
                    color: rgba(0, 0, 0, 0);
                    text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0),
                        0.5em 0 0 rgba(0, 0, 0, 0);
                }

                40% {
                    color: #8492a6;
                    text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0),
                        0.5em 0 0 rgba(0, 0, 0, 0);
                }

                60% {
                    text-shadow: 0.25em 0 0 #8492a6, 0.5em 0 0 rgba(0, 0, 0, 0);
                }

                80%,
                100% {
                    text-shadow: 0.25em 0 0 #8492a6, 0.5em 0 0 #8492a6;
                }
            }

            @keyframes recording-acf651b8 {
                0% {
                    box-shadow: 0px 0px 5px 0px rgba(173, 0, 0, 0.3);
                }

                65% {
                    box-shadow: 0px 0px 5px 5px rgba(173, 0, 0, 0.3);
                }

                90% {
                    box-shadow: 0px 0px 5px 5px rgba(173, 0, 0, 0);
                }
            }

            @font-face {
                font-family: "Didact Gothic Regular";
                src: url(data:font/woff2;base64,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) format("woff");
                font-weight: normal;
                font-style: normal;
            }

            body[data-v-acf651b8] {
                margin: 0;
                font-size: 100%;
                color: #3c4858;
            }

            a[data-v-acf651b8] {
                text-decoration: none;
                color: #45c8f1;
            }

            h1[data-v-acf651b8],
            h2[data-v-acf651b8],
            h3[data-v-acf651b8],
            h4[data-v-acf651b8] {
                margin-top: 0;
            }

            svg[data-v-acf651b8] {
                outline: none;
            }

            .app-root[data-v-acf651b8] {
                line-height: normal;
            }
            </style>
        </div>
    </template>
</div>
<footer class="globalFooter__storefront layout--halfMargin backgroundParsnip" data-module-id="globalFooter"
    data-entry-id="3ifwtebV3iMWMUOWm4uUYefooter">
    <div class="related_links layout content content--8of8-medium content--12of16-large">
        <ul class="related_links__list flex flex--columns-2-medium flex--columns-4-large">
            <li class="related_links__list__listItem">
                <h3 class="footerItemColumn__heading related_links__list__listItem__item copy"
                    data-context-text="Related links">
                    <p>Related Links:</p>
                </h3>
            </li>
            <li class="related_links__list__listItem">
                <div class="footerItem related_links__list__listItem__item"
                    data-context-text="Mailchimp, Klaviyo, and HubSpot: See how we compare">
                    <a class="cta" href="https://mailchimp.com/resources/mailchimp-comparisons/">Mailchimp, Klaviyo,
                        and HubSpot: See how we compare</a>
                </div>
            </li>
            <li class="related_links__list__listItem">
                <div class="footerItem related_links__list__listItem__item"
                    data-context-text="P.S. Meaning: What It Is and How to Use It">
                    <a class="cta" href="https://mailchimp.com/resources/what-does-ps-mean/">P.S. Meaning: What It
                        Is and How to Use It</a>
                </div>
            </li>
            <li class="related_links__list__listItem">
                <div class="footerItem related_links__list__listItem__item" data-context-text="Social Media Marketing">
                    <a class="cta" href="https://mailchimp.com/solutions/social-media-marketing-tools/">Social Media
                        Marketing</a>
                </div>
            </li>
        </ul>
    </div>
    <hr class="margin--vertical-6" />

    <div class="layout content content--8of8-medium contentTop">
        <div class="flex flex--top flex--center contentBox--top">
            <div class="footerItemColumn" data-context-text="Products">
                <h3 class="footerItemColumn__heading copy margin--bottom-c6">
                    Products
                </h3>
                <ul>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/why-mailchimp/">
                            Why Mailchimp?
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/whats-new/">
                            Product Updates
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/features/email/">
                            Email Marketing
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/features/website-builder/">
                            Websites
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/features/transactional-email/"
                            aria-label="Transactional Email">
                            Transactional Email
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/resources/mailchimp-comparisons/">
                            How We Compare
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/gdpr/">
                            GDPR Compliance
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/about/security/">
                            Security
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://status.mailchimp.com/"> Status </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/features/mailchimp-mobile/">
                            Mobile App
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footerItemColumn" data-context-text="Resources">
                <h3 class="footerItemColumn__heading copy margin--bottom-c6">
                    Resources
                </h3>
                <ul>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/resources/" aria-label="Marketing Library">
                            Marketing Library
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/resources/free-marketing-features-overview/"
                            aria-label="Free Marketing Tools">
                            Free Marketing Tools
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/marketing-glossary/">
                            Marketing Glossary
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/integrations/">
                            Integrations Directory
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footerItemColumn" data-context-text="Community">
                <h3 class="footerItemColumn__heading copy margin--bottom-c6">
                    Community
                </h3>
                <ul>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/andco/">
                            Agencies &amp; Freelancers
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/developer/">
                            Developers
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/events/"> Events </a>
                    </li>
                </ul>
            </div>
            <div class="footerItemColumn" data-context-text="Company">
                <h3 class="footerItemColumn__heading copy margin--bottom-c6">
                    Company
                </h3>
                <ul>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/about/">
                            Our Story
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/newsroom/">
                            Newsroom
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/givewhereyoulive" target="_blank"
                            rel="noopener noreferrer" aria-label="Give Where You Live">
                            Give Where You Live
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/jobs/"> Careers </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://www.intuit.com/accessibility/" target="_blank"
                            rel="noopener noreferrer">
                            Accessibility
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footerItemColumn" data-context-text="Help">
                <h3 class="footerItemColumn__heading copy margin--bottom-c6">
                    Help
                </h3>
                <ul>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/contact/">
                            Contact Us
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/experts/">
                            Hire an Expert
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/help/" aria-label="Help Center">
                            Help Center
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/sales/" aria-label="Talk to Sales">
                            Talk to Sales
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footerItemColumn">
                <ul>
                    <li class="footerItem">
                        <div class="globalNav__brandMoment" data-context-text="Check it out">
                            <a href="https://mailchimp.com/presents/">
                                <img src="{{ asset('assets') }}/MCP.svg" srcset="
                        https://eep.io/images/yzco4xsimv0y/73ZAoe8O3Y7SXQLeCNTq5u/8ddf1f63b4abdf7f67149d3a9d74a0bd/MCP.svg?w=260&amp;q=70 260w,
                        https://eep.io/images/yzco4xsimv0y/73ZAoe8O3Y7SXQLeCNTq5u/8ddf1f63b4abdf7f67149d3a9d74a0bd/MCP.svg?w=520&amp;q=70 520w
                      " sizes="260px" loading="lazy" alt="Mailchimp Presents" width="289" height="54" />
                            </a>
                            <p class="copy-regular">
                                Films, podcasts, and original series that celebrate the
                                entrepreneurial spirit.
                            </p>
                            <p class="margin--top-c3">
                                <a class="ctaArrow cta--small" href="https://mailchimp.com/presents/">
                                    Check it out
                                </a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr class="hr margin--vertical-6" />

    <div class="layout content contentBottom">
        <div class="flex flex--middle flex--center contentBox--bottom">
            <ul class="coBrandedLinks" aria-label="Other Intuit Brands">
                <li class="coBrandedLinks__intuit">
                    <a href="https://www.intuit.com/" aria-label="Intuit" target="_blank" data-event-handler="manual"
                        onclick='window.tr.pushEvent("e_click", {
    "category":"globalFooter",
    "action":"click",
    "label":"image_link: intuit"
}, this)' oncontextmenu='window.tr.pushEvent("e_click", {
    "category":"globalFooter",
    "action":"context click",
    "label":"image_link: intuit"
}, this)' rel="noopener noreferrer">
                        <svg class="brandLogoIntuit" width="80" height="16" viewBox="0 0 80 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.6468 4V16H29.5807V4H24.7014V0H38.526V4H33.6468Z" fill="#241C15"></path>
                            <path
                                d="M14.9428 0C19.0544 0 22.2618 2.8 22.2618 6.8V16H18.1957V7.2C18.1957 5.13548 16.7997 3.8 14.9428 3.8C13.086 3.8 11.69 5.13548 11.69 7.2V16H7.62389V6.8C7.62389 2.8 10.8312 0 14.9428 0Z"
                                fill="#241C15"></path>
                            <path d="M0 0H4.06607V16H0V0Z" fill="#241C15"></path>
                            <path d="M75.1207 4V16H71.0546V4H66.1753V0H80V4H75.1207Z" fill="#241C15"></path>
                            <path
                                d="M48.3863 16C52.4979 16 55.7052 13.2 55.7052 9.2V0H51.6391V8.8C51.6391 10.8645 50.2431 12.2 48.3863 12.2C46.5294 12.2 45.1334 10.8645 45.1334 8.8V0H41.0673V9.2C41.0673 13.2 44.2746 16 48.3863 16Z"
                                fill="#241C15"></path>
                            <path d="M59.3647 0H63.4307V16H59.3647V0Z" fill="#241C15"></path>
                        </svg>
                    </a>
                </li>
                <li class="coBrandedLinks__turbotax">
                    <a href="https://turbotax.intuit.com/" aria-label="Turbo Tax" target="_blank"
                        data-event-handler="manual" onclick='window.tr.pushEvent("e_click", {
    "category":"globalFooter",
    "action":"click",
    "label":"image_link: turbotax"
}, this)' oncontextmenu='window.tr.pushEvent("e_click", {
    "category":"globalFooter",
    "action":"context click",
    "label":"image_link: turbotax"
}, this)' rel="noopener noreferrer">
                        <svg class="brandLogoTurboTax" width="76" height="17" viewBox="0 0 76 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="svg_circle"
                                d="M8.00927 16.0188C12.4327 16.0188 16.0187 12.4327 16.0187 8.00935C16.0187 3.58591 12.4327 0 8.00927 0C3.58582 0 0 3.58591 0 8.00935C0 12.4327 3.58582 16.0188 8.00927 16.0188Z"
                                fill="#241C15"></path>
                            <path class="svg_logo"
                                d="M6.23265 10.9302C5.29702 10.2664 4.41829 9.55843 3.5712 8.79987C3.26156 9.46361 2.99611 10.1716 2.73047 10.886C4.06429 12.0364 5.87865 13.326 7.12392 14.0783C8.71683 9.95668 11.2077 7.24476 13.5972 5.34199C13.2874 4.67823 12.8892 4.09665 12.3517 3.61621C9.8232 5.56325 7.7372 8.04759 6.23265 10.9302Z"
                                fill="white"></path>
                            <path class="svg_text"
                                d="M17.9844 8.35697V6.91568H19.2484V4.82324H21.0251V6.91568H22.8331V8.35697H21.0251V11.7137C21.0251 12.3648 21.1771 12.8262 21.9727 12.8262C22.2131 12.8262 22.5354 12.7757 22.7385 12.6746L22.802 14.0905C22.4856 14.2107 21.9989 14.2865 21.6004 14.2865C19.6854 14.2865 19.2484 13.1108 19.2484 11.7326V8.36328H17.9844V8.35697Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M30.4119 14.1346H28.6986V12.9715H28.6737C28.3574 13.6984 27.4983 14.337 26.4299 14.337C24.5523 14.337 23.7617 12.8956 23.7617 11.4164V6.89648H25.5634V10.9043C25.5634 11.7577 25.7601 12.8324 26.9168 12.8324C28.0735 12.8324 28.6039 11.8399 28.6039 10.879V6.90912H30.4119V14.1346Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M33.9652 6.90926V8.11035H33.9912C34.3836 7.28223 35.1543 6.69434 36.0956 6.69434C36.2351 6.69434 36.4118 6.70699 36.5327 6.74492V8.40115C36.2923 8.33794 36.1403 8.32528 35.9698 8.32528C34.3449 8.32528 34.0287 9.7413 34.0287 10.266V14.1349H32.2207V6.90926H33.9589H33.9652Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M39.2497 2.75586V7.8257H39.2995C39.6732 7.35791 40.4003 6.70048 41.7275 6.70048C43.7883 6.70048 45.2364 8.35671 45.2364 10.4934C45.2364 12.63 43.8828 14.3495 41.6828 14.3495C40.6717 14.3495 39.6917 13.8817 39.205 13.0599H39.1801V14.1471H37.4668V2.75586H39.2559H39.2497ZM41.3166 8.17339C39.9893 8.17339 39.1924 9.39344 39.1924 10.5187C39.1924 11.6438 39.9955 12.8387 41.3166 12.8387C42.7199 12.8387 43.3961 11.6249 43.3961 10.4934C43.3961 9.36182 42.7199 8.17339 41.3166 8.17339Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M50.1685 6.70068C52.3491 6.70068 54.1 8.21785 54.1 10.4936C54.1 12.7694 52.3491 14.3497 50.1685 14.3497C47.9871 14.3497 46.2363 12.7694 46.2363 10.4936C46.2363 8.21785 47.9809 6.70068 50.1685 6.70068ZM50.1685 12.8389C51.5963 12.8389 52.26 11.6251 52.26 10.4936C52.26 9.36203 51.5963 8.17359 50.1685 8.17359C48.7391 8.17359 48.0754 9.36203 48.0754 10.4936C48.0754 11.6251 48.7391 12.8389 50.1685 12.8389Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M54.5234 8.35697V6.91568H55.7871V4.82324H57.5634V6.91568H59.3725V8.35697H57.5634V11.7137C57.5634 12.3648 57.7162 12.8262 58.5125 12.8262C58.7525 12.8262 59.0743 12.7757 59.278 12.6746L59.3398 14.0905C59.0253 14.2107 58.538 14.2865 58.1398 14.2865C56.2253 14.2865 55.7871 13.1108 55.7871 11.7326V8.36328H54.5234V8.35697Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M65.0098 13.2118H64.9589C64.5989 13.8503 63.7461 14.3118 62.7152 14.3118C61.5516 14.3118 60.0098 13.7554 60.0098 12.0676C60.0098 9.91197 62.7152 9.61488 64.9789 9.61488V9.43786C64.9789 8.54654 64.2261 8.11035 63.3225 8.11035C62.557 8.11035 61.8189 8.47068 61.3552 8.93846L60.4207 7.83854C61.237 7.08626 62.3734 6.69434 63.4734 6.69434C66.0643 6.69434 66.6916 8.28735 66.6916 9.73497V14.1285H65.0025V13.2118H65.0098ZM64.9843 10.8412H64.5789C63.4352 10.8412 61.8243 10.9803 61.8243 12.0424C61.8243 12.7314 62.4752 12.9463 63.0879 12.9463C64.3261 12.9463 64.9898 12.2446 64.9898 11.0941V10.8412H64.9843Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M70.4546 10.2975L67.8492 6.91553H70.0164L71.5855 9.15966L73.1964 6.91553H75.2783L72.6855 10.2975L75.6383 14.1346H73.4437L71.5655 11.5049L69.6637 14.1346H67.5273L70.4601 10.2975H70.4546Z"
                                fill="#241C15"></path>
                        </svg>
                    </a>
                </li>
                <li class="coBrandedLinks__creditkarma">
                    <a href="https://www.creditkarma.com/" aria-label="Credit Karma" target="_blank"
                        data-event-handler="manual" onclick='window.tr.pushEvent("e_click", {
    "category":"globalFooter",
    "action":"click",
    "label":"image_link: credit karma"
}, this)' oncontextmenu='window.tr.pushEvent("e_click", {
    "category":"globalFooter",
    "action":"context click",
    "label":"image_link: credit karma"
}, this)' rel="noopener noreferrer">
                        <svg class="brandLogoCreditKarma" width="98" height="17" viewBox="0 0 98 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="svg_text"
                                d="M24.5309 7.93361C23.9636 7.23288 22.8745 6.81543 21.8309 6.81543C19.7291 6.81543 18 8.27652 18 10.6023C18 12.9878 19.76 14.3892 21.8764 14.3892C22.9345 14.3892 23.9182 14.0314 24.5146 13.3903L23.3964 12.2572C23.0545 12.6747 22.4436 12.8983 21.8909 12.8983C20.5345 12.8983 19.8636 11.7205 19.8636 10.6023C19.8636 9.48416 20.52 8.30634 21.8309 8.30634C22.4127 8.30634 23.0236 8.60452 23.3073 9.00707L24.5309 7.93361Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M25.5156 14.1805H27.3047V10.3489C27.3047 9.82707 27.6174 8.42561 29.2265 8.42561C29.392 8.42561 29.5411 8.44052 29.7793 8.50016V6.86016C29.6593 6.83034 29.4811 6.81543 29.3465 6.81543C28.4065 6.81543 27.6465 7.39688 27.2593 8.21688H27.2302V7.02416H25.5156V14.1805Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M31.875 9.8867C31.9496 8.88779 32.7987 8.15725 33.8569 8.15725C35.0205 8.15725 35.5423 8.96234 35.5423 9.8867H31.875ZM37.3314 10.6918C37.3314 8.11252 35.8696 6.81543 33.8714 6.81543C31.7096 6.81543 30.0859 8.33616 30.0859 10.6471C30.0859 12.9729 31.7259 14.3892 33.9314 14.3892C35.2878 14.3892 36.3023 13.9122 37.0023 12.958L35.8096 12.0038C35.4078 12.5703 34.8114 12.9282 33.9169 12.9282C32.8732 12.9282 31.9496 12.1827 31.875 11.1689H37.3169C37.3314 11.0049 37.3314 10.8558 37.3314 10.6918Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M45.9749 2.90918H44.1858V7.93354H44.1421C43.7694 7.47136 43.053 6.81536 41.7421 6.81536C39.6985 6.81536 38.2676 8.45536 38.2676 10.5725C38.2676 12.6597 39.6094 14.3892 41.7858 14.3892C42.7858 14.3892 43.7549 13.927 44.2458 13.107H44.2767V14.1805H45.9749V2.90918ZM40.0858 10.5725C40.0858 9.45427 40.7567 8.27645 42.1439 8.27645C43.4567 8.27645 44.2458 9.48409 44.2458 10.6023C44.2458 11.7205 43.4567 12.8983 42.1439 12.8983C40.7567 12.8983 40.0858 11.6906 40.0858 10.5725Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M47.8152 14.1805H49.6043V7.02414H47.8152V14.1805ZM47.5625 4.59396C47.5625 5.16051 48.0389 5.66742 48.6952 5.66742C49.3516 5.66742 49.8589 5.20524 49.8589 4.59396C49.8589 3.98269 49.3516 3.52051 48.6952 3.52051C48.0389 3.52051 47.5625 4.02742 47.5625 4.59396Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M52.1805 8.4553V11.7949C52.1805 13.1666 52.6132 14.3295 54.5059 14.3295C54.9096 14.3295 55.3859 14.2549 55.6986 14.1357L55.6386 12.7342C55.4314 12.8386 55.1168 12.8833 54.8786 12.8833C54.0896 12.8833 53.9405 12.4211 53.9405 11.78V8.4553H55.7296V7.02402H53.9405V4.95166H52.1805V7.02402H50.9277V8.4553H52.1805Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M57.0527 14.1805H58.8418V10.5128H58.8873L61.72 14.1805H64.0909L60.7946 10.2594L63.8964 7.02409H61.6L58.8873 10.0357H58.8418V2.90918H57.0527V14.1805Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M69.2927 14.1805H70.9618V9.82707C70.9618 8.39579 70.3363 6.81543 67.7709 6.81543C66.6836 6.81543 65.5491 7.20307 64.7454 7.94852L65.6691 9.03688C66.1309 8.5747 66.8618 8.21688 67.6218 8.21688C68.5163 8.21688 69.2618 8.64925 69.2618 9.52888V9.70779C67.0254 9.70779 64.3418 10.006 64.3418 12.138C64.3418 13.8078 65.8782 14.3594 67.0254 14.3594C68.04 14.3594 68.8891 13.8972 69.2473 13.2711H69.2927V14.1805ZM69.2618 11.1689C69.2618 12.302 68.6054 13.0027 67.3836 13.0027C66.7727 13.0027 66.1309 12.794 66.1309 12.1082C66.1309 11.0496 67.7272 10.9154 68.86 10.9154H69.2618V11.1689Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M72.5 14.1805H74.2891V10.3489C74.2891 9.82707 74.6036 8.42561 76.2127 8.42561C76.3764 8.42561 76.5255 8.44052 76.7655 8.50016V6.86016C76.6455 6.83034 76.4673 6.81543 76.3327 6.81543C75.3927 6.81543 74.6327 7.39688 74.2455 8.21688H74.2145V7.02416H72.5V14.1805Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M86.6569 6.81543C85.5842 6.81543 84.7787 7.30743 84.3006 8.17216C83.8987 7.36707 83.1678 6.81543 82.0642 6.81543C80.9169 6.81543 80.1569 7.47143 79.8442 8.17216H79.8133V7.02416H78.1133V14.1805H79.9024V10.2445C79.9024 9.29034 80.3951 8.30634 81.4678 8.30634C82.3787 8.30634 82.7951 8.97725 82.7951 9.85688V14.1805H84.5842V10.2743C84.5842 9.34997 85.046 8.30634 86.1642 8.30634C87.3133 8.30634 87.506 9.36488 87.506 10.2147V14.1805H89.2951V9.70779C89.2951 8.2467 88.5206 6.81543 86.6569 6.81543Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M95.2753 14.1805H96.9462V9.82707C96.9462 8.39579 96.3189 6.81543 93.7553 6.81543C92.6662 6.81543 91.5334 7.20307 90.728 7.94852L91.6534 9.03688C92.1153 8.5747 92.8462 8.21688 93.6062 8.21688C94.5007 8.21688 95.2462 8.64925 95.2462 9.52888V9.70779C93.0098 9.70779 90.3262 10.006 90.3262 12.138C90.3262 13.8078 91.8607 14.3594 93.0098 14.3594C94.0225 14.3594 94.8734 13.8972 95.2316 13.2711H95.2753V14.1805ZM95.2462 11.1689C95.2462 12.302 94.5898 13.0027 93.368 13.0027C92.7553 13.0027 92.1153 12.794 92.1153 12.1082C92.1153 11.0496 93.7098 10.9154 94.8425 10.9154H95.2462V11.1689Z"
                                fill="#241C15"></path>
                            <path class="svg_circle"
                                d="M8.0091 16.0182C12.4328 16.0182 16.0182 12.4324 16.0182 8.00909C16.0182 3.5858 12.4328 0 8.0091 0C3.58546 0 0 3.5858 0 8.00909C0 12.4324 3.58546 16.0182 8.0091 16.0182Z"
                                fill="#241C15"></path>
                            <path class="svg_logo"
                                d="M3.96874 8.81211C3.96874 7.43406 4.63237 6.72608 5.70147 6.72608C6.49783 6.72608 6.99058 7.03582 7.16876 7.12433C7.30148 6.99159 7.38874 6.77033 7.38874 6.54908C7.38874 6.15084 6.94692 5.7526 5.65783 5.7526C4.14692 5.7526 2.86328 6.81458 2.86328 8.81211C2.86328 10.8096 4.01965 11.8716 5.5251 11.8716C6.45419 11.8716 7.16874 11.5619 7.38874 11.4734V10.3671C7.16874 10.5441 6.41601 10.8981 5.70147 10.8981C4.72874 10.8981 3.96874 10.1901 3.96874 8.81211ZM11.3342 8.76786C11.9978 7.97137 12.6233 7.03582 13.0651 5.84109L12.0924 5.48711C11.4724 7.17489 10.5378 8.32537 9.43056 9.26093V3.44531H8.36874V11.7452H9.43056V10.4999C9.82874 10.1901 10.1833 9.88042 10.5869 9.52642L11.5615 11.2142C11.7833 11.6125 12.136 11.8337 12.6233 11.8337C12.8888 11.8337 13.0651 11.7452 13.1106 11.7009L11.3342 8.77418V8.76786Z"
                                fill="white"></path>
                        </svg>
                    </a>
                </li>
                <li class="coBrandedLinks__quickbooks">
                    <a href="https://quickbooks.intuit.com/" aria-label="Quickbooks" target="_blank"
                        data-event-handler="manual" onclick='window.tr.pushEvent("e_click", {
    "category":"globalFooter",
    "action":"click",
    "label":"image_link: quickbooks"
}, this)' oncontextmenu='window.tr.pushEvent("e_click", {
    "category":"globalFooter",
    "action":"context click",
    "label":"image_link: quickbooks"
}, this)' rel="noopener noreferrer">
                        <svg class="brandLogoQuickBooks" width="95" height="18" viewBox="0 0 95 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="svg_circle"
                                d="M8.00907 16.0187C12.4327 16.0187 16.0182 12.4328 16.0182 8.00936C16.0182 3.58593 12.4327 0 8.00907 0C3.58543 0 0 3.58593 0 8.00936C0 12.4328 3.58543 16.0187 8.00907 16.0187Z"
                                fill="#241C15"></path>
                            <path class="svg_logo"
                                d="M2.23047 8.0095C2.23047 9.70366 3.60867 11.0565 5.33412 11.0565H5.77592V9.92492H5.33412C4.2723 9.92492 3.38685 9.05886 3.38685 8.0095C3.38685 6.96014 4.2723 6.09408 5.33412 6.09408H6.39594V12.0173C6.39594 12.6306 6.92685 13.1489 7.55412 13.1489V4.95621H5.33412C3.60867 4.95621 2.23047 6.30903 2.23047 8.00319V8.0095ZM10.6632 4.96254H10.2214V6.09408H10.6632C11.725 6.09408 12.6105 6.96014 12.6105 8.0095C12.6105 9.05886 11.725 9.92492 10.6632 9.92492H9.60139V4.00166C9.60139 3.38848 9.07048 2.87012 8.44503 2.87012V11.0565H10.6632C12.3886 11.0565 13.7687 9.70366 13.7687 8.0095C13.7687 6.31534 12.3886 4.96254 10.6632 4.96254Z"
                                fill="white"></path>
                            <path class="svg_text"
                                d="M25.8082 17.6748H24.0082V13.1865H23.9827C23.5136 13.9008 22.5973 14.337 21.5936 14.337C19.3937 14.337 18.041 12.624 18.041 10.5505C18.041 8.47706 19.4882 6.82715 21.5555 6.82715C22.8827 6.82715 23.6918 7.4656 24.0591 8.02822H24.1027V7.03575H25.8355V17.6812H25.8227L25.8082 17.6748ZM21.9409 12.8516C23.2682 12.8516 24.0646 11.6821 24.0646 10.5758C24.0646 9.46953 23.2682 8.26844 21.9409 8.26844C20.5373 8.26844 19.8609 9.43158 19.8609 10.5442C19.8609 11.6568 20.5373 12.8516 21.9409 12.8516Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M34.2427 14.1287H32.5282V12.991H32.5045C32.1882 13.7053 31.3282 14.3311 30.2609 14.3311C28.3827 14.3311 27.5918 12.915 27.5918 11.4611V7.02344H29.3936V10.9554C29.3936 11.7961 29.59 12.8455 30.7463 12.8455C31.9045 12.8455 32.4336 11.8657 32.4336 10.9238V7.02344H34.2482V14.1162L34.2427 14.1287Z"
                                fill="#241C15"></path>
                            <path class="svg_text" d="M36.082 7.03564H37.8984V14.1283H36.082V7.03564Z" fill="#241C15">
                            </path>
                            <path class="svg_text"
                                d="M44.6286 9.00183C44.3449 8.60357 43.7249 8.31277 43.1359 8.31277C41.8086 8.31277 41.1449 9.47594 41.1449 10.5885C41.1449 11.7011 41.8213 12.8642 43.194 12.8642C43.7559 12.8642 44.3686 12.643 44.7177 12.2258L45.8431 13.3511C45.2413 13.9894 44.2431 14.3436 43.1759 14.3436C41.0377 14.3436 39.2559 12.9527 39.2559 10.5948C39.2559 8.23692 41.0068 6.84619 43.1249 6.84619C44.1795 6.84619 45.2813 7.2571 45.8486 7.95246L44.6104 9.01446L44.6286 9.00183Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M46.773 2.9585H48.5803V10.0259H48.6239L51.3694 7.04219H53.6894L50.5603 10.2535L53.8912 14.1413H51.5003L48.6367 10.5064H48.593V14.1413H46.7803V2.9585H46.7676H46.773Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M56.541 2.9585V7.93984H56.5901C56.9647 7.47837 57.692 6.83357 59.0192 6.83357C61.0792 6.83357 62.5265 8.45819 62.5265 10.5569C62.5265 12.6557 61.1738 14.3435 58.9738 14.3435C57.9629 14.3435 56.9829 13.882 56.4901 13.0729H56.4647V14.1349H54.752V2.9585H56.541ZM58.6083 8.27488C57.281 8.27488 56.4829 9.47597 56.4829 10.5822C56.4829 11.6885 57.281 12.858 58.6083 12.858C60.0101 12.858 60.6865 11.6632 60.6865 10.5506C60.6865 9.43804 60.0101 8.27488 58.6083 8.27488Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M67.464 6.8335C69.6494 6.8335 71.3949 8.32537 71.3949 10.5569C71.3949 12.7884 69.644 14.3433 67.464 14.3433C65.2822 14.3433 63.5312 12.7884 63.5312 10.5569C63.5312 8.32537 65.2822 6.8335 67.464 6.8335ZM67.464 12.8642C68.8912 12.8642 69.5549 11.6694 69.5549 10.5569C69.5549 9.4443 68.8912 8.28113 67.464 8.28113C66.0349 8.28113 65.3712 9.4443 65.3712 10.5569C65.3712 11.6694 66.0349 12.8642 67.464 12.8642Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M76.3059 6.8335C78.4877 6.8335 80.2386 8.32537 80.2386 10.5569C80.2386 12.7884 78.4877 14.3433 76.3059 14.3433C74.1259 14.3433 72.375 12.7884 72.375 10.5569C72.375 8.32537 74.1259 6.8335 76.3059 6.8335ZM76.3059 12.8642C77.7368 12.8642 78.4004 11.6694 78.4004 10.5569C78.4004 9.4443 77.7368 8.28113 76.3059 8.28113C74.8786 8.28113 74.215 9.4443 74.215 10.5569C74.215 11.6694 74.8786 12.8642 76.3059 12.8642Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M81.6602 2.9585H83.4692V10.0259H83.5202L86.2638 7.04219H88.5892L85.4602 10.2535L88.7911 14.1413H86.402L83.5383 10.5064H83.4874V14.1413H81.6747V2.9585H81.6602Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M93.7089 8.92591C93.3926 8.51502 92.7926 8.16102 92.1289 8.16102C91.5544 8.16102 90.9671 8.3633 90.9671 8.92591C90.9671 9.48853 91.5289 9.61495 92.5344 9.85519C93.6089 10.108 94.8726 10.5822 94.8726 11.9729C94.8726 13.705 93.4435 14.3372 91.858 14.3372C90.7453 14.3372 89.5817 13.9262 88.8926 13.1676L90.0817 12.074C90.4726 12.5734 91.1489 12.9591 91.9344 12.9591C92.458 12.9591 93.0962 12.7504 93.0962 12.1182C93.0962 11.5304 92.5344 11.3534 91.4399 11.1005C90.3653 10.8477 89.3035 10.4241 89.3035 9.09028C89.3035 7.5099 90.7508 6.8335 92.1798 6.8335C93.2162 6.8335 94.3035 7.1875 94.8926 7.91448L93.7162 8.93224V8.91961L93.7089 8.92591Z"
                                fill="#241C15"></path>
                        </svg>
                    </a>
                </li>
                <li class="coBrandedLinks__mailchimp">
                    <a href="https://mailchimp.com/" aria-label="Mailchimp" data-event-handler="manual" onclick='window.tr.pushEvent("e_click", {
    "category":"globalFooter",
    "action":"click",
    "label":"image_link: mailchimp"
}, this)' oncontextmenu='window.tr.pushEvent("e_click", {
    "category":"globalFooter",
    "action":"context click",
    "label":"image_link: mailchimp"
}, this)'>
                        <svg class="brandLogoMailchimp" width="88" height="18" viewBox="0 0 88 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="svg_text"
                                d="M30.1031 9.42531V13.9831H28.2885V9.93735C28.2885 9.07131 28.0922 7.99033 26.9285 7.99033C25.7667 7.99033 25.3303 9.05867 25.3303 10.0006V13.9831H23.5231V9.57702C23.5231 8.67938 23.0976 7.99666 22.1758 7.99666C21.0885 7.99666 20.5885 9.00178 20.5885 9.96897V13.9769H18.7812V6.68809H20.5013V7.85758H20.5249C20.8413 7.14957 21.6122 6.47949 22.7758 6.47949C23.9394 6.47949 24.634 7.04209 25.0449 7.85758C25.5322 6.97889 26.3413 6.47949 27.4285 6.47949C29.3122 6.47949 30.1031 7.93344 30.1031 9.42531Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M36.4067 13.0475H36.3558C35.9958 13.6859 35.1358 14.1537 34.1049 14.1537C32.9431 14.1537 31.3867 13.5912 31.3867 11.8907C31.3867 9.71607 34.1049 9.41894 36.3685 9.41894V9.23563C36.3685 8.33798 35.6104 7.89547 34.7067 7.89547C33.934 7.89547 33.1958 8.25578 32.734 8.72991L31.7976 7.62365C32.614 6.86505 33.7576 6.4668 34.8649 6.4668C37.4613 6.4668 38.094 8.0788 38.094 9.53272V13.9641H36.4067V13.0348H36.414L36.4067 13.0475ZM36.3813 10.658H35.9704C34.8194 10.658 33.2085 10.797 33.2085 11.8716C33.2085 12.567 33.8594 12.7819 34.4794 12.7819C35.7176 12.7819 36.3813 12.074 36.3813 10.9171V10.658Z"
                                fill="#241C15"></path>
                            <path class="svg_text" d="M39.9219 6.68848H41.729V13.9771H39.9219V6.68848Z" fill="#241C15">
                            </path>
                            <path class="svg_text"
                                d="M40.8633 5.50641C41.4705 5.50641 41.9705 5.00701 41.9705 4.39383C41.9705 3.78065 41.476 3.28125 40.8633 3.28125C40.2505 3.28125 39.7578 3.78065 39.7578 4.39383C39.7578 5.00701 40.2505 5.50641 40.8633 5.50641Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M63.6698 5.54401C64.277 5.54401 64.7752 5.04463 64.7752 4.43143C64.7752 3.81825 64.2825 3.31885 63.6698 3.31885C63.0552 3.31885 62.5625 3.81825 62.5625 4.43143C62.5625 5.04463 63.0552 5.54401 63.6698 5.54401Z"
                                fill="#241C15"></path>
                            <path class="svg_text" d="M43.543 2.45898H45.3575V13.9388H43.543V2.45898Z" fill="#241C15">
                            </path>
                            <path class="svg_text"
                                d="M52.1716 8.70466C51.888 8.29376 51.2607 7.99666 50.6734 7.99666C49.3462 7.99666 48.6771 9.19773 48.6771 10.3356C48.6771 11.4735 49.3534 12.6745 50.7244 12.6745C51.288 12.6745 51.9007 12.447 52.248 12.0171L53.3789 13.174C52.7789 13.8314 51.7807 14.1918 50.7062 14.1918C48.5625 14.1918 46.7734 12.7631 46.7734 10.3356C46.7734 7.90815 48.5243 6.47949 50.6553 6.47949C51.7171 6.47949 52.8171 6.90304 53.3862 7.61737L52.1462 8.71098L52.1662 8.69833L52.1716 8.70466Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M60.9928 13.9833H59.1782V9.9754C59.1782 9.10936 58.9948 8.04734 57.8311 8.04734C56.6675 8.04734 56.1255 9.03982 56.1255 10.007V13.9894H54.3164V2.49707H56.1255V7.70598H56.1493C56.433 7.09913 57.2364 6.47329 58.311 6.47329C60.1946 6.47329 60.9855 7.92723 60.9855 9.41911V13.9833H60.9928Z"
                                fill="#241C15"></path>
                            <path class="svg_text" d="M62.7656 6.68799H64.5747V13.9766H62.7656V6.68799Z" fill="#241C15">
                            </path>
                            <path class="svg_text"
                                d="M77.7359 9.42531V13.9831H75.9213V9.93735C75.9213 9.07131 75.725 7.99033 74.5613 7.99033C73.3995 7.99033 72.9632 9.05867 72.9632 10.0006V13.9831H71.1541V9.57702C71.1541 8.67938 70.7304 7.99666 69.8068 7.99666C68.7213 7.99666 68.2213 9.00178 68.2213 9.96897V13.9769H66.4141V6.68809H68.1322V7.85758H68.1577C68.4741 7.14957 69.245 6.47949 70.4086 6.47949C71.5722 6.47949 72.2668 7.04209 72.6777 7.85758C73.165 6.97889 73.9795 6.47949 75.0613 6.47949C76.945 6.47949 77.7359 7.93344 77.7359 9.42531Z"
                                fill="#241C15"></path>
                            <path class="svg_text"
                                d="M81.283 6.68856V7.70632H81.3339C81.6939 7.13107 82.5103 6.47363 83.843 6.47363C85.9158 6.47363 87.3649 8.14883 87.3649 10.2982C87.3649 12.4475 86.0049 14.1858 83.8067 14.1858C82.7939 14.1858 81.8703 13.7307 81.4103 13.0038H81.3849V17.6183H79.5703V6.68856H81.2958H81.283ZM83.4267 7.96551C82.0921 7.96551 81.2958 9.1982 81.2958 10.3361C81.2958 11.4739 82.0994 12.6751 83.4267 12.6751C84.8358 12.6751 85.5121 11.4487 85.5121 10.3045C85.5121 9.16027 84.8358 7.96551 83.4267 7.96551Z"
                                fill="#241C15"></path>
                            <path class="svg_circle"
                                d="M8.00909 16.0188C12.4328 16.0188 16.0182 12.4328 16.0182 8.00935C16.0182 3.58591 12.4328 0 8.00909 0C3.58546 0 0 3.58591 0 8.00935C0 12.4328 3.58546 16.0188 8.00909 16.0188Z"
                                fill="#241C15"></path>
                            <path class="svg_logo_black"
                                d="M13.1171 9.39109C13.0456 9.30304 12.9589 9.23199 12.8656 9.18187C12.8578 9.15615 12.8495 9.12869 12.8408 9.1008C12.8307 9.06854 12.8203 9.03803 12.8107 9.0097C12.9563 8.70154 12.9449 8.43391 12.9197 8.28571C12.8809 8.03552 12.7741 7.82631 12.584 7.62624C12.3522 7.38259 11.966 7.22654 11.6583 7.13414C11.6543 6.98812 11.65 6.82206 11.6452 6.71919C11.6391 6.58189 11.6264 6.29726 11.5375 6.01003C11.4713 5.77378 11.3741 5.55715 11.2533 5.37365C11.7193 4.81443 11.9716 4.2369 11.9712 3.72126C11.9699 2.88613 11.3196 2.34652 10.3149 2.34652C9.83761 2.34652 9.29364 2.46726 8.74052 2.69652C8.74052 2.69652 8.70914 2.7096 8.66686 2.72747C8.49861 2.56271 8.27719 2.34521 8.26237 2.33257C8.00956 2.11202 7.69574 2 7.32917 2C6.89329 2 6.39204 2.16171 5.84023 2.48033C5.36425 2.75537 4.85254 3.14809 4.36044 3.61709C3.3575 4.57295 2.54896 5.71712 2.19721 6.67822C2.04639 7.09099 1.98145 7.4654 2.00455 7.791C2.03245 8.18677 2.19285 8.51847 2.46832 8.75123L2.63962 8.89637C2.58557 9.13131 2.57118 9.38019 2.5969 9.6391C2.64615 10.1303 2.89504 10.5971 3.29735 10.9537C3.62077 11.2405 4.01741 11.4266 4.41667 11.4841C4.77496 12.1994 5.32197 12.8022 6.01065 13.2372C6.75338 13.7067 7.64256 13.9695 8.58186 13.9974C8.64158 13.9991 8.70216 14 8.76188 14C9.73169 14 10.6396 13.7616 11.3876 13.3104C12.1578 12.8462 12.7475 12.1628 13.0931 11.3342C13.0944 11.3312 13.0958 11.3281 13.0966 11.3251C13.1563 11.1716 13.3512 10.6311 13.3512 10.1234C13.3512 9.75635 13.2243 9.52228 13.1171 9.39109Z"
                                fill="#241C15"></path>
                            <path class="svg_logo"
                                d="M4.53927 8.22744C4.44425 8.22264 4.35664 8.23092 4.28385 8.24574C3.67537 8.36866 3.33147 8.88604 3.39903 9.55903C3.46005 10.1675 4.07594 10.681 4.64606 10.6962C4.7049 10.6975 4.76374 10.6936 4.82084 10.684C5.4376 10.579 5.59931 9.90903 5.49732 9.2513C5.38268 8.50857 4.88012 8.24661 4.53927 8.22787V8.22744ZM5.14382 9.98749C5.12116 10.0402 5.03137 10.1121 4.90322 10.1074C4.77115 10.0973 4.62426 10.0014 4.60465 9.76258C4.59463 9.64446 4.63952 9.50105 4.66654 9.42608C4.71972 9.28094 4.67177 9.12882 4.54755 9.04731C4.47476 8.99937 4.38759 8.98324 4.30216 9.00154C4.21847 9.01942 4.14698 9.06867 4.10122 9.14015C4.0633 9.19943 4.0402 9.27353 4.02756 9.31319C4.02407 9.32365 4.02145 9.33237 4.01971 9.3376C3.99181 9.41257 3.94736 9.4348 3.91684 9.43044C3.90246 9.4287 3.88285 9.41911 3.87021 9.38468C3.83577 9.29053 3.86367 9.02465 4.04107 8.82894C4.15352 8.70515 4.32962 8.64151 4.50091 8.66331C4.67918 8.68597 4.82738 8.79363 4.91848 8.96668C5.03922 9.19682 4.93155 9.43785 4.86748 9.58213C4.86051 9.59782 4.85397 9.6122 4.84874 9.62484C4.80864 9.72073 4.80646 9.80399 4.84264 9.86021C4.87053 9.90336 4.92066 9.92865 4.9795 9.92952C5.00696 9.92995 5.03224 9.92429 5.05403 9.91906C5.08585 9.91165 5.11854 9.90424 5.13859 9.92908C5.146 9.93736 5.15734 9.95611 5.14382 9.98749Z"
                                fill="white"></path>
                            <path class="svg_logo"
                                d="M13.1171 9.39109C13.0456 9.30304 12.9589 9.23199 12.8656 9.18187C12.8578 9.15615 12.8495 9.12869 12.8408 9.1008C12.8307 9.06854 12.8203 9.03803 12.8107 9.0097C12.9563 8.70154 12.9449 8.43391 12.9197 8.28571C12.8809 8.03552 12.7741 7.82631 12.584 7.62624C12.3522 7.38259 11.966 7.22654 11.6583 7.13414C11.6543 6.98812 11.65 6.82206 11.6452 6.71919C11.6391 6.58189 11.6264 6.29727 11.5375 6.01003C11.4713 5.77378 11.3741 5.55715 11.2533 5.37365C11.7193 4.81443 11.9716 4.2369 11.9712 3.72126C11.9699 2.88613 11.3196 2.34652 10.3149 2.34652C9.83761 2.34652 9.29364 2.46726 8.74052 2.69652C8.73965 2.69652 8.70914 2.7096 8.66686 2.72747C8.49861 2.56271 8.27719 2.34521 8.26237 2.33257C8.00956 2.11202 7.69574 2 7.32917 2C6.89329 2 6.39204 2.16171 5.84023 2.48033C5.36425 2.75537 4.85254 3.14809 4.36044 3.61709C3.3575 4.57295 2.54896 5.71712 2.19721 6.67822C2.04639 7.09099 1.98145 7.4654 2.00455 7.791C2.03245 8.18677 2.19285 8.51847 2.46832 8.75123L2.63962 8.89637C2.58557 9.13131 2.57118 9.38019 2.5969 9.6391C2.64615 10.1303 2.89504 10.5971 3.29735 10.9537C3.62077 11.2405 4.01741 11.4266 4.41667 11.4841C4.77496 12.1994 5.32197 12.8022 6.01065 13.2372C6.75338 13.7067 7.64256 13.9695 8.58186 13.9974C8.64158 13.9991 8.70216 14 8.76188 14C9.73169 14 10.6396 13.7616 11.3876 13.3104C12.1578 12.8462 12.7475 12.1628 13.0931 11.3342C13.0944 11.3312 13.0958 11.3281 13.0966 11.3251C13.1563 11.1716 13.3512 10.6311 13.3512 10.1234C13.3512 9.75635 13.2235 9.52228 13.1162 9.39109H13.1171ZM12.7296 11.1821C12.0658 12.773 10.4814 13.6587 8.59407 13.6025C6.83445 13.5502 5.33418 12.6218 4.67732 11.1084C4.28024 11.1084 3.87096 10.9341 3.55974 10.6586C3.23197 10.3683 3.02972 9.99215 2.99006 9.59987C2.95955 9.29432 2.99703 9.01057 3.09249 8.76256L2.72374 8.45004C1.03604 7.02517 6.31489 1.15789 8.00303 2.63071C8.01174 2.63812 8.5775 3.19342 8.57881 3.19473C8.58099 3.19342 8.8909 3.06222 8.89264 3.06135C10.3733 2.44808 11.575 2.74403 11.5763 3.72257C11.5772 4.23123 11.2529 4.82445 10.7333 5.36275C10.9216 5.53754 11.0724 5.8104 11.1587 6.12248C11.2315 6.35306 11.2442 6.58712 11.2507 6.73706C11.2599 6.94454 11.2699 7.42748 11.2708 7.4362C11.2838 7.44012 11.4338 7.48153 11.4791 7.49417C11.8766 7.60575 12.1595 7.75439 12.2977 7.89953C12.4358 8.04468 12.5047 8.18503 12.5296 8.34979C12.5527 8.48273 12.5496 8.71766 12.3744 8.98006C12.3744 8.98006 12.4197 9.07857 12.4633 9.21892C12.5069 9.35883 12.5387 9.47521 12.5435 9.49265C12.7043 9.49265 12.9567 9.67745 12.9567 10.1238C12.9567 10.5701 12.7723 11.0709 12.7292 11.1825L12.7296 11.1821Z"
                                fill="white"></path>
                            <path class="svg_logo"
                                d="M12.4641 9.85572C12.3791 9.80342 12.2771 9.82172 12.2771 9.82172C12.2771 9.82172 12.2309 9.50397 12.0993 9.21499C11.7096 9.52271 11.2079 9.73891 10.8257 9.84831C10.385 9.97471 9.78829 10.0719 9.12271 10.0322C8.75353 10.0026 8.50901 9.89451 8.41704 10.1931C9.26045 10.5021 10.1536 10.3696 10.1536 10.3696C10.171 10.3679 10.1862 10.3805 10.188 10.3975C10.1893 10.4115 10.181 10.4258 10.1684 10.4311C10.1684 10.4311 9.48231 10.7497 8.39306 10.4128C8.42314 10.6682 8.67246 10.7828 8.79145 10.829C8.94139 10.8874 9.10528 10.9145 9.10528 10.9145C10.4552 11.1468 11.717 10.3748 12.0012 10.1804C12.0226 10.1661 12.0365 10.1804 12.0195 10.2057C12.003 10.2306 12.0021 10.2319 11.9916 10.2454C11.6438 10.6939 10.7089 11.2135 9.49277 11.213C8.96231 11.213 8.43229 11.026 8.23746 10.7388C7.9354 10.2933 8.22264 9.64302 8.72563 9.71058C8.72607 9.71058 8.8978 9.73019 8.94618 9.73542C9.57515 9.8056 10.4857 9.71711 11.2363 9.36885C11.9228 9.05023 12.1821 8.69935 12.1433 8.4156C12.1328 8.33889 12.0984 8.25912 12.0252 8.18328C11.9018 8.06254 11.7061 7.96839 11.3762 7.87599C11.2672 7.84548 11.1931 7.82586 11.1133 7.79971C10.9717 7.75307 10.9015 7.71559 10.8858 7.44883C10.8788 7.33246 10.8584 6.92622 10.8514 6.75841C10.8383 6.4642 10.803 6.06232 10.5537 5.89669C10.4887 5.85354 10.4164 5.83262 10.3405 5.8287C10.266 5.82521 10.229 5.83872 10.2141 5.8409C10.0716 5.86487 9.98748 5.94072 9.88287 6.02833C9.57166 6.28767 9.30927 6.32995 9.01723 6.31731C8.84288 6.3099 8.65764 6.28288 8.4458 6.27024C8.4044 6.26762 8.36299 6.26544 8.32202 6.26326C7.83297 6.23842 7.30818 6.66078 7.221 7.26054C7.09983 8.09567 7.70438 8.52718 7.87873 8.78042C7.90096 8.8105 7.92668 8.85321 7.92668 8.89375C7.92668 8.94213 7.8953 8.98049 7.86435 9.01318C7.36528 9.5262 7.20575 10.3413 7.39361 11.0208C7.41715 11.1058 7.44678 11.1869 7.48209 11.2645C7.92319 12.2957 9.29227 12.7756 10.6291 12.3389C10.8082 12.2805 10.9778 12.2081 11.1373 12.1244C11.4372 11.9775 11.6996 11.7753 11.9153 11.543C12.2701 11.1721 12.4811 10.7693 12.5631 10.2729C12.6032 10.007 12.5443 9.9041 12.4641 9.85485V9.85572ZM10.6635 8.14885C10.6618 8.25869 10.5951 8.34673 10.5149 8.34542C10.4347 8.34412 10.3715 8.25389 10.3732 8.14405C10.375 8.03421 10.4417 7.94616 10.5219 7.94747C10.6021 7.94878 10.6653 8.03901 10.6635 8.14885ZM10.2961 6.84951C10.4521 6.82423 10.5275 6.98594 10.5833 7.25269C10.6208 7.43227 10.6138 7.59703 10.572 7.69249C10.5001 7.68246 10.4216 7.6829 10.3397 7.69249C10.2773 7.61316 10.2215 7.48458 10.1902 7.33464C10.1344 7.06788 10.14 6.87479 10.2961 6.84951ZM9.77303 8.28353C9.80834 8.21161 9.91687 8.19243 10.0158 8.24125C10.1143 8.28963 10.1658 8.38727 10.1304 8.45919C10.0951 8.53111 9.98661 8.55028 9.88767 8.50147C9.78916 8.45308 9.73773 8.35545 9.77303 8.28353ZM9.16194 8.20289C9.14581 8.22774 9.11138 8.22338 9.03859 8.2151C8.90652 8.19984 8.77314 8.19112 8.5709 8.26348C8.5709 8.26348 8.49724 8.29312 8.46455 8.29312C8.45496 8.29312 8.44711 8.29007 8.44057 8.28397C8.43578 8.28004 8.42968 8.27176 8.42968 8.25738C8.42968 8.22774 8.4567 8.18502 8.50029 8.14667C8.55172 8.10221 8.63192 8.05426 8.77707 8.03116C8.97713 8.00762 9.12402 8.1009 9.15802 8.15582C9.17284 8.17936 9.16674 8.19505 9.16194 8.20246V8.20289ZM8.04611 7.92742C8.01996 7.92394 8.00862 7.9126 8.00557 7.89778C7.99555 7.85158 8.06616 7.77617 8.14069 7.72125C8.36691 7.55867 8.65982 7.5238 8.90521 7.62929C9.02551 7.68028 9.1384 7.77138 9.19376 7.86161C9.22035 7.90519 9.22558 7.93875 9.20814 7.95663C9.18112 7.98496 9.11269 7.9527 9.0011 7.90345C8.88952 7.85463 8.74481 7.79971 8.57003 7.81061C8.32245 7.82586 8.10757 7.9344 8.04567 7.92742H8.04611Z"
                                fill="white"></path>
                            <path class="svg_logo"
                                d="M9.74471 4.90041C9.76607 4.9052 9.77958 4.86815 9.7604 4.85769C9.47796 4.69903 9.04426 4.59137 8.73654 4.58919C8.72128 4.58919 8.713 4.57176 8.72172 4.55955C8.77489 4.48807 8.84769 4.41746 8.91437 4.36603C8.92919 4.35469 8.92048 4.33029 8.9013 4.33159C8.46325 4.35862 7.96374 4.56827 7.67693 4.76398C7.66298 4.77357 7.64468 4.76093 7.64816 4.74436C7.67039 4.6367 7.74101 4.49461 7.77762 4.42836C7.78634 4.41267 7.76934 4.39523 7.75321 4.40351C7.29162 4.63976 6.77686 5.05994 6.35842 5.54332C6.3436 5.56032 6.36539 5.58473 6.3837 5.57121C6.74504 5.30838 7.24062 5.06386 7.88964 4.90564C8.61667 4.72824 9.31668 4.80277 9.74427 4.90084L9.74471 4.90041Z"
                                fill="white"></path>
                            <path class="svg_logo"
                                d="M8.1838 3.40166C8.1838 3.40166 7.72439 2.86903 7.58578 2.8298C6.73235 2.59922 4.88904 3.87066 3.71219 5.55008C3.23578 6.2296 2.55408 7.43305 2.88011 8.05198C2.92021 8.1287 3.14773 8.32571 3.26978 8.42771C3.47377 8.13088 3.80764 7.91643 4.18685 7.84277C4.66936 6.54822 5.47442 5.35568 6.54013 4.53493C7.33124 3.87502 8.18424 3.4021 8.18424 3.4021L8.1838 3.40166Z"
                                fill="white"></path>
                            <path class="svg_logo_black"
                                d="M10.3365 7.68453C10.4177 7.67443 10.4953 7.67443 10.5675 7.68453C10.609 7.58837 10.6162 7.42209 10.5783 7.24149C10.5224 6.97269 10.4466 6.81012 10.2932 6.83563C10.1361 6.86112 10.1307 7.05556 10.1867 7.32435C10.2173 7.47522 10.2733 7.60484 10.3365 7.68453Z"
                                fill="#241C15"></path>
                            <path class="svg_logo_black"
                                d="M8.99759 7.89736C9.1095 7.94675 9.17813 7.97916 9.2052 7.95101C9.22145 7.93294 9.21601 7.89947 9.18894 7.85538C9.13479 7.76508 9.02106 7.67316 8.90193 7.62164C8.65645 7.5154 8.36223 7.55046 8.13841 7.71408C8.06441 7.76932 7.99221 7.8453 8.00304 7.89152C8.00484 7.90638 8.01748 7.91753 8.04455 7.92125C8.10592 7.92816 8.31895 7.81874 8.56623 7.80385C8.74132 7.79323 8.88568 7.84794 8.99759 7.89736Z"
                                fill="#241C15"></path>
                            <path class="svg_logo_black"
                                d="M8.7761 8.02577C8.62989 8.0486 8.55046 8.09694 8.49811 8.1421C8.45479 8.18088 8.42773 8.22338 8.42773 8.25365C8.42773 8.26799 8.43497 8.27596 8.43858 8.28022C8.4458 8.28606 8.45481 8.28926 8.46203 8.28926C8.49632 8.28926 8.56854 8.25949 8.56854 8.25949C8.7707 8.18672 8.90429 8.19521 9.03606 8.21062C9.10825 8.21912 9.14434 8.22338 9.16058 8.1984C9.16419 8.19097 9.16961 8.17556 9.15517 8.15166C9.12087 8.09589 8.97465 8.00239 8.77429 8.02629L8.7761 8.02577Z"
                                fill="#241C15"></path>
                            <path class="svg_logo_black"
                                d="M9.88495 8.49798C9.98422 8.54685 10.0925 8.52773 10.1286 8.45495C10.1629 8.3827 10.1124 8.28441 10.0131 8.23556C9.91383 8.18667 9.80551 8.20579 9.77121 8.27857C9.73511 8.35084 9.78748 8.44911 9.88495 8.49798Z"
                                fill="#241C15"></path>
                            <path class="svg_logo_black"
                                d="M10.5172 7.94094C10.4378 7.93934 10.371 8.02805 10.3692 8.13855C10.3674 8.24904 10.4306 8.33989 10.5118 8.34147C10.5912 8.34307 10.658 8.25436 10.6598 8.14386C10.6616 8.03337 10.5984 7.94252 10.5172 7.94094Z"
                                fill="#241C15"></path>
                            <path class="svg_logo_black"
                                d="M5.1422 9.9358C5.12235 9.91084 5.08807 9.91826 5.05738 9.9257C5.03572 9.93101 5.01042 9.93687 4.98334 9.93633C4.92378 9.93527 4.87504 9.90976 4.84616 9.86673C4.81006 9.81044 4.81187 9.72596 4.85338 9.62982C4.85699 9.61707 4.86423 9.60219 4.87145 9.58678C4.93643 9.44177 5.04294 9.19845 4.92201 8.96736C4.83176 8.79313 4.68373 8.68477 4.50504 8.66193C4.33537 8.64014 4.15848 8.70389 4.04657 8.82872C3.86968 9.0258 3.8408 9.29355 3.8769 9.38811C3.88773 9.42262 3.90758 9.4322 3.92202 9.43432C3.9509 9.43856 3.99785 9.41626 4.02493 9.34082C4.02673 9.33551 4.0303 9.32701 4.03391 9.31639C4.04474 9.27654 4.06823 9.20163 4.10613 9.14214C4.15126 9.06991 4.22344 9.02049 4.30647 9.00242C4.3913 8.98385 4.47977 9.00031 4.55197 9.04866C4.67651 9.13046 4.72342 9.28346 4.67108 9.43007C4.6422 9.5055 4.59891 9.65 4.60794 9.76899C4.62779 10.0097 4.77398 10.1058 4.90755 10.1164C5.0339 10.1212 5.12417 10.049 5.14763 9.99582C5.16027 9.96449 5.14942 9.94537 5.1422 9.93738V9.9358Z"
                                fill="#241C15"></path>
                            <path class="svg_logo_black"
                                d="M12.537 9.49626C12.5316 9.47874 12.5009 9.36185 12.4576 9.22056C12.4143 9.07924 12.3674 8.97992 12.3674 8.97992C12.5443 8.71588 12.5461 8.4795 12.5226 8.34562C12.4973 8.17989 12.4305 8.03804 12.2915 7.89196C12.1544 7.74588 11.871 7.59606 11.4739 7.48398C11.4288 7.47123 11.2789 7.42978 11.2663 7.42554C11.2645 7.41705 11.2555 6.93044 11.2465 6.72167C11.2393 6.5708 11.2266 6.33493 11.1544 6.10279C11.0678 5.78884 10.9161 5.51365 10.7302 5.33782C11.2483 4.79597 11.5713 4.19886 11.5713 3.68623C11.5695 2.70135 10.3692 2.40332 8.89095 3.02061C8.88914 3.02113 8.57868 3.15341 8.57688 3.15448C8.57507 3.1529 8.01007 2.59404 8.00285 2.5866C6.31518 1.105 1.04279 7.01224 2.72867 8.44709L3.09689 8.76158C3.00122 9.01125 2.9633 9.29706 2.99398 9.60462C3.03369 9.99933 3.23589 10.3781 3.5644 10.6703C3.87486 10.9481 4.28458 11.1234 4.67987 11.1234C5.33508 12.6469 6.83502 13.5819 8.59128 13.6345C10.4775 13.6909 12.0605 12.7994 12.723 11.1978C12.7663 11.0852 12.9504 10.5789 12.9504 10.1316C12.9504 9.68431 12.6977 9.49626 12.537 9.49626ZM4.82429 10.6958C4.76653 10.7059 4.70877 10.7096 4.6492 10.708C4.08063 10.6926 3.46511 10.1757 3.40554 9.56319C3.33695 8.88587 3.67992 8.36474 4.2882 8.24097C4.36221 8.2261 4.44883 8.2176 4.54269 8.22239C4.88383 8.24097 5.38564 8.50499 5.49936 9.25241C5.60224 9.91488 5.4416 10.589 4.82609 10.6952L4.82429 10.6958ZM4.18891 7.83617C3.80986 7.91055 3.47594 8.12676 3.27197 8.42531C3.15104 8.32279 2.92362 8.12463 2.88391 8.04707C2.55902 7.42394 3.23946 6.21221 3.71418 5.52801C4.89104 3.83605 6.73217 2.55632 7.58413 2.78846C7.72311 2.82776 8.18155 3.36432 8.18155 3.36432C8.18155 3.36432 7.32962 3.84083 6.53904 4.50486C5.47409 5.33092 4.67084 6.53203 4.18891 7.83512V7.83617ZM10.1653 10.4429C10.1761 10.4376 10.1869 10.4232 10.1833 10.4094C10.1833 10.3919 10.1671 10.3792 10.1508 10.3813C10.1508 10.3813 9.25735 10.5146 8.41441 10.2033C8.50827 9.90265 8.75196 10.011 9.12018 10.0413C9.78623 10.0811 10.3801 9.9834 10.8223 9.85589C11.2031 9.74539 11.7049 9.52761 12.093 9.21843C12.2248 9.50901 12.2717 9.82934 12.2717 9.82934C12.2717 9.82934 12.3728 9.81075 12.4576 9.86388C12.537 9.9138 12.5966 10.0174 12.5569 10.2846C12.4757 10.7845 12.2645 11.1903 11.9089 11.5633C11.6941 11.797 11.4324 12.001 11.1327 12.1486C10.9739 12.2331 10.8042 12.3059 10.6255 12.3648C9.28984 12.8048 7.92345 12.3213 7.48123 11.2833C7.44513 11.2052 7.41805 11.1234 7.39278 11.0379C7.20506 10.3537 7.36394 9.53292 7.86392 9.01656C7.8928 8.98363 7.92526 8.94486 7.92526 8.89598C7.92526 8.85508 7.89999 8.81204 7.87652 8.78176C7.70324 8.52676 7.09859 8.09223 7.22133 7.25182C7.30797 6.64782 7.83138 6.22233 8.32053 6.24782C8.36205 6.24994 8.40179 6.2526 8.44511 6.25471C8.6563 6.26747 8.84039 6.29456 9.01367 6.302C9.30608 6.31475 9.56782 6.27172 9.88009 6.01089C9.98478 5.9227 10.0696 5.84674 10.2104 5.8223C10.2267 5.81964 10.2627 5.80636 10.3368 5.81007C10.4126 5.81433 10.4847 5.83506 10.5497 5.87861C10.7988 6.04542 10.8331 6.45021 10.8475 6.74611C10.8548 6.91502 10.8746 7.32407 10.8819 7.44094C10.8981 7.70921 10.9667 7.74693 11.1093 7.7942C11.1887 7.82076 11.2627 7.84043 11.371 7.87124C11.7013 7.96474 11.8962 8.05929 12.019 8.18094C12.093 8.2569 12.1273 8.33767 12.1381 8.41469C12.176 8.70048 11.9179 9.05375 11.232 9.37461C10.483 9.72522 9.57324 9.81393 8.94329 9.74381C8.89636 9.7385 8.72305 9.71885 8.72305 9.71885C8.22126 9.65084 7.93428 10.3053 8.23752 10.7542C8.43066 11.0432 8.9595 11.2312 9.49017 11.2318C10.7049 11.2318 11.6381 10.709 11.9865 10.2575C11.9973 10.2442 11.9974 10.2426 12.0136 10.2177C12.0298 10.1916 12.0172 10.1773 11.9955 10.1922C11.7121 10.3877 10.4504 11.1648 9.10392 10.9311C9.10392 10.9311 8.93967 10.904 8.78985 10.845C8.67072 10.7983 8.42165 10.683 8.39096 10.4259C9.48118 10.7654 10.1653 10.4445 10.1653 10.4445V10.4429ZM6.36034 5.52056C6.7791 5.03395 7.2917 4.61057 7.75378 4.37311C7.77003 4.36514 7.78625 4.38214 7.77903 4.39807C7.74113 4.46501 7.67075 4.60791 7.64909 4.71628C7.64548 4.73329 7.66355 4.74604 7.67619 4.73595C7.96318 4.53884 8.46136 4.32795 8.89997 4.30086C8.91983 4.29981 8.92703 4.32424 8.91259 4.33539C8.84761 4.38692 8.77545 4.45812 8.7213 4.52984C8.71227 4.54205 8.71946 4.55957 8.7357 4.55957C9.04255 4.5617 9.47759 4.67006 9.75917 4.82997C9.77722 4.8406 9.76276 4.87832 9.74291 4.873C9.31512 4.77419 8.61657 4.69928 7.88916 4.87777C7.24116 5.03715 6.74659 5.28311 6.38559 5.54818C6.36754 5.56146 6.3459 5.53703 6.36034 5.52004V5.52056Z"
                                fill="#241C15"></path>
                        </svg>
                    </a>
                </li>
            </ul>
            <ul class="cell flex appStore flex--columns-2-medium flex--right">
                <li class="cell globalFooter__item--app">
                    <a href="https://mailchimp.app.link/9v17ZhaeNR">
                        <img src="{{ asset('assets') }}/icon-ios.svg" srcset="
                    https://eep.io/images/yzco4xsimv0y/1u3hha7FE0Q402e2qsMu6a/5e403548149c1618b64034284f692ff1/icon-ios.svg?w=160&amp;q=70 160w,
                    https://eep.io/images/yzco4xsimv0y/1u3hha7FE0Q402e2qsMu6a/5e403548149c1618b64034284f692ff1/icon-ios.svg?w=320&amp;q=70 320w
                  " sizes="(min-width: 37.5em) 320px, 160px" loading="lazy" alt="[KB] Download on the App Store"
                            width="135" height="40" />
                    </a>
                </li>
                <li class="cell globalFooter__item--app">
                    <a href="https://mailchimp.app.link/dxK9lDeHTR">
                        <img src="{{ asset('assets') }}/icon-android.svg" srcset="
                    https://eep.io/images/yzco4xsimv0y/64EpnI4RsQI66c2y2O60G2/4c34d7bc4dd7a4362c7e19a06c109e21/icon-android.svg?w=160&amp;q=70 160w,
                    https://eep.io/images/yzco4xsimv0y/64EpnI4RsQI66c2y2O60G2/4c34d7bc4dd7a4362c7e19a06c109e21/icon-android.svg?w=320&amp;q=70 320w
                  " sizes="(min-width: 37.5em) 320px, 160px" loading="lazy" alt="Get it on Google Play" width="135"
                            height="40" />
                    </a>
                </li>
            </ul>
            <ul class="cell socialMedia flex flex--center">
                <li class="globalFooter__item--social">
                    <a href="https://www.facebook.com/mailchimp/" aria-label="Facebook"
                        data-characterize-click="footer_social:facebook" data-tracking-event="share"
                        data-tracking-method="facebook">
                        <img src="{{ asset('assets') }}/icon-facebook.svg" srcset="
                    https://eep.io/images/yzco4xsimv0y/5daYAeMRSgIUUiSquGwsgI/1904e3f818575ec9625fa15dab193243/icon-facebook.svg?w=160&amp;q=70 160w,
                    https://eep.io/images/yzco4xsimv0y/5daYAeMRSgIUUiSquGwsgI/1904e3f818575ec9625fa15dab193243/icon-facebook.svg?w=320&amp;q=70 320w
                  " sizes="(min-width: 37.5em) 320px, 160px" loading="lazy" alt="Facebook" width="18" height="17" />
                    </a>
                </li>
                <li class="globalFooter__item--social">
                    <a href="https://twitter.com/Mailchimp" aria-label="Twitter"
                        data-characterize-click="footer_social:twitter" data-tracking-event="share"
                        data-tracking-method="twitter">
                        <picture>
                            <source sizes="(min-width: 37.5em) 320px, 160px" srcset="
                      https://eep.io/images/yzco4xsimv0y/3VjJhbqftKuok6gqYuUQKy/71a1cb07b8c5ec69308b67e2f106cecb/x.png?w=160&amp;fm=avif&amp;q=60 160w,
                      https://eep.io/images/yzco4xsimv0y/3VjJhbqftKuok6gqYuUQKy/71a1cb07b8c5ec69308b67e2f106cecb/x.png?w=320&amp;fm=avif&amp;q=60 320w
                    " type="image/avif" />
                            <source sizes="(min-width: 37.5em) 320px, 160px" srcset="
                      https://eep.io/images/yzco4xsimv0y/3VjJhbqftKuok6gqYuUQKy/71a1cb07b8c5ec69308b67e2f106cecb/x.png?w=160&amp;fm=webp&amp;q=70 160w,
                      https://eep.io/images/yzco4xsimv0y/3VjJhbqftKuok6gqYuUQKy/71a1cb07b8c5ec69308b67e2f106cecb/x.png?w=320&amp;fm=webp&amp;q=70 320w
                    " type="image/webp" />
                            <img src="{{ asset('assets') }}/x.png" srcset="
                      https://eep.io/images/yzco4xsimv0y/3VjJhbqftKuok6gqYuUQKy/71a1cb07b8c5ec69308b67e2f106cecb/x.png?w=160&amp;q=70 160w,
                      https://eep.io/images/yzco4xsimv0y/3VjJhbqftKuok6gqYuUQKy/71a1cb07b8c5ec69308b67e2f106cecb/x.png?w=320&amp;q=70 320w
                    " sizes="(min-width: 37.5em) 320px, 160px" loading="lazy" alt="X (formerly Twitter) Logo"
                                width="19" height="19" />
                        </picture>
                    </a>
                </li>
                <li class="globalFooter__item--social">
                    <a href="https://www.instagram.com/mailchimp/" aria-label="Instagram"
                        data-characterize-click="footer_social:instagram" data-tracking-event="share"
                        data-tracking-method="instagram">
                        <img src="{{ asset('assets') }}/icon-instagram.svg" srcset="
                    https://eep.io/images/yzco4xsimv0y/RlNw7Xkw8uKYAUoYU4aQw/ff3eada8736da9e63fbd9f929c6a677c/icon-instagram.svg?w=160&amp;q=70 160w,
                    https://eep.io/images/yzco4xsimv0y/RlNw7Xkw8uKYAUoYU4aQw/ff3eada8736da9e63fbd9f929c6a677c/icon-instagram.svg?w=320&amp;q=70 320w
                  " sizes="(min-width: 37.5em) 320px, 160px" loading="lazy" alt="Instagram" width="20" height="19" />
                    </a>
                </li>
                <li class="globalFooter__item--social">
                    <a href="https://www.linkedin.com/company/mailchimp" aria-label="LinkedIn"
                        data-characterize-click="footer_social:linkedin" data-tracking-event="share"
                        data-tracking-method="linkedin">
                        <img src="{{ asset('assets') }}/icon-linkedin.svg" srcset="
                    https://eep.io/images/yzco4xsimv0y/n5saFR4miW4U4ygUIQo0A/8f9c60cb133b80fda2fe9bdb825b4a5f/icon-linkedin.svg?w=160&amp;q=70 160w,
                    https://eep.io/images/yzco4xsimv0y/n5saFR4miW4U4ygUIQo0A/8f9c60cb133b80fda2fe9bdb825b4a5f/icon-linkedin.svg?w=320&amp;q=70 320w
                  " sizes="(min-width: 37.5em) 320px, 160px" loading="lazy" alt="LinkedIn" width="17" height="17" />
                    </a>
                </li>
                <li class="globalFooter__item--social">
                    <a href="https://www.youtube.com/user/Mailchimp" aria-label="YouTube"
                        data-characterize-click="footer_social:youtube" data-tracking-event="share"
                        data-tracking-method="youtube">
                        <img src="{{ asset('assets') }}/icon-youtube.svg" srcset="
                    https://eep.io/images/yzco4xsimv0y/2z1ra9BrgQewIqMQckMasg/58e3e8ec04acd60f0642f89dfbd71218/icon-youtube.svg?w=160&amp;q=70 160w,
                    https://eep.io/images/yzco4xsimv0y/2z1ra9BrgQewIqMQckMasg/58e3e8ec04acd60f0642f89dfbd71218/icon-youtube.svg?w=320&amp;q=70 320w
                  " sizes="(min-width: 37.5em) 320px, 160px" loading="lazy" alt="YouTube" width="21" height="15" />
                    </a>
                </li>
                <li class="globalFooter__item--social">
                    <a href="https://www.pinterest.com/mailchimp/" aria-label="Pinterest"
                        data-characterize-click="footer_social:pinterest" data-tracking-event="share"
                        data-tracking-method="pinterest">
                        <img src="{{ asset('assets') }}/pinterest-logo.svg" srcset="
                    https://eep.io/images/yzco4xsimv0y/7nawBEArBKpxRukK66OZtN/7bcc76998f783f3953b86214bfe9aa43/pinterest-logo.svg?w=160&amp;q=70 160w,
                    https://eep.io/images/yzco4xsimv0y/7nawBEArBKpxRukK66OZtN/7bcc76998f783f3953b86214bfe9aa43/pinterest-logo.svg?w=320&amp;q=70 320w
                  " sizes="(min-width: 37.5em) 320px, 160px" loading="lazy" alt="Pinterest" width="17" height="17" />
                    </a>
                </li>
            </ul>
            <div class="gdprBadge">
                <a href="https://mailchimp.com/gdpr/">
                    <img src="{{ asset('assets') }}/EN.svg" sizes="(min-width: 1600px) 1600px, 100vw" loading="lazy"
                        alt="GDPR Friendly Tools" width="102" height="40" />
                </a>
            </div>

            <div class="storefrontColophon flex globalFooter__colophon">
                <div class="margin--bottom-c3">
                    <div class="margin--right-c3 margin--bottom-c3 screen-reader-only">
                        <label for="languagePicker-596240883" class="formLabel formLabel--select">This page is now
                            available in other languages.</label>
                    </div>
                    <div class="formSelect formSelect--small-secondary">
                        <select name="languagePicker" id="languagePicker-596240883" data-behavior="languagePicker">
                            <option value="/switch-to-mailchimp/" data-locale="en" selected="selected">
                                English
                            </option>
                            <option value="/es/switch-to-mailchimp/" data-locale="es">
                                Español
                            </option>
                            <option value="/fr/switch-to-mailchimp/" data-locale="fr">
                                Français
                            </option>
                            <option value="/pt-br/switch-to-mailchimp/" data-locale="pt-br">
                                Português
                            </option>
                            <option value="/de/switch-to-mailchimp/" data-locale="de">
                                Deutsch
                            </option>
                            <option value="/it/switch-to-mailchimp/" data-locale="it">
                                Italiano
                            </option>
                        </select>
                    </div>
                </div>
                <div class="copy-legal">
                    <p>
                        ©2001-2024 All Rights Reserved. Mailchimp® is a registered
                        trademark of The Rocket Science Group. Apple and the Apple logo
                        are trademarks of Apple Inc. Mac App Store is a service mark of
                        Apple Inc. Google Play and the Google Play logo are trademarks
                        of Google Inc.
                        <a href="https://www.intuit.com/privacy/statement">Privacy</a> |
                        <a href="https://mailchimp.com/legal/terms/">Terms</a> |
                        <a href="https://mailchimp.com/legal/">Legal</a> |
                        <a href="https://mailchimp.com/legal/cookies/#optanon-toggle-display/">Cookie
                            Preferences</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets') }}/below-fold.7c1583c7.1.css" />

<div id="queued-scripts"></div>

<script type="application/json" id="algolia-dotcom_site_search-pageData">
{
    "pageId": "7lvzEiN83buVmlfKTt12hI-en",
    "url": "\/switch-to-mailchimp\/",
    "scope": [],
    "title": "Switch to Mailchimp - Get Powerful Marketing Tools",
    "description": "Based on competitor brands' publicly available data on worldwide numbers of customers in 2021\/2022. ",
    "tags": [],
    "entry_published_at": null,
    "reading_time": null,
    "thumbnail": null,
    "eyebrow": null,
    "headings": [
        "Explore the key features of Mailchimp",
        "How we compare",
        "Start with confidence with our personalized onboarding\u2014included with a Standard or Premium plan*",
        "FAQs",
        "Ready to make the switch?"
    ]
}
</script>

<!-- d05f3bcfba9dbb66bc6a0f69225b12bf -->
<script type="text/javascript" src="{{ asset('assets') }}/UFl8"></script>

<script src="{{ asset('assets') }}/otSDKStub.js" data-domain-script="41e15231-4a82-4457-b3aa-67f11aea3ee2"></script>
<iframe src="{{ asset('assets') }}/audio-devices.html" allow="microphone" style="display: none"></iframe><input
    type="file" id="" name="file" style="display: none" />
<div data-v-f3fb3dc8="">
    <div data-v-f3fb3dc8="" class="container_selected_area" style="cursor: crosshair"></div>
    <div data-v-f3fb3dc8="" class="area" style="left: 0px; top: 0px; width: 0px; height: 0px"></div>
</div>
<script type="text/javascript" src="{{ asset('assets') }}/saved_resource"></script>
<div id="onetrust-consent-sdk">
    <div class="onetrust-pc-dark-filter ot-hide ot-fade-in"></div>
    <div id="onetrust-banner-sdk" class="otFlat bottom ot-wo-title vertical-align-content" tabindex="0" role="region"
        aria-label="Cookie banner" style="bottom: 0px">
        <div role="alertdialog" aria-describedby="onetrust-policy-text" aria-label="Privacy">
            <div class="ot-sdk-container">
                <div class="ot-sdk-row">
                    <div id="onetrust-group-container" class="ot-sdk-eight ot-sdk-columns">
                        <div class="banner_logo"></div>
                        <div id="onetrust-policy">
                            <div id="onetrust-policy-text">
                                Our website stores cookies on your device and discloses
                                information in accordance with our Cookie Statement. Choose
                                “Customize Settings” to control cookies. We may collect
                                certain aggregate and anonymized data from your browser
                                independent of your cookie preferences.<a href="https://mailchimp.com/legal/cookies/"
                                    aria-label="More information about your privacy">Cookie Statement</a>
                            </div>
                        </div>
                    </div>
                    <div id="onetrust-button-group-parent" class="ot-sdk-three ot-sdk-columns">
                        <div id="onetrust-button-group">
                            <button id="onetrust-pc-btn-handler" class="cookie-setting-link">
                                Customize settings
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Close Button -->
            <div id="onetrust-close-btn-container">
                <button class="onetrust-close-btn-handler onetrust-close-btn-ui banner-close-button ot-close-icon"
                    style="
                background-image: url('https://cdn.cookielaw.org/logos/static/ot_close.svg');
              " aria-label="Close"></button>
            </div>
            <!-- Close Button END-->
        </div>
    </div>
    <div id="onetrust-pc-sdk" class="otPcPanel ot-hide ot-fade-in ot-addtl-vendors" lang="en"
        aria-label="Preference center" role="region">
        <div role="alertdialog" aria-modal="true" aria-describedby="ot-pc-desc" style="height: 100%"
            aria-label="How Mailchimp Uses Cookies">
            <!-- PC Header -->
            <div class="ot-pc-header">
                <div class="ot-pc-logo" role="img" aria-label="Company Logo">
                    <img alt="Company Logo"
                        src="{{ asset('assets') }}/intuit-mc-rewards-text-dark_resized_compressed.png" />
                </div>
                <button id="close-pc-btn-handler" class="ot-close-icon" aria-label="Close" style="
                background-image: url('https://cdn.cookielaw.org/logos/static/ot_close.svg');
              "></button>
            </div>
            <div id="ot-pc-content" class="ot-pc-scrollbar">
                <div class="ot-optout-signal ot-hide">
                    <div class="ot-optout-icon">
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <path class="ot-floating-button__svg-fill"
                                d="M14.588 0l.445.328c1.807 1.303 3.961 2.533 6.461 3.688 2.015.93 4.576 1.746 7.682 2.446 0 14.178-4.73 24.133-14.19 29.864l-.398.236C4.863 30.87 0 20.837 0 6.462c3.107-.7 5.668-1.516 7.682-2.446 2.709-1.251 5.01-2.59 6.906-4.016zm5.87 13.88a.75.75 0 00-.974.159l-5.475 6.625-3.005-2.997-.077-.067a.75.75 0 00-.983 1.13l4.172 4.16 6.525-7.895.06-.083a.75.75 0 00-.16-.973z"
                                fill="#FFF" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span></span>
                </div>
                <h2 id="ot-pc-title">How Mailchimp Uses Cookies</h2>
                <div id="ot-pc-desc">
                    Mailchimp Sites may request cookies to be set on your device. We
                    use cookies to let us know when you visit our Mailchimp Sites, to
                    understand how you interact with us, to enrich and personalize
                    your user experience, to enable social media functionality and to
                    customize your relationship with Mailchimp, including providing
                    you with more relevant advertising. Click on the different
                    category headings to find out more. You can also change your
                    cookie preferences at any time. Note that blocking some types of
                    cookies may impact your experience on our Mailchimp Sites and the
                    services we are able to offer. <br /><a href="https://cookiepedia.co.uk/giving-consent-to-cookies"
                        class="privacy-notice-link" rel="noopener" target="_blank"
                        aria-label="More information about your privacy, opens in a new tab">More information</a>
                </div>
                <button id="accept-recommended-btn-handler">Allow All</button>
                <section class="ot-sdk-row ot-cat-grp">
                    <h3 id="ot-category-title">Manage Consent Preferences</h3>
                    <div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="1">
                        <button ot-accordion="true" aria-expanded="false" aria-controls="ot-desc-id-1"
                            aria-labelledby="ot-header-id-1"></button><!-- Accordion header -->
                        <div class="ot-acc-hdr ot-always-active-group">
                            <div class="ot-plus-minus"><span></span><span></span></div>
                            <h4 class="ot-cat-header" id="ot-header-id-1">
                                Essential Website Cookies
                            </h4>
                            <div class="ot-always-active">Always Active</div>
                        </div>
                        <!-- accordion detail -->
                        <div class="ot-acc-grpcntr ot-acc-txt">
                            <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-1">
                                These cookies are strictly necessary to provide you with the
                                services and features available through our site. Because
                                these cookies are strictly necessary to deliver the site,
                                you cannot refuse them without impacting how the site
                                functions.
                            </p>
                            <div class="ot-hlst-cntr">
                                <button class="ot-link-btn category-host-list-handler"
                                    aria-label="Vendor Details button opens Vendor List menu" data-parent-id="1">
                                    View Cookies‎
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="2">
                        <button ot-accordion="true" aria-expanded="false" aria-controls="ot-desc-id-2"
                            aria-labelledby="ot-header-id-2"></button><!-- Accordion header -->
                        <div class="ot-acc-hdr">
                            <div class="ot-plus-minus"><span></span><span></span></div>
                            <h4 class="ot-cat-header" id="ot-header-id-2">
                                Performance and Functionality Cookies
                            </h4>
                            <div class="ot-tgl">
                                <input type="checkbox" name="ot-group-id-2" id="ot-group-id-2" aria-checked="true"
                                    role="switch" class="category-switch-handler" data-optanongroupid="2" checked=""
                                    aria-labelledby="ot-header-id-2" />
                                <label class="ot-switch" for="ot-group-id-2"><span class="ot-switch-nob"
                                        aria-checked="false" role="switch"
                                        aria-label="Performance and Functionality Cookies"></span>
                                    <span class="ot-label-txt">Performance and Functionality Cookies</span></label>
                            </div>
                        </div>
                        <!-- accordion detail -->
                        <div class="ot-acc-grpcntr ot-acc-txt">
                            <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-2">
                                These cookies are used to enhance the functionality of the
                                site. They help us to customize the site and application
                                (where applicable) for you in order to enhance your
                                experience. Although important to us, these cookies are
                                non-essential to the use of the site. However, without these
                                cookies, certain functionality may become unavailable.
                            </p>
                            <div class="ot-hlst-cntr">
                                <button class="ot-link-btn category-host-list-handler"
                                    aria-label="Vendor Details button opens Vendor List menu" data-parent-id="2">
                                    View Cookies‎
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="4">
                        <button ot-accordion="true" aria-expanded="false" aria-controls="ot-desc-id-4"
                            aria-labelledby="ot-header-id-4"></button><!-- Accordion header -->
                        <div class="ot-acc-hdr">
                            <div class="ot-plus-minus"><span></span><span></span></div>
                            <h4 class="ot-cat-header" id="ot-header-id-4">
                                Advertising (Targeting) Cookies
                            </h4>
                            <div class="ot-tgl">
                                <input type="checkbox" name="ot-group-id-4" id="ot-group-id-4" aria-checked="false"
                                    role="switch" class="category-switch-handler" data-optanongroupid="4"
                                    aria-labelledby="ot-header-id-4" />
                                <label class="ot-switch" for="ot-group-id-4"><span class="ot-switch-nob"
                                        aria-checked="false" role="switch"
                                        aria-label="Advertising (Targeting) Cookies"></span>
                                    <span class="ot-label-txt">Advertising (Targeting) Cookies</span></label>
                            </div>
                        </div>
                        <!-- accordion detail -->
                        <div class="ot-acc-grpcntr ot-acc-txt">
                            <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-4">
                                These cookies are used to make advertising messages more
                                relevant to you and your interests. They also perform
                                functions like preventing the same ad from continuously
                                reappearing, ensuring that ads are properly displayed, and
                                in some cases selecting advertisements that are based on
                                your interests.
                            </p>
                            <div class="ot-hlst-cntr">
                                <button class="ot-link-btn category-host-list-handler"
                                    aria-label="Vendor Details button opens Vendor List menu" data-parent-id="4">
                                    View Cookies‎
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="3">
                        <button ot-accordion="true" aria-expanded="false" aria-controls="ot-desc-id-3"
                            aria-labelledby="ot-header-id-3"></button><!-- Accordion header -->
                        <div class="ot-acc-hdr">
                            <div class="ot-plus-minus"><span></span><span></span></div>
                            <h4 class="ot-cat-header" id="ot-header-id-3">
                                Analytics and Customization Cookies
                            </h4>
                            <div class="ot-tgl">
                                <input type="checkbox" name="ot-group-id-3" id="ot-group-id-3" aria-checked="true"
                                    role="switch" class="category-switch-handler" data-optanongroupid="3" checked=""
                                    aria-labelledby="ot-header-id-3" />
                                <label class="ot-switch" for="ot-group-id-3"><span class="ot-switch-nob"
                                        aria-checked="false" role="switch"
                                        aria-label="Analytics and Customization Cookies"></span>
                                    <span class="ot-label-txt">Analytics and Customization Cookies</span></label>
                            </div>
                        </div>
                        <!-- accordion detail -->
                        <div class="ot-acc-grpcntr ot-acc-txt">
                            <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-3">
                                These cookies collect information to help us understand how
                                the site is being used or how effective our marketing
                                campaigns are. They help us to know which pages are the most
                                and least popular and to see how visitors move around the
                                site. These cookies may be set by us or by third-party
                                providers whose services we have added to our pages.
                            </p>
                            <div class="ot-hlst-cntr">
                                <button class="ot-link-btn category-host-list-handler"
                                    aria-label="Vendor Details button opens Vendor List menu" data-parent-id="3">
                                    View Cookies‎
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Non Accordion Group -->
                    <!-- Accordion Group section starts -->
                    <!-- Accordion Group section ends -->
                </section>
            </div>
            <section id="ot-pc-lst" class="ot-hide ot-pc-scrollbar">
                <div id="ot-pc-hdr">
                    <div id="ot-lst-title">
                        <button class="ot-link-btn back-btn-handler" aria-label="Back">
                            <svg id="ot-back-arw" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 444.531 444.531"
                                xml:space="preserve">
                                <title>Back Button</title>
                                <g>
                                    <path fill="#656565" d="M213.13,222.409L351.88,83.653c7.05-7.043,10.567-15.657,10.567-25.841c0-10.183-3.518-18.793-10.567-25.835
          l-21.409-21.416C323.432,3.521,314.817,0,304.637,0s-18.791,3.521-25.841,10.561L92.649,196.425
          c-7.044,7.043-10.566,15.656-10.566,25.841s3.521,18.791,10.566,25.837l186.146,185.864c7.05,7.043,15.66,10.564,25.841,10.564
          s18.795-3.521,25.834-10.564l21.409-21.412c7.05-7.039,10.567-15.604,10.567-25.697c0-10.085-3.518-18.746-10.567-25.978
          L213.13,222.409z"></path>
                                </g>
                            </svg>
                        </button>
                        <h3>Vendors List</h3>
                    </div>
                    <div class="ot-lst-subhdr">
                        <div class="ot-search-cntr">
                            <p role="status" class="ot-scrn-rdr"></p>
                            <input id="vendor-search-handler" type="text" name="vendor-search-handler"
                                placeholder="Search…" aria-label="Vendor list search" />
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 -30 110 110" aria-hidden="true">
                                <title>Search Icon</title>
                                <path fill="#2e3644" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
            s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
            c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
            s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                            </svg>
                        </div>
                        <div class="ot-fltr-cntr">
                            <button id="filter-btn-handler" aria-label="Filter" aria-haspopup="true">
                                <svg role="presentation" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 402.577 402.577" xml:space="preserve">
                                    <title>Filter Icon</title>
                                    <g>
                                        <path fill="#fff" d="M400.858,11.427c-3.241-7.421-8.85-11.132-16.854-11.136H18.564c-7.993,0-13.61,3.715-16.846,11.136
      c-3.234,7.801-1.903,14.467,3.999,19.985l140.757,140.753v138.755c0,4.955,1.809,9.232,5.424,12.854l73.085,73.083
      c3.429,3.614,7.71,5.428,12.851,5.428c2.282,0,4.66-0.479,7.135-1.43c7.426-3.238,11.14-8.851,11.14-16.845V172.166L396.861,31.413
      C402.765,25.895,404.093,19.231,400.858,11.427z"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div id="ot-anchor"></div>
                        <section id="ot-fltr-modal">
                            <div id="ot-fltr-cnt">
                                <button id="clear-filters-handler">Clear</button>
                                <div class="ot-fltr-scrlcnt ot-pc-scrollbar">
                                    <div class="ot-fltr-opts">
                                        <div class="ot-fltr-opt">
                                            <div class="ot-chkbox">
                                                <input id="chkbox-id" type="checkbox" aria-checked="false"
                                                    class="category-filter-handler" />
                                                <label for="chkbox-id"><span class="ot-label-txt">checkbox
                                                        label</span></label>
                                                <span class="ot-label-status">label</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ot-fltr-btns">
                                        <button id="filter-apply-handler">Apply</button>
                                        <button id="filter-cancel-handler">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <section id="ot-lst-cnt" class="ot-pc-scrollbar">
                    <div id="ot-sel-blk">
                        <div class="ot-sel-all">
                            <div class="ot-sel-all-hdr">
                                <span class="ot-consent-hdr">Consent</span>
                                <span class="ot-li-hdr">Leg.Interest</span>
                            </div>
                            <div class="ot-sel-all-chkbox">
                                <div class="ot-chkbox" id="ot-selall-hostcntr">
                                    <input id="select-all-hosts-groups-handler" type="checkbox" aria-checked="false" />
                                    <label for="select-all-hosts-groups-handler"><span class="ot-label-txt">checkbox
                                            label</span></label>
                                    <span class="ot-label-status">label</span>
                                </div>
                                <div class="ot-chkbox" id="ot-selall-vencntr">
                                    <input id="select-all-vendor-groups-handler" type="checkbox" aria-checked="false" />
                                    <label for="select-all-vendor-groups-handler"><span class="ot-label-txt">checkbox
                                            label</span></label>
                                    <span class="ot-label-status">label</span>
                                </div>
                                <div class="ot-chkbox" id="ot-selall-licntr">
                                    <input id="select-all-vendor-leg-handler" type="checkbox" aria-checked="false" />
                                    <label for="select-all-vendor-leg-handler"><span class="ot-label-txt">checkbox
                                            label</span></label>
                                    <span class="ot-label-status">label</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ot-sdk-row">
                        <div class="ot-sdk-column">
                            <ul id="ot-host-lst"></ul>
                        </div>
                    </div>
                </section>
            </section>
            <!-- Footer buttons and logo -->
            <div class="ot-pc-footer">
                <div class="ot-btn-container">
                    <button class="save-preference-btn-handler onetrust-close-btn-handler">
                        Confirm My Choices
                    </button>
                </div>
                <div class="ot-pc-footer-logo">
                    <a href="https://www.onetrust.com/products/cookie-consent/" target="_blank"
                        rel="noopener noreferrer" aria-label="Powered by OneTrust Opens in a new Tab"><img
                            alt="Powered by Onetrust" src="{{ asset('assets') }}/powered_by_logo.svg"
                            title="Powered by OneTrust Opens in a new Tab" /></a>
                </div>
            </div>
        </div>
    </div>
</div>