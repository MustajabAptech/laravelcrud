<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0px
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-sm {
            border-radius: 0.125rem
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #FF2D20
        }

        .object-cover {
            object-fit: cover
        }

        .object-top {
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-semibold {
            font-weight: 600
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8)
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
            }
        }
    </style>
</head>

<body>
    <h1>Welcome to Laravel Assignment</h1>
    <a href="{{ url('cv') }}">Card</a>
    <a href="{{ url('/') }}">Home</a>
    <h1>Card </h1>
    @php
        $products = [
            // [
            //     'id' => 1,
            //     'name' => 'Product 1',
            //     'price' => 19.99,
            //     'description' => 'Description for product 1',
            //     'category' => 'Category A',
            //     'img' =>
            //         'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUTExMWFhUXFRcVFxUXGBgVFhcVFxUXFhUVFxUYHSggGBolHRcVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy0lICUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKMBNgMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAECBAUGBwj/xAA/EAABAwICBwYEBQIFBAMAAAABAAIRAyEEMQUSQVFhcYEGE5GhwfAUIrHRMkJS4fEHgjNDU2LSFZKishYjY//EABoBAAMBAQEBAAAAAAAAAAAAAAABAgMEBQb/xAAxEQACAgIABQIEBAYDAAAAAAAAAQIRAxIEEyExQQVRFEKRoSJSgdFhcbHB8PEVI1P/2gAMAwEAAhEDEQA/APNQE8KUJ4X0J49iFMpwxSY8jIqZqSgVkdROGqbHqQIQKyACI0KTSNyI2NyYiLQrFJ42jzUABuUggkstr8EsygtCI0J0JsKGcvFEahtCMwJkhGuMRsRWUyoUzCLrE3JlAiYCI0KDAjMCBE2NR2BDYEdgUsAjAjMCiwI7GqGxokxq1tHaONZp1B8zb8CDs4HNZzAtzs9iBTcSd3TisMsmo2jfEk5UzX0Bh3UmuBs6bjdy2JtK09dkEXFxzWhh8e12Sr4kyvP2e9s9HVaarsZmDo6gy+Yi59ArVMJFidrVTdkRjXQMDF0zHTmoOClTCkstUwrDQqtJyvMYVmzSIUKYUGtUgVBoQ1BtuppEKIKAM7G13Tq5BUltYvD64zuFRGE1T8+XBaxkqMZxdlQBMtang2iZE7uCdPmIOWz5Y1UoRdVLVXtnl2DhOAp6qkGoCyACmAnAUwECEAptCQCIAgQmhEaEmtRGtTEJoRGtSa1Ea1MQ7QjNCi0IjQgRJoRWhRaEZoQSSaEZjVFgWrorRFWvrd2AdUTcgTwE7VMpKKtjUW3SKTGrS0bo6pW1hTAcWiSJAMcAc1bwmgHODg46r2uDdU3i0mei7hlYNaAABAiwiy5c3E69I9Tpw8Pt1l0MXAdkwaR7wkVJsQZAG6I92V+h2XotdJ13AbHER5AFWm4oqz8XI4rgllyPyd0cWJeATNC4YAjuxfeSSORJkKvgdH0GF0Q6+brwNwGXVHqYgAHWNis2pVGYEJJzfljlovCLuJ1DUDmQ2JDshrZQfqnLZWWCc1oYEm6clSFGVsM2mk2mrLWIopLPY01M91NNqq+aM5Ifw4H4vFGwagKIWjRdZU3BoyClScZSfUcehoJiVEPQnuKg0sm+ooB6E96gaidE2WtZSgEQVTFVSbVRQ7LshMqnfJJUOz5n1E2ovQ2djKRdTLXS0fjBk632C3MT2LwlRgaGahG1ufWc17D4qCPKWCbPINROGLtu0/ZvDYWlrBzi8kBoJ8TCxNC1BTcXauscuS1jkUo7IzcGnTMluHcQTBgZ8Ewauoxdcu/C0AO2RbqVXOiWmnMw/YJBkIWT3E4+xhBqm1qO3CPJgNM8kRuEfrauqdbdtWlogA0IjQt7BdlK1QgBzQcyDIItyVPSGh6tAxUYRnBzBjiFKyRbpMbhJK6KLQiNak1qK1qsgTWorWpNYjNYmIi1qK1qdrURrUhEmNXZ9iKDmOc42BAEGRcG3quUwpGsJyXQYHTLmuEj5bc4+65+IUpRcUb4HGMlJnVYrBNNTWaSCc4Npkkkj3kFabggR+Iqvg6zXgkG0K/RIc2xXlSbXQ9SKi+pmFsHhsPBGaU+Lp6x1Jt5pqdMSGjxKd9BV1B4prS0lxsFi97fOUfSeNJGpq7c/FUaZW8I0upz5JW+hepOW3hgBESPusvR+H1itkwAssj8G2NeSyHCEz6ioVKwKiw8Vlqa7Gg18KlWxU2O+ydkyAclYrYJrv2sjou4dWugMgEAzfcitYZ4KNWjqiydtaBdAwrnKBcpNqgqT2SpGVnJoRCxSZT3pioBCeFdY0KvXhqLHRFrUyCcYAkimK0ebvo4hl6brf7ir2je0D2/LWERbW2FYrO0D4gtBVXF6RL2kFoXpcpy6SR5/MS6pm12qpU8Q0PDsgYj7dFxBbBhW4dvKh3S6McNFVmE57OwTKzhkUbDVtUyfm4FN3KkKSukRbNXCac1XAlgjKOHNT0hpVtSo2oGZRO+FkikjMbwUcuN2Vu6o6bD9oYuWG/4Y2dVsUavxVInW1XapaJgwd5XFCsYjYtTRGMeHBo8hnwgZrGeFVaNYZetMFpDsvWpAFo1xF4uRHDaqFfAVKerrtI1hInavUMITqguaRwOYTYvD06lnsDhBHjnyWceLkukkaS4WLVpnEaC7OOrFpcdRhvrWJI4CbdVr4zsQ9oc6nUDmgEtBBDzwtaeP0W1gaApfKPwjfsG5bFLFMLbO8lGTicm1x7FY+HhrUu5zGF0bTpMa19NveATMAm97nali9HUX/M4NBsTFjyVzS9UOJ1Lu2jjwWTSwFaoCN17mOnFOLb/ABN0TJJfhSsVHRFCpIYXCDz8CtPC9m6erDnv2xcQPJQ0VSdSBaRtlW8biHiDuUzyTukyoQhVyRpYbBMpgATAAHHdKsU6QbJBXOv7QiDrOAAEk7hlJ4WRaXaBh1mAyRE9RIuueUX5ZuskF2NoVASFGriWTG70WOzHynbT1zYxKeldw5l9gOlHB5kQIVOkFOu0tcWkX8kzbLddEc76uzVwJjbCuVXSFk06iuYWrFzkFlJeTaMvAS+1WaTLIgqtePNRrVQBPSFnZrVCOIDTmnqaRAWZinkqiXlUoJkPI0bzcYHZmJQ3VBNjKx21FrUyCANYZcihxoalZZw9SVoNesekIm/K6ariiocbLUqNGrUCY1Z2rEq4klCdiCnoLmGq7SBCqVsUXLPdWS71VoQ52HL0lX1klVE2efjDnckcPwXVnRlMibjrP1UBopsTM+H1XZz0cnIZy3cJdwutpaLHDqFNmjjrfhB8Ec9ByGcn8E6J1TB2xZN8NwXe4bRrtrYU62GgyWyp+JK+HOCZg3HIK7Q0I9xgFn/cF19QMdEtHUKwG0iNVzWg53A8ZUviX4Q1w68s5M9m3t/E5o5XutjsvgTTJJaCZs7O3DdmVsh9PVIgEcFCli2CwWcs05Jo0jijFpm13gi6C2kFRbiZ2ogrHYubVnTsixUot3IdOi3a2Apio6N6rVsS7cmrE2h9IYBn4hYrMfhTOZnerFSs5yydMaWbQbLjc2aN5WibirbMpOLNiri20wA9wneelvMeK8y7UdtCKz2gOLG2BuNUjN4IN7xEgi2V1ndqu0XfVmBoMhouDZroMgkXOw2N4ELlSbwQXP2kEgluyA42JtcriyZ76LsS7ka+K0xVfTAZUBv/AIYGs4M2azhNrmwbuteBW+Kr0wfn1gYfA1hYXJvGQWVQIBJFOC0tGs4gt+YmAWx+IiTA/SdyNU7yo4tI/BIOs5ogt1nZmARBgNGezNZdR6He6K0xWoRTqgtDmhwc4y4AgEFzi2HGAbax27lrYPtd8zRqPGtlAyIMFtiZdwjaF5RjHVnkOIdLmz3cP1WNGcbhMW5TsV3C6ae0sZUGuxpGqC4gQ06zmh1jdwMk7ytY5ZR6eCXja7HtvxYqAGPEEHzTFy53RfarDVWgfgfFmuMNsQILyIBNzutmuqwGH7ym2o27XCRt6GLSu+OSDXRipsFSKvU6hiyf4AxOSmyiQhtMtJorsxOqrDcfOfgpOwspNwSluJSUkSZWBzHoo/ChxsjswgCOKI5Kb9iqvuZdbCEKLAQtV9FC7hNSE4ldr7Js1bGHS+HCVjooupoL6B2LVFEbkajTaM0bUGtmEcG7cm+HcNi6J2IGwQmqPa4X+iW7Hy17nPdyUlslw3BJPYWpy7GORWA7lr1NHxcZIXwyvdMjVoHRxMC4RDVBvqotDCSnrUdijpZfWgbcVCP8Y2EDuExpncikFsq1iCZyQ3OEZq66lOxD+F4K00ZtMz+9OSg1q03YYlSbgSr3RDgyeAotABN94Wlh3NOTQAOH1VXD4U7VdpU4ssJuzeCaDQ0C1lTrCFbdTUTQBUJmjVmRWC86/qZjHsDaeu3UdePl7wO+aLR+EWuvWfgmcV4P/VjA1aeJJ70VgWk6zWgGm2TDCWk3Ai9ks07ikjLlu+pw5rEvdZxsSQcrD8TuVlPC1HOnVZrjbNiRI1mh5Frbdn1r4ZwB1y0OId8od/hxDgS5rSDYlpGyxkEKLq7BIAcRfV+fLKJt80ARs37FhRrr7GpicQ6oxga4hjAe7a8CWktmpAAuS4H5s7AmNj4HF4cPD6jqj9Zjpa1oadcyxl5IBaL6zeFswsp79UkDWmzgNkxaeIuiNqiZ/ENoNiSTJvzgylQqLWGxL6Z1gbiQbS75gRBkHPccxyVh3/2F/wCFusS4iSN8AknOT9Vj065aRqkg5OI2mTaRs4KXxB5nZckARciNtvqk4icDb0XqsdAz/utlMbpkD2V9M6FxOvhqVUjVL6bHlu4uaCfMr5iwBJAAIlzgLAnWDgGltsz53X0loUB1CjqtLG92yGluoWgNFi3ZyWmLq2JOmW8VW1rBAa1HdThO2nK6k0kS02wQaphvH6oraKmKCTkhqLA3ThF7kp9SEWh0yDiSpNoFFFSydrlNsukDfThQLVaLbKOoEkwcSrqp9RGLE0J2KiJpJ9VTaSpuEpWVRWdQlOjhqSLCjlx2nwjsqni1/wDxRG6ZwxyrM6mPqvLadLn5oraG6fNeKvU8i8L7/uZOR6t/1XDBv+Mzodb/ANZVGr2hw4/M48mn1heeMwx2T4/upjCu3T/dCiXqmXxX+fqJyO2qdqqQya484H3VKt2w/TSb1ef+K5luBqHIf+RKm3QzznPgfusn6jmfef2QbGpW7ZV9jaY6OPqh0+1eIJu5oHBo9VWZoMcfBHp6APAdFnLj5/nZOwer2qqD8/k30CrP7YYnY4Dm0H0Rx2fP6vIIrOzo/V5LL4yS+eX1YWypT7W4wn/F/wDBv/FW6PazFbS4/wBjB6Kw3QP/AOh8EanoRgze4qXx0vzP6sLkKl2txO1k8wB9Fcodq622iEJmjKQ2n31RhhmDJT8flXaT+rHtIuUO0s50j0I+68p/q7psVa4YwZUg1xyvrEwf1QPBel6jR/P7LJqdmcE57qjsOxznO1iTe+0ict9tt10YfVZJ/wDa7X6DU/c8S0f2er4hlSqxrdSm0l7i9rWtABMXO4TuUcVoyrSs5j2tmD3lMthwv+B2ZAi/HivddGaGwuGBFGi1kiHEXLhuc43I5ommMBSxVI0qslhIJhxBkGRB2LX/AJiO/b8P3G8p88VHyHaxl0iMhA4iOWW/aoF8kySZizctbd5Zhevs7Cso1KD8PVLe7eHVC+C9wDphj2gFnyl7SMjaRtWZ/VDQdEGhXptFN9Ss2i8gWcHAkPLbfMIN8zPJdMPU8M8ihHz9ilkTdHDaE0bUrPFNjQdZri1jnNbIBMlsnPO4v0VjGaHqUH6lWmWkjWblOrMZibbLG3VeodmuyFDCPLjFR1tVzqbQ5jrhxaZsC3VtE2N7wOmqMa8QW6w3ESM5y1TtA8Fx5fWorJUFcfoZvKfPpfTpOFtuy8GLn5szMTsI3r2XsFpBz8Iw03usXNILsiDYReLRbcud0j/TucbTLKdWph3tf3zi86zHmSH65+ZxJ1dhyvMldT2c7LtwLXspmo4OMy9wkWyENA37EuN4/FPEuW3ff/Y3NUdAzHVRmfGPVGGlKg3eSzjRd+l3jPohVMO7aHLy1xuf/wBJfV/uTzDV/wCrVP1gdB6oZ0y//U8mrHqYU7CR0CA/Bk7T1+ipcXlffJL6sfNN3/rj/wBc9GqP/wAicM79PsueqYR2xVH4OpsHgtocVlXbI/qxc07FvagbWeB9CFZo9qKBz1m8xI8iuCfTrDZPMEoZ7z9Dhyn6FdeP1LiF8yf86/tQ1kPUaGmsO7Kqz+46v/tCvU6gN2kEbwZHkvIGmobAO6SrGHw+ImWtcDvPynxXVD1WXzRX1r9y1kPWioFcHhK+Mb/mOHAku8iCFp0NM4kfiLHc238iFvH1bD8yaHzEdSFIFYNPtAfzUvAn6EIo7Qt203eP7LdepcM/m/qPmR9zaSWSNPs/Q/y+6Sr4/hvzoN4+5xQ0RU/T5s9FNujXj8p8R91ujFBOcUOC+ReRkamK3AO/T5j7ojcG/wDT9PutMVmqfxAS3FqZowzx+U+Sm2k/cfJXDimpfFNS2CirquGwp/n3Kz37U4rNS2FRXBfuKXeO3HwVoVtyk3EcAjZBRROIcNn1UfjVqNxfRTGK9ylaDV+5kfFOOQJ5AlEYapypv8CFrDFFM/EneffRFJi0/iUW4OsfyRzP2Vinox35nDoJ8ynfiHcPfqszSOkKrRZoN+CaxphrFdzZGAaM78z9kz2sZc6jecepXA47SOMdIDmtE7LmN17eSxa+BqvMvLnHiT9Ml1Q4VeWieZFdkeiYztThKUzXZItDfmM8mheb/wBRO0vxjsOykx+pSq965xgFxEAaondrZxmEw0Q/9Kk3Rj/0Lswwx4pbd2LnUztMP2/oPuQ9h3OaDHVpKtM7YYZ3+bH9rvsuGbgHj8iK3Av/ANNYvBi8C5sjvqem6DjArN8QrLcQDlUB6j0XAU9GuP8AlHwCtU9E1djHjospYYLsw5kjuxrbHFPLt8+K4+jgcSMi8df3WlhziW5vPWCsZQS8opZPdG6S7goO1twVNlV8Xc1TZU/3DxPqoL2DEcAhOpg7vD9lIO4hPKdCBjDjgkKI3DwUu8UTV9/sp1Yiepx8kveSA+uh/EcfqnqFotEcfJQMbyqzqo3hRNYfqCaiK0WTCYkKsaw3+ai6sN/mnqFos6/uySqE8R4lOnoKyq6sDl78CmFTjlwnwVPvCd31/lLvff7I1NLNHvhv8/3SbUG/qFRDpH7KLanu6WobGi17UQVQP2usw1efP+VJtfn75pajs0hXT97t9+azxUPuFLvOHvxS1FsaDcQN46IrMVy98lmh/HwT95y8+m1KkNSNVtef2T96OvL6rKNUbY8fRIYjK9uh85S1Hsawrj3CkMSsxmJnbf31RRVO362SaCzT7/enLmnMBZbak7fO/qkyuRsHW3hKVMLNM0qf6QVD4aif8seH7qqMQpGqD/EItoOhZGDo/wCmFIYamPy+SrNr8eil8SAjZiqJa7hmwBSFDcB5Ku3EqfflTbHURVGOGyyCeSN39/38k3eg7J8ChSJaRWceaA8q+4MjLbyE7FE4VpyMK1NCcSgXKLTy98FfOB5Hr6FAdgyNipTQtWADhuUBU5o5wxQnUXDimpIlxZDvz0S747woOaeCCCTNv3VXZLiw7sQeB98lB1c7Wj30Qr7h4ob2nNUhdQhxP+0HwQXYwfpPgo5byka0fl+ipE0xzWHFRFVm7rCRrDcfFR71u7zVA0wvejj5pKArDd5pkgSZRbiuX08kjiAdv0WaK3H0UmuHu600NLL7q8bfJRZX5qmSNw99U5rxaD73I1HZqNrjn75JB4/nIdYWYMVBuY6eqIzEE/zv6qeWBp95x5b0qeI2Z8wZjqs1z3bLcP4PombXnMHpkeuX8paBZqGtut75KXfGInLn9RmsxtQm3vygI7XbLeJClxoZbFWdnlc9JyU+82/sqTapGYHvrKmK4P2vlyS1AutqbgfL7IofawPkfMFZuu3dPMQiNDYmxnl4JOIzRNbfPKw+phMXDht5qi14OYA5z0lMHxZsTw+4FuqWo0y82v8AyBHrfyRBVMXb0yP281SFQ2kR5qfK+zZbLjn4pUFlwExa3MGfIone7ysziMuHrdSFXj4zbkUnEVmsKo3n6ooq+9qyRU93Sp1ffvJQ4BZr96nbUG/0+qyxUPuPJEDifYhTqOzSa/b74J+89hZore9h8lIVt/ojULNEVuJRm1yNvqshu8Ez4fVE7w7iPVJxCzV70HMA+ClLCsoYhJ2ItbPfAN0tWNSNF2Hacj09Dw4oT8EDmB0O1VW4sZSJ3A+hCMzEnfPRH4kPZAauCGyQenqq1TDHd72rRFcHPzUpb7uqU2iXTMIt97ue5QfT9+5W53TCI9hAr4IbD75K1lQnH2MMh2f7ILuUrVrYN4JNjaLW5kz0VSpSvlflBIG8rdTTJaKYdwSRTSBt6hJVaJo5VlQ+wEWiZEnf9kkl2SKZJjjPRWKYuUkllIRXrOMi5yG1JxNkkla7FBgbHl6qbR8p5nO6ZJZskk8REcE+YE7/AEKSSXgPAdjrIjT9EklmxocmBbmpveY8EkkmDCaxGXBRbUJ1rmwHD6JJJUMlhDrAk5gkdAYE70WkflSSUy7sCbXHVnhPsJwb9EklIyT7T19FKmbeCSSnwSNReZhEq2ySSQ+4yLHn0+inrXjqkkhgwgFuvPenpmQSd/uySSgQQmw5E+aQcfEBJJIZNpT1DEcwN/1SSS8h5DloiUAOMxzSSSQ2GBt4eicOMdR5wkkgAoddNVpDdw9hJJSu40Z9eg2cvMhJJJbpuiW2f//Z',
            // ],
            // [
            //     'id' => 2,
            //     'name' => 'Product 2',
            //     'price' => 29.99,
            //     'description' => 'Description for product 2',
            //     'category' => 'Category B',
            //     'img' =>
            //         'data:image/jpeg;base64,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',
            // ],
            // [
            //     'id' => 3,
            //     'name' => 'Product 3',
            //     'price' => 39.99,
            //     'description' => 'Description for product 3',
            //     'category' => 'Category A',
            //     'img' =>
            //         'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhMVFhUXFRUVEhcYFxgXFxUXFRUXFhUWFRUYHSggGBolGxgVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy0lHR8tLS0tLS0rLS0tLi0tLS0tKy0tLS0tLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKoBKQMBEQACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAACAwABBAUGB//EAEEQAAEDAQUGAggFAwMDBQEAAAEAAhEDBBIhMVEFQWFxgZGh0RMiMlKxweHwBhRCYpIVgvFDcqIzstIjU3Ojwgf/xAAbAQEBAAMBAQEAAAAAAAAAAAAAAQIDBAUGB//EADYRAAICAQMCBAMIAgEEAwAAAAABAhEDBBIhMUEFE1FhInGhMoGRscHR4fAUIzNDUmLxFSRC/9oADAMBAAIRAxEAPwD4agIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgIgGXVsBd1AS6gJdQEuoCQgLhASEA6yU2l4DsjI5Eghp7wsJ8K0bMUFOai+5VSiWktcIIz+9FkmmrRjKLjJxfVA3VTEq6lEKIQpAgCLVCFQoUkICwEBcKWWmSFOC0yXVODJJlwFC0S7wUstFloQUgbnAJYou5wCWWiXeASxRYZwUsqQRaFLZeCgzgliirvBWxRI4ICjyQFXeCEoLDRTky4IQEHBTo0V5I6AkJyTgALoOctAVKAuUBJQEQFoCIA2PukO0IPbFYtWZRltaa7H0Chsqz1mgPGIwGcgTIukQQM8Ms14M9TnxSe3ofXy0+lz15keSVfwTRd7LnNM7nT4OknuFYeK5F9pJnLm8I00n8Da+qM7v/58SPVr/wD165fq5+CzXjUe8fqcz8EXbJ9P5As34XpWWux9pr03UbrxUDmkE3mOaABJJIJBkYggELoh4h50WscXZpn4X5DU8kk4/Uz/AIh/BzaADqFR1Zjw19J0Nuua7deketG6Fuw61NVk4kc0vD5y5wq0eYq2Wo32mPHNpHjC61OL6M45Ypx+1F/gIJCpgMo0i4hoGJwA13CFCpW6QN3igLucULyUKZ1ULTCazisWZIsUhqpZaLu8VCkuBLLRIQFQUBcFQpJKcC2CqSwmkqMqDulY2ZguCpGLghUxKvHRWhySUoFh3BRothuaDuUujKrF+hV3E2iguk5C4UBLqWC7iWC/Rqgno0BAxCF3EZSXVAeyoViyODROOeAXkSgnJ2fRym444teiNdn2uWQcccpwgfQA9eGKwnpY5OKNK1koJtvqeqsW1A5oOGjscDBiV4+bTShNqj1MOeM4J2kZfxDYG1WOGGIPfMfMcyFlo80oSMtRBTx0zyOxrbWoVLhDnsPtNGJjUanPBexnxwyxu6fqedpcuXFPbVx/vQ9fT9ZrSBmMRF2DvwI8MF5E3sk0e7inKUbfPsyq9mLhA0y0nPp3W2Opmudz/EihhlxKKv5I59p2NRuBppjCbhwlpJmAQBdMyeZ5LZj1eRytSNeXQ6eS+wvu4o8ttPYrnuLgA136pwY/9wdENdqDAJxncvYwaqDVNnz+t8Lyxk5QXBgdsSs0w9t0QYdg5sjIOcwkNHE5b8JI6PNi+jPPelzR+1Fr7jJWs7mG69padCI7ahW76Gra11ALQllooQoFRCULZJCULKLlKLYXpEoWQPGqlFsuQhbRMFAQFClF3FKLYJKUSweqpCxGqAkDVQUi5CFANaFdo3k9Om0eYJBXQchd5AXfUBfpFQS+gLvFAWAUAUqkIOSFPUUyCxkSRdaBOBgAZ8YXly/5Ge86/wAaD9hNyDdcRdJxggFpGT2gkYxnqMNCNyb6rqebKrq+Bvp6lOpEgtJ9Rw9lzZwIPTpBGGKsYxnH37muUpQlXY77NqlwkkHHqF570cU+D04+ITapjLOG+kyxMxyOXyWjNF7Dt0mX/YdVrxeu5SMNwlonPLKey4VByg/Y9WUlGal2fA2ozDCdc8jw8VjB90ZPltNABwcCN+R04EcDjhqDwScdtTj0MscqeyX/ALRzrTeYcReb2d5H7xXTCUJ+z+hn8cOY8r07/cZHtafWbBBzH0OR4cVsqUeJfibsU4TT2/ejk19lshzMS12QnGm4TDmTzgtyI0wI7sWrlxu7HkazwTHJvynV9mcK3bEqUwXRfYMbzdw/c3Nvw4rux54T6Pk+d1Wgz6d/GuPVco54pBbrOPaV6JSxtK9CruG0r0aWNod0aLEyoB3JUhQYVLFDGqGSLhQpRYEsUgVQUQhCi1Wy0VAQlELUsUCWJYoCFSUUAtxoLhAXdQFhiAJrCgGBCBFx0QFt5IC7p0Qp6OyD1GFvs3Yg4nQgxxBXmZHWSW49/a56XG4dPT8x91jjjEjcZx5Th/hdGKark8XPjlutDhRbEFrrszEHAxF9pynhvy0IynDd8UXya8eRxe2a4MNoLqUAkFrgC1wwDgN4nfqMxkUxyU/muxlOLh8n3OhZrUTcHD6Ya5LnyYotyOzBnlHadxoIhxMAQ4kzkMSBrMeK8aMlv6e1H1U4tYfqbDW3H/PRcyg4nQmmrQi0VQ31xu9oD3TF7zHEBb8St7H0Zpy3t3Lquf78xFtqhsjM90x4ueex0Tz1FOC68mGo0t9drebcr3D67vj0Qkq2y6GOWE5NTxL4v7wwrt4SAYOOX39hYtbXR24csZRt1f8AeBNIlrxjBBBB5YjDfuWxPi0a8sVkShLo7MG0NjsqS6kGtdndEBjv9oyYeGDeS7MOqd7cn4nz2t8FqPmaflen7HAqWdzSQWkEYEEEEHQjcu0+f6CnUzoVQV6E6Hsg4K9AdD2QhPQHQ9ktlpE9C73T2UBZou909igKNE+6eyF4ANONxQcFRwKhbKngUFhTwUMkySNFOS8FFwO5KJaEuCzMKBVsUEKJ1XQcgYoHVUFig7VAGLOfeQgQsx95AELKfeQBiyn3kATbN+4oBzLEdSgOrYGQ0NObZg6guJ74x2Xm62NS3ep9L4NkjkxPE1zH9TW+y7wO/kuOGamdWo8Mk03FWSysAMR2Md13Qyblwz53NpnjfKNFeiCxwMPYcXNJxn3mE+y4a95W2ePc90eJLv8Av7HNjybPhlyn/eDmVbMWEVKbr1MABroEscB7NQbnb9DuWOKancMiqX5+6NmROFZMbtfl8zVW2qX0w0yPVhxn2/JasOgWPK5P7jv1fjEs+CONcPv7munWxBnMNMcxOS4Jw4aruz18WW6t9lx9w59fU6jxOaweNqqNuLNC2mxjKgLG7yJb/HL/AIFiwyxe7d6nTpskVBw/7XS/NFPqGCsFHodcMtWZmO9U6h3g8E5cw7+S68kVsjL7jRppf78kGrvlfqLq1i4QCYEXZgnDSchmpE6J4Ulfft2oGlaJA1ycOO7pmpkh6dzPT5XJbZdV9RzqxrG6QLwwa7XRrtd8eS6NNk8qovo/oeP4poI51LJi+1H6oRTpuO8dl6nB8lyM/KH3h/FY2WgvyUYl47JuFBNsmjx2V3Er3CFlJwvDsrZBNWzEfqHZAJ9GRnBUKC677oUMkY6lTgFizJIy1ao0CwM0jM+vwChTOax0CUhbB9PwCm0qkyjUJyAUpGVtgY6NV4LTGsIXfR5ljhRJShZG0HnIJQtDG2Gockom5Bt2bUOaUNyGf05zdytE3BNsp3hShYxtFmhShYZY3cHJRUx9mAGIkHj9/crg13RcH0HgVOU1dOv6/uOpYrSHG64QYxGv+1eRPE+seUfURz38OTh/R/I1GytK0rK4jJpoz7DbPYmyM/5YdQAtv+XKPQ8zN4bGXVIYbCYLqYY0nBwuhweBjdcDJI4dozWUdR5jSyfc+lHmZtH5P/H+9nltp2B2JpAyAS6nJLxxYc3t8Rv1XsYs7iksj+T/AH9zyMmBSt41813+72G07WWANIxuU2gnCIYAYG/FaHp/MqV8cs7oa7ydyr4qST9CMtGOuC3PTXGjRj1uzJuatDbPajdeMMHNdOUXg4O+DAubUadQUV8z09JrXmyZJdOjHMtGB+/DNcnl8npLP8LaV8lUXgvj3pbnvMFvdzWjkSttfC0ZQk4ZVkfZ/Rin1BkBMkTpnmsIw4s9TLn52o5/pZddMQ7CMM90kduq6EuDy5yuSvp0LpWiMTh5clhKG5cHVjz7Hcv6jW60+kl7GzUGNRoIBIP+oBv0dHA7yV24JtrbI+Z8T08Y5HPEuHy16CRWef8ATP8AILoo8qxt6qc6f/JKBQZU92OqAXUfVH6ezlAZ79X3T3QEL6mihkKqufvCFoT6Z2ixbKgC4ncsWZpGd4OihQHM4ICro0UMkQsgYKWZJUBjolIls6dCzSvRo8ncaAwA+s4Ac1aJbFVrbTZ/qA8Bio2kVRbED8QNBwaSFi8iMvLNdn27SccSW88u6qmjGUH2OgLSDi0jvMrZwzCmhtW9AwHRSipiHUjmBvWJkVexxwOgCFNNJsxBjHn0XHrP+J8Wex4I/wD7cfir9fY2NpNIgg8oHhjmvCtxdpn3s4KacZRRKdOqMA+dA8TGRzwJy1SU4SfK/Q5v8acF8En8upts1peM2NOcQ47pEkEYLVKGP1a+41tZ3w0n9DbStz4wpjKPb7k+rwlatkW6s0ZMGXvSOftFhqG81rQQZa4hxIjIiXQOUFdsNRtjsfKPKzeGyvenUjiW2yuqPl8CvAAOAZXgQ0H3KmWgPDBduDMsUfh+x6d4/wAHmZ8G+XxcT+j/AJOIyq5pLXgtcDBBEEEDEEdQvVjJSVroeXKLi6fU3WKv6xg508eYc12/kubVxuC+Z3eG5NuV+lM13sMNYPhmvPr1Pfi24/D6lU6kEmcWuDm8XSC3xWdOLXHU2QjHPjyJy+z6Lqw7W5ocYyzaNAcWz0ha4xknR1SzwlBSvqjBXfiTlmMMFuguDTlly/vFVsfW1E9Zg9JlVJ3Rpco7d76gWN8VWkHeGu5Ow6rOq/M5nJSTa9Kf3nZ2nTfQfcex05tIxa4atdkfiN66cWaGWO6DPn8mKWOW2S5M42gY/wCm/uFmYAVLcTlTcNcULQbLaN7SOcoUF9pxkfNQIXVthiJUMjMamoKFJ6RpWLCI6o0LEzTM1SsNFKMrFGuFNrKpIr8yzgsdkjJTiX+Zp8OixcJmSyQA/O0+Ky8qQ87GIdRr73HoV2/EeZSHM2WXCS4k/eqy2epN1D7LsLHHFTyxvRvq7EZoR0wCjxy7GaywfUyVdgtifW6KKEu4c49hDdhunBxCuxmO5DadntTPZeSPvVX4kSoseLdbBgQ09FdzGxAs2rWn1mtz4pvL5Zso28lwabjZMT60eCxnJOL7mzCpRyRadO+p2aVcGRkQcRP3gvnZ4muex+l6bV48y2v7S6r9vY0Mquzmd2OXecO61VfU3yhFLh0aKbweBwjmTuP+Fg4u+DU5beWuPX+Oo2/+mcP1HXgDp8VGtvBrTWR7vToPYCdI64LG6Nc0hdrsIewtIkEYwAO0wtuDP5crv8zzNXpVlVJP6Hndp2NtQCnUvtqtgUqx9aRGDK10YjRwkjfIXrYZOP8AsxcxfWPT71+x87qMPxeXk4kuj6/icFtGpSqOZUEOFN5GODgGlwLSPaHq5hdjyxyRUo9LOWOKeOcoyXNMKjbCABOe7oO62+XFu2jVHPkhCoyaTH35jnhG+c0yY1JXXJlp9VPG9u6k+ox9YXQTu9XLQyPAgdFx5MT3tL5nsabWQjgi5Pu1/fuFuryDhJ3GfuFnHTStU+CS8VxvHNONy7P+9BV9pab04bgMZdz/ANvirPG1JbTDBq8csb826Xp79PqY6rIbJBF72Tuwxz3rOP2tvHHU5cz/ANTm0+ej7fyfT9j25takA9oc1zQ4BwnMA4aHlivmc6yafK3jdNM+iWLHqsMXJdUjh/iTZAoEVKeNJxjeSx3uk7wYMHoePtaDXLUxp8SXX9z5/W6J6eXH2TztS1ncAvQOEWbY77CgBqWpxGePJCmJ1Z071CoNrjvUsyQQKwsyoohSzKhbkBQpz+lYtmSj7FCzjRTey7ET8qMZU8xmSxoD8sOCvmE8pA0tpVW5ieYXYpM86kbaO2XDOkek+SyU/YxcPc3U/wAQA503josvMMPL9zdS2gx+b4J1w+KzTsxcaGGpHskGVSUEHvjASqCCo6YjAaBRlTCq1hAFyN05qNFTMVaxsdiXQVreNM2LK0LdZWR6xy5KRxJFeZszW22AQGGYAAM4jdErky4FGdroz2dNrpPDtkrce/cbZNuvBhwa+JgkEHuMO4lcs9NCS9D0sHiWWMvtX8+fqdKh+ImHOmcd4eD4FnzWiWjS6M7IeLZJ1cV8uTSzb9MYCm7rdaMd8gk4Yblr/wAGT6yLPxW+kOX7ofR22903GgYTnImJiZGK2f8Ax2JcuTOGXi2d8KC49xjNoVTHrfxEDuZI7rbj0enXb8Tlza/VS6P8EB+ZpvF17yTlF4zpn/hde+GKaht49TjWky6jDLMpW0+nqZCGUoxFRon/ANIAPi8IJY8kBhxMw7fiFM2n83nFw/Xov5NeDPLC9uamvTq18vQ87tLZpY1tWmS+kBBJEOpyThUG7/cMCtuLK725FUvo/kac2Fbd+N3H6r5iKFpmF1HG0OfaJpuwHtMnqHT/ANoWmS/2J+zOqEv9El7r+/QXSrSfvVbUcz5LfUkubEAtMHMkt9YHwPdaJRkvibs7vMxzXlwjXHXuwbXXvhoE3G4NECcolY4sDhcv/wBM6Nbr46jbiVrHHp6nofwpbiKd0/pdDeRAcJ7leX4ji+O13R6XhOZ+VtfZ8Hp7XW9JQqsOMscerfWbhzaF5+ji8epg13dfid3iEFk0076pWeLewDd8PNfUnxyZjtAOY+W5RmSMr3O+8FiBIonj3Qoxlnd9lYujNJjPQkb/AILCzMr0J3/D6qNoySZRZw+KxsyoMP4EffFYNMyTRYa3c/vGKnPdGSr1BrPAHtDQ4fJIpt9CuSS6gfmh7w7K+W/Qy81epiZax+pp6HzXfvPI2nRs1spe8f7sPFZqSMWmdKjVpuyLDhhiMlkqMXY9tAHA3T1EqpIlsNlgH6WgZ5QsqRi2x1PZFTcXjvilE3FCwWhskE9R9FOUW4sRVFoGdw8zCWy0jLWrVN9JnR/0UstL1OVa6x3sI6hYtmaRlstoaHi+DdODsTInf0WjKnKPHU69LkjjyJy6dzrWrZhHrMgjMRGXzwXDDOukup9Hn8Llt8zDyn6GIPLDJbloSPP4LfxI8qUcmJ36DmbRIIhgMayT4R8EcE0WGqnCSdXT/EfVtDXG8GtaIILXOn1tzgxuIInAwsIY5KNOR0ajWYZ5N8caXFNfqNs+0Yzc4kAw6BicoieSs8cm1Rr0ufFBS3tp1xXImk/AE488geQz6rqUY/a7nBuytLGn8Jso1t3FZKfcxlprVdzo0qjg4OaSCN438CMiOBWMlDLGpmyODJjl/r7GW37HZV9emBSfmRj6J/I/6R4ezyXMpzw8P4o/VfubZ6RZVdbZfR/scJ9nqMFWm9jmuDWuII3B4E8R62YW/wAyEnGUXaORYZwjOMlTq/r/ACZadVbkcw2/iHaEGNYMpNWiwltkmG/AluhMchl4JF3GxONTaNFitXoql1uRu/y3Ed4XHmx+bDc+x6ePItNm8uD4dfiegq7S9VwHuub/ACBb5lcGPClOL90ejm1DljmvZnGqWamTIAC9lnzaFuawCAFiZIyvbioZDqYIUZbHMI/yFizNBPIOKwozsheBlKlFsF1UD7+5U2mW4ptccPDyWLgZKaKvjQRyCm1hSMlqqtjIYcPJZwi7MZyjto5eC3nNaPStswIxAK6aOXcNZZG72t6KqJNww7OZHsg4bo8k2obmRthYNzZHJNqG5hU6DRgWjDiCm1DczXRpNnL4R4oSxxpiMBPf5ZIEKrYbuhP1UKjDVrDh99VLMtpzrU4cFGzJI5NpAWLM0dXYG1msFyqXR+k5gcMpC8/VYHLmPU+i8G8UhgTx5m9vbul+p2j6Kpgx7HOzuk5jgc54QuWO+KuaaPalmwZp7cUlK+z7/J9hTtmg4RHiPBZLM+zssvDsc18UHH6oWNktO9ZPUyXYwXguGSvcF/RzyV/yn6Gt+Cw/7h9n2K85C8BjmAYMJLPKS4RY6DFgklNqn0GNsQGTcd58vvssFll6nY9DjfxKNDWhZedJmX+Bixq+n4Cn2gGWSZywOucHLULbix5XkUux5eu1OiWnnju5P0X6j6s3SIvMcLpacoIhwBzaTw36rqy6WEvjXDXNny2HXzx3CXxR6U/0PN7T2A9nrUwXNi8WH/qsGOLmjEt/cFjj1KvbPr69mXJp01vxcr07o5Lai6jkNBf7J1aAebfV+AB6rHH3Rszc1L1X5BUqcvbdnOe2PxCmS1B2ZY0pZVtRuDySAPs+S44RuSO/LKoMt3pJxa0z+0j5ruaZ5SYAD/c7KUZWU5k5teDwAKlFtCSTo7t9UoWWyuN5PipRbCNZuvwU2mW4CpU0Kx2l3CXTvUoqYMkYylFsp1U6qUXcZar5WSRqk7EysjGz1n5UiMI6BdBoH07PU94/JERjrhBxcOZun5Kksog7qhn/AONsd0A2m873T/a3yQUNbWaM3EdG/IIA6tqbEX3H+1qWK9jNUcCN/UR81DJI51Ynd8CsDYjBXnUdlGVGKq37+yoUyOaRiFGiptdA6dTHDA7vpxWpo6IZL+Z2af4jrht0im7i5gJ67j2XN/jY7tHrR8W1cY7XK17oc78VVYi4wHUA5cATAWP+JC7bZsfjeo20kk/WgWfiarj7MYxIBw4lsKvSwLDxvULq/odDZX4iBddqBrZycJieIJMc1tUp4cbWJfiaJZMetzxeqbpccBWraYD3i6X4iIBAkzMEYEZLQoynG2km/wC9D03rIYJvHGTlFdP/AGJHpDBdhPvEM7NMT0BW+FXwvwOLNnW25y592dGw2doIc5xdwE47x6zhIxjcujZll0VfP9v5PJy6zD06v6GqjbmtwY0DiJmOZN4dIC3rBF05vd8+n4HkSySt1wZargcvaBkOGBGeIjJbJxjJbWuCY5ShLdF8nLt+z2PMvAY4n/qNGB41KY38WxyK5Hinj/4+V6P9GehHNjy/8nD9V+q/Y51o2TVZSc4gFrXSHNMtIdg4jkQ3AwtUNRB5K6N9mdOTRZFp3OrSdprlUzK+Wtbq71v7Rl3P/aNVvfxN+xyJPHFPu/y/k7FkptkudOOQicO+awwY6Vs2avNctq6GkWho97w81vOUn51g3O7DzUKAbaOPh5oBRtfA+CAS907iozIS9k7liUW6hO7wChRRoDRQot9EKFFOohSxQmpS5qkaEwqY0etpGP1vHfzW+jTZqZV/e8xqT5oohtDg79zu4jdqlMljIHvvHAXceoCbRuAAGrzzd9E2iyVKxHs4dTgjQTF+mqZh46tZ5JTLaE1LQ853D/aR8HKcl4MdV7jub0n/AMlKLZme12g8UKZ6jDp4/RY8mRmqtOnj9EBkqMhRgOm+ea1NUdUMilwy1iZsoqmLKVJwMpOO4kciUMor0O1ssgDEb+crpxPg49RBqR1m15EYAjKYHiYhbd1HP5d9OoLnPqkQyMPWJIF6MojXXiuTDGW6TjK4voetrHj8rHCcNuRL4n6+hpo7PqPIHyXTylbPL226jybzYWUwCQHunCT6rd8n3t3DFcuTO6t8R9e/8Hfp9C5z8tU5+j6L937A1QH6BwwBb6syRhLROBwzPLFbccMGSO6lXyNOaWr02Ty3Jp+iZg2hsum9+68ABfAEkjhlAwAwBwzWqOGUIuUHS9H6HU9VDNJQzRuXTdHr+HRnDr03tJF44GJGXUblnCalx3NGfTSx89Y+v7+gEne93fzWdHPZRn3ndx5KUWwodEXjzzPilCwhTcMnu7N8koWA4VPenmG+SbRZL9TUfxU2iwHPf+3+P1Si2Jc9+4N7HzWNFTFm9o3t9VKLYAcd4BUotg1HCPZ8UKZo4KmITbbUH6ystzMKQz+p1ffPYeSbmKQQ2tW9/wAG+Su9jai/6xX9/wAG+Sb2Taghtqv7/gPJN7G1Ft23WG8dk3sbUQ7aq6jsm9jagTtepw7JuZdqBO037w09Pqm4UinbScdzfHzTcKANtOg8VNwoA2kqWUE1p3eKWBcqAcyrqsHE3Ry9mPFAnJYXR1wx71waKWzyU3HTDRN9WbrJsonSFi5Hfh8P/A69n2UAM1nGUiz8Pw9WvqOq7KvCG4GQQc1vWLcuWeTmyeVkqEensbLDYrkGoeDYkT0JWnzMekg6uT+h0zwajxTLFyioUq9/w6miraiHQIuScRIIwHtZkiZ0C1andkS+L7XYz8Olj005t472Pl9WCLS2Id6w/adMp+yuvM5Qw8Rtnm6SOLNrG3NwTbpivTsAwi8Z3eyOep3/AFWW5NJNUvT3NMsE98mpbmn168epkqWoDF0ADM8OOqyntnGpdDnxeZhnuxvldzyj7cC9z70Fxk6ciMlq2QNy1GVNu+vX3GNtVN2ZDT/xPzb4jkm5x919S7ceT/xf0/gqrWDPaB4GJB5EYFWOSL6GvJinD7SA/qLVluRqosbRam5Fov8AqLU3IlF/1BvvJuRaKNsZ7yWhQJtTNVjZSvzDdQoUnpG6hSipi3RqpRbFQ1CmFU1hBh0SgG2g4q0BzLA47wlA0M2Xq7wV2kNFLZDN5J5EeSu0WaWbEYf0num0WWdiUuI/uCbRZX9CpHJzu4/8U2iwXbAZuc7wPkm0WIfsMD9R7DzU2ixR2QPf8B5ptLYP9I/f4fVKAJ2V+7w+qlATUsJG/wAISgBSqvZgPgsXBPqb8WoyYvss3WTbGIFQYbyM+y1yg6+Hqd+m8Tqa85fD7dTo2fb1O9BBA3E/MbvFanhklfVnq4/GdPKWxpxj69fxO3Z7Q1wkEEcCCtfnuPDVHr49PjzcwkpL2NTbU1o3rbGSlxZqy4PLtqD/AAF1doAwInIZHrBWzbmjJRSW1nm5ZaKeNzbayL7gX2psTBE559uS2TScVKUenQ8nHccsoY8n21y2vz/cwWnaFMZvAz3roWTi2edkxRUtt9O5za23KbfZvO8B4rCWVy7G2Lx418LZybftOpWwOA0HzO9a+prnlchdCwOdv+atGoc7Zcfr8PjilAbQsj24Cpgc2lsg82lR40zbDNOHCfHp1RdXZrSJ9g92n+32h0nksWpR9zNLFk/8X9P3X1MVXZ1Rv6ZG4ggg8j8lYvd0Nc8Uodenr2MzmEZhU1goCICICICICICIBzQFkBrXIBzHKg0tVIaKfAN+KA1U73Tl5oBt6M3s6mfCQlgNrwf1jmGj6oKCLm++Tyb9EISZwhx7eaAS9sbh2HkhTM941HggAJ69CgJigFVHjeQOyAzVH8CeihTn128FiwJUA2hXcwy1xB4KSipKmbcWbJiluxyafsaTtav/AO47wWvyMfodj8W1r/6jFOt9U/6ju8LauFRxzzZJPc3yKfWcc3E8yShrbb6i0IGxhOASgdCy2UDPP73ZrNIG1s7sB96fRUg14a0SZjdG/lp4qAyOt+ODT0z++qllodZzeEtdzggd4x+KAIMOMddOt7Pso4pmyGWUOn8AOuHA58PY6e74jipcl15M6hPpw/TsJFkJAwjoqmn0NcoOPDQuvZQJ5KmJjdRCAW9gUoCyEohSgIgDBWVgJrkA5j0Brpv0A+KoNLKmrj0EeKAeK7NL3PH4qAcyq4+y1o+9AAqQM1yPacwf2j/9FALNr0fPID5NQop9oP7z1w+KWKAv/tHU/RLAt1og+00dvNCAmt+4nkPnCFBLuBPM/LFAA4n9o++iAzvqfu7fRQGWp16oBSxBSAiAuEAbaROStFo1ULGN6UDcyiBugdvisiDA7cMuGPwwSwWCN/ifkJKWB7gyMc+08MVAZ6NWmyQQXY4ZLBxbd2bFJJdCPtjicGgDcM+vErJKjFuyAh2LnHqcOgCyMaLe9sYCTuJSwYDaqrThEbxmP8rCUb5NsM0oquq9GODy4SRHBZIwk03wZ3gAoQS8/RAIcjACxIRAEFQWCgGB3JUoxtTifh8EIOpkZ3R1QDm2jRwH+0T5oA/TA533czA7T8lQGHaNaO58kAJrfu/iEAEj9x5n6oAXN/aEBQqaR4n4IATVP20/NLABeT73cD4KAH0fAfFAU7ifgEAoxz8UKA5nAqAC6UINp2clC0aqdmH3CoNDKR0QDQ0jh1j4IBVR4H0QFsx/ygo6VgsxGIjlvU3FcTrGxta31mF05rIxOPbabBkI4fVKBy3uUAv0wQpbK8oA3VWjiUAqraTugIDMXlAA58oACVACoQiAiAtAWCqAg7iqUMOCAMVUAYq8fgEIXfHPx+KAI10BDUn/ACUAJQFEjj3KAgCAtzjqUAv7xQpbaaAYKaAohAOpsByQo+nTAzQg2+AgCdVAE70BjqWjPwQhjq1kKVSrwUB0rNtItyKjSZbHv26/QHulCxf50VcXAghUhhrPBQGclAS+hCX0BV/7+qAW56lgFAUoCICICICICICwsgGEALigCYgDCAYgCCAooCNQFoCigKQDaQQo4hQCXgKgU32kIdABQpUKgW5AY3IQW/JCiViQtpVQHsVKPpZFAKcgBcgFoQEIC3owAsQRARARARAf/9k=',
            // ],
        ];
    @endphp
    <div class="container-fluid">
        <div class="row">
            @forelse ($products as $product)
                <div class="col-md-4 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$product['img']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product['name']; ?></h5>
                            <p class="card-text"><?php echo $product['description']; ?></p>
                            <p class="card-text"><?php echo $product['category']; ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                @empty
                <h1>No Products Found</h1>
                @endforelse
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
