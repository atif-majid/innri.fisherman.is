<style>
    /*!
 * Bootstrap v4.3.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
    :root {
        --blue: #5A8DEE;
        --indigo: #6610f2;
        --purple: #6f42c1;
        --pink: #e83e8c;
        --red: #FF5B5C;
        --orange: #fd7e14;
        --yellow: #FDAC41;
        --green: #39DA8A;
        --teal: #20c997;
        --cyan: #00CFDD;
        --white: #FFFFFF;
        --gray: #475F7B;
        --gray-dark: #394C62;
        --primary: #5A8DEE;
        --secondary: #475F7B;
        --success: #39DA8A;
        --info: #00CFDD;
        --warning: #FDAC41;
        --danger: #FF5B5C;
        --light: #A3AFBD;
        --dark: #394C62;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: "IBM Plex Sans", Helvetica, Arial, serif;
        --font-family-monospace: "Rubik", Helvetica, Arial, serif;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    body {
        margin: 0;
        font-family: "IBM Plex Sans", Helvetica, Arial, serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.4;
        color: #727E8C;
        text-align: left;
        background-color: #F2F4F4;
    }

    [tabindex="-1"]:focus {
        outline: 0 !important;
    }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible;
    }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    abbr[title],
    abbr[data-original-title] {
        text-decoration: underline;
        text-decoration: underline dotted;
        cursor: help;
        border-bottom: 0;
        text-decoration-skip-ink: none;
    }

    address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit;
    }

    ol,
    ul,
    dl {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
        margin-bottom: 0;
    }

    dt {
        font-weight: 500;
    }

    dd {
        margin-bottom: .5rem;
        margin-left: 0;
    }

    blockquote {
        margin: 0 0 1rem;
    }

    b,
    strong {
        font-weight: bolder;
    }

    small {
        font-size: 80%;
    }

    sub,
    sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline;
    }

    sub {
        bottom: -.25em;
    }

    sup {
        top: -.5em;
    }

    a {
        color: #5A8DEE;
        text-decoration: none;
        background-color: transparent;
    }

    a:hover {
        color: #175ee4;
        text-decoration: none;
    }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none;
    }

    a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
        color: inherit;
        text-decoration: none;
    }

    a:not([href]):not([tabindex]):focus {
        outline: 0;
    }

    pre,
    code,
    kbd,
    samp {
        font-family: "Rubik", Helvetica, Arial, serif;
        font-size: 1em;
    }

    pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
    }

    figure {
        margin: 0 0 1rem;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    svg {
        overflow: hidden;
        vertical-align: middle;
    }

    table {
        border-collapse: collapse;
    }

    caption {
        padding-top: 1.15rem 2rem;
        padding-bottom: 1.15rem 2rem;
        color: #828D99;
        text-align: left;
        caption-side: bottom;
    }

    th {
        text-align: inherit;
    }

    label {
        display: inline-block;
        margin-bottom: 0.2rem;
    }

    button {
        border-radius: 0;
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
    }

    input,
    button,
    select,
    optgroup,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    button,
    input {
        overflow: visible;
    }

    button,
    select {
        text-transform: none;
    }

    select {
        word-wrap: normal;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
        -webkit-appearance: button;
    }

    button:not(:disabled),
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled) {
        cursor: pointer;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    input[type="radio"],
    input[type="checkbox"] {
        box-sizing: border-box;
        padding: 0;
    }

    input[type="date"],
    input[type="time"],
    input[type="datetime-local"],
    input[type="month"] {
        -webkit-appearance: listbox;
    }

    textarea {
        overflow: auto;
        resize: vertical;
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0;
    }

    legend {
        display: block;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: .5rem;
        font-size: 1.5rem;
        line-height: inherit;
        color: inherit;
        white-space: normal;
    }

    progress {
        vertical-align: baseline;
    }

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
        height: auto;
    }

    [type="search"] {
        outline-offset: -2px;
        -webkit-appearance: none;
    }

    [type="search"]::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button;
    }

    output {
        display: inline-block;
    }

    summary {
        display: list-item;
        cursor: pointer;
    }

    template {
        display: none;
    }

    [hidden] {
        display: none !important;
    }

    h1, h2, h3, h4, h5, h6,
    .h1, .h2, .h3, .h4, .h5, .h6 {
        margin-bottom: 0.5rem;
        font-family: "Rubik", Helvetica, Arial, serif;
        font-weight: 400;
        line-height: 1.2;
        color: #475F7B;
    }

    h1, .h1 {
        font-size: 2.53rem;
    }

    h2, .h2 {
        font-size: 2.13rem;
    }

    h3, .h3 {
        font-size: 1.73rem;
    }

    h4, .h4 {
        font-size: 1.47rem;
    }

    h5, .h5 {
        font-size: 1.3rem;
    }

    h6, .h6 {
        font-size: 1rem;
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 300;
    }

    .display-1 {
        font-size: 6rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-2 {
        font-size: 5.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-4 {
        font-size: 3.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid #DFE3E7;
    }

    small,
    .small {
        font-size: 80%;
        font-weight: 400;
    }

    mark,
    .mark {
        padding: 0.2em;
        background-color: #fcf8e3;
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }

    .list-inline {
        padding-left: 0;
        list-style: none;
    }

    .list-inline-item {
        display: inline-block;
    }

    .list-inline-item:not(:last-child) {
        margin-right: 0.5rem;
    }

    .initialism {
        font-size: 90%;
        text-transform: uppercase;
    }

    .blockquote {
        margin-bottom: 1rem;
        font-size: 1rem;
    }

    .blockquote-footer {
        display: block;
        font-size: 1rem;
        color: #828D99;
    }

    .blockquote-footer::before {
        content: "\2014\00A0";
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .img-thumbnail {
        padding: 0.25rem;
        background-color: #F2F4F4;
        border: 1px solid #7E8FA3;
        border-radius: 0.267rem;
        max-width: 100%;
        height: auto;
    }

    .figure {
        display: inline-block;
    }

    .figure-img {
        margin-bottom: 0.5rem;
        line-height: 1;
    }

    .figure-caption {
        font-size: 90%;
        color: #475F7B;
    }

    code {
        font-size: 90%;
        color: #e83e8c;
        word-break: break-word;
    }

    a > code {
        color: inherit;
    }

    kbd {
        padding: 0.2rem 0.4rem;
        font-size: 90%;
        color: #FFFFFF;
        background-color: #eee;
        border-radius: 0.25rem;
    }

    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 500;
    }

    pre {
        display: block;
        font-size: 90%;
        color: #324356;
    }

    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal;
    }

    .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0;
    }

    .no-gutters > .col,
    .no-gutters > [class*="col-"] {
        padding-right: 0;
        padding-left: 0;
    }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
    .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
    .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
    .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
    .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
    .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .col {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-first {
        order: -1;
    }

    .order-last {
        order: 13;
    }

    .order-0 {
        order: 0;
    }

    .order-1 {
        order: 1;
    }

    .order-2 {
        order: 2;
    }

    .order-3 {
        order: 3;
    }

    .order-4 {
        order: 4;
    }

    .order-5 {
        order: 5;
    }

    .order-6 {
        order: 6;
    }

    .order-7 {
        order: 7;
    }

    .order-8 {
        order: 8;
    }

    .order-9 {
        order: 9;
    }

    .order-10 {
        order: 10;
    }

    .order-11 {
        order: 11;
    }

    .order-12 {
        order: 12;
    }

    .offset-1 {
        margin-left: 8.33333%;
    }

    .offset-2 {
        margin-left: 16.66667%;
    }

    .offset-3 {
        margin-left: 25%;
    }

    .offset-4 {
        margin-left: 33.33333%;
    }

    .offset-5 {
        margin-left: 41.66667%;
    }

    .offset-6 {
        margin-left: 50%;
    }

    .offset-7 {
        margin-left: 58.33333%;
    }

    .offset-8 {
        margin-left: 66.66667%;
    }

    .offset-9 {
        margin-left: 75%;
    }

    .offset-10 {
        margin-left: 83.33333%;
    }

    .offset-11 {
        margin-left: 91.66667%;
    }

    @media (min-width: 576px) {
        .col-sm {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }
        .col-sm-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }
        .col-sm-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }
        .col-sm-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }
        .col-sm-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }
        .col-sm-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }
        .col-sm-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }
        .col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .col-sm-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }
        .col-sm-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }
        .col-sm-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }
        .col-sm-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }
        .col-sm-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }
        .col-sm-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .order-sm-first {
            order: -1;
        }
        .order-sm-last {
            order: 13;
        }
        .order-sm-0 {
            order: 0;
        }
        .order-sm-1 {
            order: 1;
        }
        .order-sm-2 {
            order: 2;
        }
        .order-sm-3 {
            order: 3;
        }
        .order-sm-4 {
            order: 4;
        }
        .order-sm-5 {
            order: 5;
        }
        .order-sm-6 {
            order: 6;
        }
        .order-sm-7 {
            order: 7;
        }
        .order-sm-8 {
            order: 8;
        }
        .order-sm-9 {
            order: 9;
        }
        .order-sm-10 {
            order: 10;
        }
        .order-sm-11 {
            order: 11;
        }
        .order-sm-12 {
            order: 12;
        }
        .offset-sm-0 {
            margin-left: 0;
        }
        .offset-sm-1 {
            margin-left: 8.33333%;
        }
        .offset-sm-2 {
            margin-left: 16.66667%;
        }
        .offset-sm-3 {
            margin-left: 25%;
        }
        .offset-sm-4 {
            margin-left: 33.33333%;
        }
        .offset-sm-5 {
            margin-left: 41.66667%;
        }
        .offset-sm-6 {
            margin-left: 50%;
        }
        .offset-sm-7 {
            margin-left: 58.33333%;
        }
        .offset-sm-8 {
            margin-left: 66.66667%;
        }
        .offset-sm-9 {
            margin-left: 75%;
        }
        .offset-sm-10 {
            margin-left: 83.33333%;
        }
        .offset-sm-11 {
            margin-left: 91.66667%;
        }
    }

    @media (min-width: 768px) {
        .col-md {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }
        .col-md-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }
        .col-md-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }
        .col-md-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }
        .col-md-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }
        .col-md-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }
        .col-md-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .col-md-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }
        .col-md-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }
        .col-md-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }
        .col-md-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }
        .col-md-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }
        .col-md-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .order-md-first {
            order: -1;
        }
        .order-md-last {
            order: 13;
        }
        .order-md-0 {
            order: 0;
        }
        .order-md-1 {
            order: 1;
        }
        .order-md-2 {
            order: 2;
        }
        .order-md-3 {
            order: 3;
        }
        .order-md-4 {
            order: 4;
        }
        .order-md-5 {
            order: 5;
        }
        .order-md-6 {
            order: 6;
        }
        .order-md-7 {
            order: 7;
        }
        .order-md-8 {
            order: 8;
        }
        .order-md-9 {
            order: 9;
        }
        .order-md-10 {
            order: 10;
        }
        .order-md-11 {
            order: 11;
        }
        .order-md-12 {
            order: 12;
        }
        .offset-md-0 {
            margin-left: 0;
        }
        .offset-md-1 {
            margin-left: 8.33333%;
        }
        .offset-md-2 {
            margin-left: 16.66667%;
        }
        .offset-md-3 {
            margin-left: 25%;
        }
        .offset-md-4 {
            margin-left: 33.33333%;
        }
        .offset-md-5 {
            margin-left: 41.66667%;
        }
        .offset-md-6 {
            margin-left: 50%;
        }
        .offset-md-7 {
            margin-left: 58.33333%;
        }
        .offset-md-8 {
            margin-left: 66.66667%;
        }
        .offset-md-9 {
            margin-left: 75%;
        }
        .offset-md-10 {
            margin-left: 83.33333%;
        }
        .offset-md-11 {
            margin-left: 91.66667%;
        }
    }

    @media (min-width: 992px) {
        .col-lg {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }
        .col-lg-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }
        .col-lg-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }
        .col-lg-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }
        .col-lg-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }
        .col-lg-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }
        .col-lg-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }
        .col-lg-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .col-lg-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }
        .col-lg-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }
        .col-lg-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }
        .col-lg-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }
        .col-lg-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }
        .col-lg-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .order-lg-first {
            order: -1;
        }
        .order-lg-last {
            order: 13;
        }
        .order-lg-0 {
            order: 0;
        }
        .order-lg-1 {
            order: 1;
        }
        .order-lg-2 {
            order: 2;
        }
        .order-lg-3 {
            order: 3;
        }
        .order-lg-4 {
            order: 4;
        }
        .order-lg-5 {
            order: 5;
        }
        .order-lg-6 {
            order: 6;
        }
        .order-lg-7 {
            order: 7;
        }
        .order-lg-8 {
            order: 8;
        }
        .order-lg-9 {
            order: 9;
        }
        .order-lg-10 {
            order: 10;
        }
        .order-lg-11 {
            order: 11;
        }
        .order-lg-12 {
            order: 12;
        }
        .offset-lg-0 {
            margin-left: 0;
        }
        .offset-lg-1 {
            margin-left: 8.33333%;
        }
        .offset-lg-2 {
            margin-left: 16.66667%;
        }
        .offset-lg-3 {
            margin-left: 25%;
        }
        .offset-lg-4 {
            margin-left: 33.33333%;
        }
        .offset-lg-5 {
            margin-left: 41.66667%;
        }
        .offset-lg-6 {
            margin-left: 50%;
        }
        .offset-lg-7 {
            margin-left: 58.33333%;
        }
        .offset-lg-8 {
            margin-left: 66.66667%;
        }
        .offset-lg-9 {
            margin-left: 75%;
        }
        .offset-lg-10 {
            margin-left: 83.33333%;
        }
        .offset-lg-11 {
            margin-left: 91.66667%;
        }
    }

    @media (min-width: 1200px) {
        .col-xl {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }
        .col-xl-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }
        .col-xl-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }
        .col-xl-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }
        .col-xl-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }
        .col-xl-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }
        .col-xl-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }
        .col-xl-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .col-xl-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }
        .col-xl-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }
        .col-xl-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }
        .col-xl-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }
        .col-xl-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }
        .col-xl-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .order-xl-first {
            order: -1;
        }
        .order-xl-last {
            order: 13;
        }
        .order-xl-0 {
            order: 0;
        }
        .order-xl-1 {
            order: 1;
        }
        .order-xl-2 {
            order: 2;
        }
        .order-xl-3 {
            order: 3;
        }
        .order-xl-4 {
            order: 4;
        }
        .order-xl-5 {
            order: 5;
        }
        .order-xl-6 {
            order: 6;
        }
        .order-xl-7 {
            order: 7;
        }
        .order-xl-8 {
            order: 8;
        }
        .order-xl-9 {
            order: 9;
        }
        .order-xl-10 {
            order: 10;
        }
        .order-xl-11 {
            order: 11;
        }
        .order-xl-12 {
            order: 12;
        }
        .offset-xl-0 {
            margin-left: 0;
        }
        .offset-xl-1 {
            margin-left: 8.33333%;
        }
        .offset-xl-2 {
            margin-left: 16.66667%;
        }
        .offset-xl-3 {
            margin-left: 25%;
        }
        .offset-xl-4 {
            margin-left: 33.33333%;
        }
        .offset-xl-5 {
            margin-left: 41.66667%;
        }
        .offset-xl-6 {
            margin-left: 50%;
        }
        .offset-xl-7 {
            margin-left: 58.33333%;
        }
        .offset-xl-8 {
            margin-left: 66.66667%;
        }
        .offset-xl-9 {
            margin-left: 75%;
        }
        .offset-xl-10 {
            margin-left: 83.33333%;
        }
        .offset-xl-11 {
            margin-left: 91.66667%;
        }
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #727E8C;
    }

    .table th,
    .table td {
        padding: 1.15rem 2rem;
        vertical-align: top;
        border-top: 1px solid #DFE3E7;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #DFE3E7;
    }

    .table tbody + tbody {
        border-top: 2px solid #DFE3E7;
    }

    .table-sm th,
    .table-sm td {
        padding: 0.3rem;
    }

    .table-bordered {
        border: 1px solid #DFE3E7;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #DFE3E7;
    }

    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px;
    }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody + tbody {
        border: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #fafbfb;
    }

    .table-hover tbody tr:hover {
        color: #727E8C;
        background-color: #F2F4F4;
    }

    .table-primary,
    .table-primary > th,
    .table-primary > td {
        background-color: #d1dffa;
    }

    .table-primary th,
    .table-primary td,
    .table-primary thead th,
    .table-primary tbody + tbody {
        border-color: #a9c4f6;
    }

    .table-hover .table-primary:hover {
        background-color: #bacff8;
    }

    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
        background-color: #bacff8;
    }

    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
        background-color: #cbd2da;
    }

    .table-secondary th,
    .table-secondary td,
    .table-secondary thead th,
    .table-secondary tbody + tbody {
        border-color: #9facba;
    }

    .table-hover .table-secondary:hover {
        background-color: #bcc5cf;
    }

    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
        background-color: #bcc5cf;
    }

    .table-success,
    .table-success > th,
    .table-success > td {
        background-color: #c8f5de;
    }

    .table-success th,
    .table-success td,
    .table-success thead th,
    .table-success tbody + tbody {
        border-color: #98ecc2;
    }

    .table-hover .table-success:hover {
        background-color: #b2f1d1;
    }

    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
        background-color: #b2f1d1;
    }

    .table-info,
    .table-info > th,
    .table-info > td {
        background-color: #b8f2f5;
    }

    .table-info th,
    .table-info td,
    .table-info thead th,
    .table-info tbody + tbody {
        border-color: #7ae6ed;
    }

    .table-hover .table-info:hover {
        background-color: #a2eef2;
    }

    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
        background-color: #a2eef2;
    }

    .table-warning,
    .table-warning > th,
    .table-warning > td {
        background-color: #fee8ca;
    }

    .table-warning th,
    .table-warning td,
    .table-warning thead th,
    .table-warning tbody + tbody {
        border-color: #fed49c;
    }

    .table-hover .table-warning:hover {
        background-color: #feddb1;
    }

    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
        background-color: #feddb1;
    }

    .table-danger,
    .table-danger > th,
    .table-danger > td {
        background-color: #ffd1d1;
    }

    .table-danger th,
    .table-danger td,
    .table-danger thead th,
    .table-danger tbody + tbody {
        border-color: #ffaaaa;
    }

    .table-hover .table-danger:hover {
        background-color: #ffb8b8;
    }

    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
        background-color: #ffb8b8;
    }

    .table-light,
    .table-light > th,
    .table-light > td {
        background-color: #e5e9ed;
    }

    .table-light th,
    .table-light td,
    .table-light thead th,
    .table-light tbody + tbody {
        border-color: #cfd5dd;
    }

    .table-hover .table-light:hover {
        background-color: #d6dce3;
    }

    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
        background-color: #d6dce3;
    }

    .table-dark,
    .table-dark > th,
    .table-dark > td {
        background-color: #c8cdd3;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
        border-color: #98a2ad;
    }

    .table-hover .table-dark:hover {
        background-color: #bac0c8;
    }

    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
        background-color: #bac0c8;
    }

    .table-active,
    .table-active > th,
    .table-active > td {
        background-color: #F2F4F4;
    }

    .table-hover .table-active:hover {
        background-color: #e4e8e8;
    }

    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
        background-color: #e4e8e8;
    }

    .table .thead-dark th {
        color: #FFFFFF;
        background-color: #475F7B;
        border-color: #40566F;
    }

    .table .thead-light th {
        color: #475F7B;
        background-color: #F2F4F4;
        border-color: #DFE3E7;
    }

    .table-dark {
        color: #FFFFFF;
        background-color: #475F7B;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th {
        border-color: #40566F;
    }

    .table-dark.table-bordered {
        border: 0;
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .table-dark.table-hover tbody tr:hover {
        color: #FFFFFF;
        background-color: rgba(255, 255, 255, 0.075);
    }

    @media (max-width: 575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .table-responsive-sm > .table-bordered {
            border: 0;
        }
    }

    @media (max-width: 767.98px) {
        .table-responsive-md {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .table-responsive-md > .table-bordered {
            border: 0;
        }
    }

    @media (max-width: 991.98px) {
        .table-responsive-lg {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .table-responsive-lg > .table-bordered {
            border: 0;
        }
    }

    @media (max-width: 1199.98px) {
        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .table-responsive-xl > .table-bordered {
            border: 0;
        }
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive > .table-bordered {
        border: 0;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.4em + 0.94rem + 3.7px);
        padding: 0.47rem 0.8rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.4;
        color: #475F7B;
        background-color: #FFFFFF;
        background-clip: padding-box;
        border: 1px solid #DFE3E7;
        border-radius: 0.267rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .form-control {
            transition: none;
        }
    }

    .form-control::-ms-expand {
        background-color: transparent;
        border: 0;
    }

    .form-control:focus {
        color: #475F7B;
        background-color: #FFFFFF;
        border-color: #5A8DEE;
        outline: 0;
        box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .form-control::placeholder {
        color: #828D99;
        opacity: 1;
    }

    .form-control:disabled, .form-control[readonly] {
        background-color: #F2F4F4;
        opacity: 1;
    }

    select.form-control:focus::-ms-value {
        color: #475F7B;
        background-color: #FFFFFF;
    }

    .form-control-file,
    .form-control-range {
        display: block;
        width: 100%;
    }

    .col-form-label {
        padding-top: calc(0.47rem + 1px);
        padding-bottom: calc(0.47rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.4;
    }

    .col-form-label-lg {
        padding-top: calc(0.667rem + 1px);
        padding-bottom: calc(0.667rem + 1px);
        font-size: 1.2rem;
        line-height: 1.4;
    }

    .col-form-label-sm {
        padding-top: calc(0.35rem + 1px);
        padding-bottom: calc(0.35rem + 1px);
        font-size: 0.8rem;
        line-height: 1.1;
    }

    .form-control-plaintext {
        display: block;
        width: 100%;
        padding-top: 0.47rem;
        padding-bottom: 0.47rem;
        margin-bottom: 0;
        line-height: 1.4;
        color: #727E8C;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0;
    }

    .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
        padding-right: 0;
        padding-left: 0;
    }

    .form-control-sm {
        height: calc(1.1em + 0.94rem + 3.7px);
        padding: 0.35rem 0.7rem;
        font-size: 0.8rem;
        line-height: 1.1;
        border-radius: 0.267rem;
    }

    .form-control-lg {
        height: calc(1.4em + 1.334rem + 3.7px);
        padding: 0.667rem 0.8rem;
        font-size: 1.2rem;
        line-height: 1.4;
        border-radius: 0.267rem;
    }

    select.form-control[size], select.form-control[multiple] {
        height: auto;
    }

    textarea.form-control {
        height: auto;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-text {
        display: block;
        margin-top: 0.25rem;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px;
    }

    .form-row > .col,
    .form-row > [class*="col-"] {
        padding-right: 5px;
        padding-left: 5px;
    }

    .form-check {
        position: relative;
        display: block;
        padding-left: 1.25rem;
    }

    .form-check-input {
        position: absolute;
        margin-top: 0.3rem;
        margin-left: -1.25rem;
    }

    .form-check-input:disabled ~ .form-check-label {
        color: #828D99;
    }

    .form-check-label {
        margin-bottom: 0;
    }

    .form-check-inline {
        display: inline-flex;
        align-items: center;
        padding-left: 0;
        margin-right: 0.75rem;
    }

    .form-check-inline .form-check-input {
        position: static;
        margin-top: 0;
        margin-right: 0.3125rem;
        margin-left: 0;
    }

    .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #39DA8A;
    }

    .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.267rem 0.867rem;
        margin-top: .1rem;
        font-size: 0.8rem;
        line-height: 1.4;
        color: #324356;
        background-color: rgba(57, 218, 138, 0.2);
        border-radius: 0.267rem;
    }

    .was-validated .form-control:valid, .form-control.is-valid {
        border-color: #39DA8A;
        padding-right: calc(1.4em + 1.269rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2339DA8A' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: center right calc(0.35em + 0.235rem);
        background-size: calc(0.7em + 0.47rem) calc(0.7em + 0.47rem);
    }

    .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
        border-color: #39DA8A;
        box-shadow: 0 0 0 0.2rem rgba(57, 218, 138, 0.25);
    }

    .was-validated .form-control:valid ~ .valid-feedback,
    .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
    .form-control.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated textarea.form-control:valid, textarea.form-control.is-valid {
        padding-right: calc(1.4em + 1.269rem);
        background-position: top calc(0.35em + 0.235rem) right calc(0.35em + 0.235rem);
    }

    .was-validated .custom-select:valid, .custom-select.is-valid {
        border-color: #39DA8A;
        padding-right: calc((1em + 0.94rem) * 3 / 4 + 1.8rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23394C62' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.8rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2339DA8A' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #FFFFFF no-repeat center right 1.8rem/calc(0.7em + 0.47rem) calc(0.7em + 0.47rem);
    }

    .was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
        border-color: #39DA8A;
        box-shadow: 0 0 0 0.2rem rgba(57, 218, 138, 0.25);
    }

    .was-validated .custom-select:valid ~ .valid-feedback,
    .was-validated .custom-select:valid ~ .valid-tooltip, .custom-select.is-valid ~ .valid-feedback,
    .custom-select.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated .form-control-file:valid ~ .valid-feedback,
    .was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
    .form-control-file.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
        color: #39DA8A;
    }

    .was-validated .form-check-input:valid ~ .valid-feedback,
    .was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
    .form-check-input.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
        color: #39DA8A;
    }

    .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
        border-color: #39DA8A;
    }

    .was-validated .custom-control-input:valid ~ .valid-feedback,
    .was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
    .custom-control-input.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
        border-color: #64e2a3;
        background-color: #64e2a3;
    }

    .was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 0.2rem rgba(57, 218, 138, 0.25);
    }

    .was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
        border-color: #39DA8A;
    }

    .was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
        border-color: #39DA8A;
    }

    .was-validated .custom-file-input:valid ~ .valid-feedback,
    .was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
    .custom-file-input.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
        border-color: #39DA8A;
        box-shadow: 0 0 0 0.2rem rgba(57, 218, 138, 0.25);
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #FF5B5C;
    }

    .invalid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.267rem 0.867rem;
        margin-top: .1rem;
        font-size: 0.8rem;
        line-height: 1.4;
        color: #FFFFFF;
        background-color: rgba(255, 91, 92, 0.2);
        border-radius: 0.267rem;
    }

    .was-validated .form-control:invalid, .form-control.is-invalid {
        border-color: #FF5B5C;
        padding-right: calc(1.4em + 1.269rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23FF5B5C' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23FF5B5C' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
        background-repeat: no-repeat;
        background-position: center right calc(0.35em + 0.235rem);
        background-size: calc(0.7em + 0.47rem) calc(0.7em + 0.47rem);
    }

    .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
        border-color: #FF5B5C;
        box-shadow: 0 0 0 0.2rem rgba(255, 91, 92, 0.25);
    }

    .was-validated .form-control:invalid ~ .invalid-feedback,
    .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
    .form-control.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
        padding-right: calc(1.4em + 1.269rem);
        background-position: top calc(0.35em + 0.235rem) right calc(0.35em + 0.235rem);
    }

    .was-validated .custom-select:invalid, .custom-select.is-invalid {
        border-color: #FF5B5C;
        padding-right: calc((1em + 0.94rem) * 3 / 4 + 1.8rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23394C62' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.8rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23FF5B5C' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23FF5B5C' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #FFFFFF no-repeat center right 1.8rem/calc(0.7em + 0.47rem) calc(0.7em + 0.47rem);
    }

    .was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
        border-color: #FF5B5C;
        box-shadow: 0 0 0 0.2rem rgba(255, 91, 92, 0.25);
    }

    .was-validated .custom-select:invalid ~ .invalid-feedback,
    .was-validated .custom-select:invalid ~ .invalid-tooltip, .custom-select.is-invalid ~ .invalid-feedback,
    .custom-select.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated .form-control-file:invalid ~ .invalid-feedback,
    .was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
    .form-control-file.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
        color: #FF5B5C;
    }

    .was-validated .form-check-input:invalid ~ .invalid-feedback,
    .was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
    .form-check-input.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
        color: #FF5B5C;
    }

    .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
        border-color: #FF5B5C;
    }

    .was-validated .custom-control-input:invalid ~ .invalid-feedback,
    .was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
    .custom-control-input.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
        border-color: #ff8e8f;
        background-color: #ff8e8f;
    }

    .was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 0.2rem rgba(255, 91, 92, 0.25);
    }

    .was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
        border-color: #FF5B5C;
    }

    .was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
        border-color: #FF5B5C;
    }

    .was-validated .custom-file-input:invalid ~ .invalid-feedback,
    .was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
    .custom-file-input.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
        border-color: #FF5B5C;
        box-shadow: 0 0 0 0.2rem rgba(255, 91, 92, 0.25);
    }

    .form-inline {
        display: flex;
        flex-flow: row wrap;
        align-items: center;
    }

    .form-inline .form-check {
        width: 100%;
    }

    @media (min-width: 576px) {
        .form-inline label {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
        }
        .form-inline .form-group {
            display: flex;
            flex: 0 0 auto;
            flex-flow: row wrap;
            align-items: center;
            margin-bottom: 0;
        }
        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle;
        }
        .form-inline .form-control-plaintext {
            display: inline-block;
        }
        .form-inline .input-group,
        .form-inline .custom-select {
            width: auto;
        }
        .form-inline .form-check {
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            padding-left: 0;
        }
        .form-inline .form-check-input {
            position: relative;
            flex-shrink: 0;
            margin-top: 0;
            margin-right: 0.25rem;
            margin-left: 0;
        }
        .form-inline .custom-control {
            align-items: center;
            justify-content: center;
        }
        .form-inline .custom-control-label {
            margin-bottom: 0;
        }
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #727E8C;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        background-color: transparent;
        border: 0 solid transparent;
        padding: 0.467rem 1.5rem;
        font-size: 1rem;
        line-height: 1.6rem;
        border-radius: 0.267rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .btn {
            transition: none;
        }
    }

    .btn:hover {
        color: #727E8C;
        text-decoration: none;
    }

    .btn:focus, .btn.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(90, 141, 238, 0.25);
    }

    .btn.disabled, .btn:disabled {
        opacity: 0.45;
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
        pointer-events: none;
    }

    .btn-primary {
        color: #FFFFFF;
        /*background-color: #5A8DEE;
  border-color: #5A8DEE;*/
        background-color: #525253;
        border-color: #525253;
    }

    .btn-primary:hover {
        color: #FFFFFF;
        background-color: #3775ea;
        border-color: #2c6de9;
    }

    .btn-primary:focus, .btn-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(115, 158, 241, 0.5);
    }

    .btn-primary.disabled, .btn-primary:disabled {
        color: #FFFFFF;
        background-color: #5A8DEE;
        border-color: #5A8DEE;
    }

    .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
    .show > .btn-primary.dropdown-toggle {
        color: #FFFFFF;
        background-color: #2c6de9;
        border-color: #2065e8;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(115, 158, 241, 0.5);
    }

    .btn-secondary {
        color: #FFFFFF;
        background-color: #475F7B;
        border-color: #475F7B;
    }

    .btn-secondary:hover {
        color: #FFFFFF;
        background-color: #394c63;
        border-color: #34465b;
    }

    .btn-secondary:focus, .btn-secondary.focus {
        box-shadow: 0 0 0 0.2rem rgba(99, 119, 143, 0.5);
    }

    .btn-secondary.disabled, .btn-secondary:disabled {
        color: #FFFFFF;
        background-color: #475F7B;
        border-color: #475F7B;
    }

    .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
    .show > .btn-secondary.dropdown-toggle {
        color: #FFFFFF;
        background-color: #34465b;
        border-color: #304053;
    }

    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(99, 119, 143, 0.5);
    }

    .btn-success {
        color: #324356;
        background-color: #39DA8A;
        border-color: #39DA8A;
    }

    .btn-success:hover {
        color: #FFFFFF;
        background-color: #25c777;
        border-color: #23bd70;
    }

    .btn-success:focus, .btn-success.focus {
        box-shadow: 0 0 0 0.2rem rgba(56, 195, 130, 0.5);
    }

    .btn-success.disabled, .btn-success:disabled {
        color: #324356;
        background-color: #39DA8A;
        border-color: #39DA8A;
    }

    .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
    .show > .btn-success.dropdown-toggle {
        color: #FFFFFF;
        background-color: #23bd70;
        border-color: #21b26a;
    }

    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(56, 195, 130, 0.5);
    }

    .btn-info {
        color: #FFFFFF;
        background-color: #00CFDD;
        border-color: #00CFDD;
    }

    .btn-info:hover {
        color: #FFFFFF;
        background-color: #00abb7;
        border-color: #009faa;
    }

    .btn-info:focus, .btn-info.focus {
        box-shadow: 0 0 0 0.2rem rgba(38, 214, 226, 0.5);
    }

    .btn-info.disabled, .btn-info:disabled {
        color: #FFFFFF;
        background-color: #00CFDD;
        border-color: #00CFDD;
    }

    .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
    .show > .btn-info.dropdown-toggle {
        color: #FFFFFF;
        background-color: #009faa;
        border-color: #00939d;
    }

    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(38, 214, 226, 0.5);
    }

    .btn-warning {
        color: #324356;
        background-color: #FDAC41;
        border-color: #FDAC41;
    }

    .btn-warning:hover {
        color: #324356;
        background-color: #fd9b1b;
        border-color: #fc960f;
    }

    .btn-warning:focus, .btn-warning.focus {
        box-shadow: 0 0 0 0.2rem rgba(223, 156, 68, 0.5);
    }

    .btn-warning.disabled, .btn-warning:disabled {
        color: #324356;
        background-color: #FDAC41;
        border-color: #FDAC41;
    }

    .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
    .show > .btn-warning.dropdown-toggle {
        color: #324356;
        background-color: #fc960f;
        border-color: #fc9003;
    }

    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(223, 156, 68, 0.5);
    }

    .btn-danger {
        color: #FFFFFF;
        background-color: #FF5B5C;
        border-color: #FF5B5C;
    }

    .btn-danger:hover {
        color: #FFFFFF;
        background-color: #ff3536;
        border-color: #ff2829;
    }

    .btn-danger:focus, .btn-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 116, 116, 0.5);
    }

    .btn-danger.disabled, .btn-danger:disabled {
        color: #FFFFFF;
        background-color: #FF5B5C;
        border-color: #FF5B5C;
    }

    .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
    .show > .btn-danger.dropdown-toggle {
        color: #FFFFFF;
        background-color: #ff2829;
        border-color: #ff1b1d;
    }

    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 116, 116, 0.5);
    }

    .btn-light {
        color: #324356;
        background-color: #A3AFBD;
        border-color: #A3AFBD;
    }

    .btn-light:hover {
        color: #324356;
        background-color: #8d9cad;
        border-color: #8595a8;
    }

    .btn-light:focus, .btn-light.focus {
        box-shadow: 0 0 0 0.2rem rgba(146, 159, 174, 0.5);
    }

    .btn-light.disabled, .btn-light:disabled {
        color: #324356;
        background-color: #A3AFBD;
        border-color: #A3AFBD;
    }

    .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
    .show > .btn-light.dropdown-toggle {
        color: #FFFFFF;
        background-color: #8595a8;
        border-color: #7e8fa2;
    }

    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(146, 159, 174, 0.5);
    }

    .btn-dark {
        color: #FFFFFF;
        background-color: #394C62;
        border-color: #394C62;
    }

    .btn-dark:hover {
        color: #FFFFFF;
        background-color: #2b394a;
        border-color: #263342;
    }

    .btn-dark:focus, .btn-dark.focus {
        box-shadow: 0 0 0 0.2rem rgba(87, 103, 122, 0.5);
    }

    .btn-dark.disabled, .btn-dark:disabled {
        color: #FFFFFF;
        background-color: #394C62;
        border-color: #394C62;
    }

    .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
    .show > .btn-dark.dropdown-toggle {
        color: #FFFFFF;
        background-color: #263342;
        border-color: #222d3a;
    }

    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(87, 103, 122, 0.5);
    }

    .btn-outline-primary {
        color: #5A8DEE;
        border-color: #5A8DEE;
    }

    .btn-outline-primary:hover {
        color: #FFFFFF;
        background-color: #5A8DEE;
        border-color: #5A8DEE;
    }

    .btn-outline-primary:focus, .btn-outline-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(90, 141, 238, 0.5);
    }

    .btn-outline-primary.disabled, .btn-outline-primary:disabled {
        color: #5A8DEE;
        background-color: transparent;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
    .show > .btn-outline-primary.dropdown-toggle {
        color: #FFFFFF;
        background-color: #5A8DEE;
        border-color: #5A8DEE;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(90, 141, 238, 0.5);
    }

    .btn-outline-secondary {
        color: #475F7B;
        border-color: #475F7B;
    }

    .btn-outline-secondary:hover {
        color: #FFFFFF;
        background-color: #475F7B;
        border-color: #475F7B;
    }

    .btn-outline-secondary:focus, .btn-outline-secondary.focus {
        box-shadow: 0 0 0 0.2rem rgba(71, 95, 123, 0.5);
    }

    .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
        color: #475F7B;
        background-color: transparent;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .show > .btn-outline-secondary.dropdown-toggle {
        color: #FFFFFF;
        background-color: #475F7B;
        border-color: #475F7B;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(71, 95, 123, 0.5);
    }

    .btn-outline-success {
        color: #39DA8A;
        border-color: #39DA8A;
    }

    .btn-outline-success:hover {
        color: #324356;
        background-color: #39DA8A;
        border-color: #39DA8A;
    }

    .btn-outline-success:focus, .btn-outline-success.focus {
        box-shadow: 0 0 0 0.2rem rgba(57, 218, 138, 0.5);
    }

    .btn-outline-success.disabled, .btn-outline-success:disabled {
        color: #39DA8A;
        background-color: transparent;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
    .show > .btn-outline-success.dropdown-toggle {
        color: #324356;
        background-color: #39DA8A;
        border-color: #39DA8A;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(57, 218, 138, 0.5);
    }

    .btn-outline-info {
        color: #00CFDD;
        border-color: #00CFDD;
    }

    .btn-outline-info:hover {
        color: #FFFFFF;
        background-color: #00CFDD;
        border-color: #00CFDD;
    }

    .btn-outline-info:focus, .btn-outline-info.focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 207, 221, 0.5);
    }

    .btn-outline-info.disabled, .btn-outline-info:disabled {
        color: #00CFDD;
        background-color: transparent;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
    .show > .btn-outline-info.dropdown-toggle {
        color: #FFFFFF;
        background-color: #00CFDD;
        border-color: #00CFDD;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 207, 221, 0.5);
    }

    .btn-outline-warning {
        color: #FDAC41;
        border-color: #FDAC41;
    }

    .btn-outline-warning:hover {
        color: #324356;
        background-color: #FDAC41;
        border-color: #FDAC41;
    }

    .btn-outline-warning:focus, .btn-outline-warning.focus {
        box-shadow: 0 0 0 0.2rem rgba(253, 172, 65, 0.5);
    }

    .btn-outline-warning.disabled, .btn-outline-warning:disabled {
        color: #FDAC41;
        background-color: transparent;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
    .show > .btn-outline-warning.dropdown-toggle {
        color: #324356;
        background-color: #FDAC41;
        border-color: #FDAC41;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(253, 172, 65, 0.5);
    }

    .btn-outline-danger {
        color: #FF5B5C;
        border-color: #FF5B5C;
    }

    .btn-outline-danger:hover {
        color: #FFFFFF;
        background-color: #FF5B5C;
        border-color: #FF5B5C;
    }

    .btn-outline-danger:focus, .btn-outline-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 91, 92, 0.5);
    }

    .btn-outline-danger.disabled, .btn-outline-danger:disabled {
        color: #FF5B5C;
        background-color: transparent;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
    .show > .btn-outline-danger.dropdown-toggle {
        color: #FFFFFF;
        background-color: #FF5B5C;
        border-color: #FF5B5C;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 91, 92, 0.5);
    }

    .btn-outline-light {
        color: #A3AFBD;
        border-color: #A3AFBD;
    }

    .btn-outline-light:hover {
        color: #324356;
        background-color: #A3AFBD;
        border-color: #A3AFBD;
    }

    .btn-outline-light:focus, .btn-outline-light.focus {
        box-shadow: 0 0 0 0.2rem rgba(163, 175, 189, 0.5);
    }

    .btn-outline-light.disabled, .btn-outline-light:disabled {
        color: #A3AFBD;
        background-color: transparent;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
    .show > .btn-outline-light.dropdown-toggle {
        color: #324356;
        background-color: #A3AFBD;
        border-color: #A3AFBD;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(163, 175, 189, 0.5);
    }

    .btn-outline-dark {
        color: #394C62;
        border-color: #394C62;
    }

    .btn-outline-dark:hover {
        color: #FFFFFF;
        background-color: #394C62;
        border-color: #394C62;
    }

    .btn-outline-dark:focus, .btn-outline-dark.focus {
        box-shadow: 0 0 0 0.2rem rgba(57, 76, 98, 0.5);
    }

    .btn-outline-dark.disabled, .btn-outline-dark:disabled {
        color: #394C62;
        background-color: transparent;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
    .show > .btn-outline-dark.dropdown-toggle {
        color: #FFFFFF;
        background-color: #394C62;
        border-color: #394C62;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(57, 76, 98, 0.5);
    }

    .btn-link {
        font-weight: 400;
        color: #5A8DEE;
        text-decoration: none;
    }

    .btn-link:hover {
        color: #175ee4;
        text-decoration: none;
    }

    .btn-link:focus, .btn-link.focus {
        text-decoration: none;
        box-shadow: none;
    }

    .btn-link:disabled, .btn-link.disabled {
        color: #828D99;
        pointer-events: none;
    }

    .btn-lg, .btn-group-lg > .btn {
        padding: 0.6rem 1.8rem;
        font-size: 1.2rem;
        line-height: 1.7;
        border-radius: 0.267rem;
    }

    .btn-sm, .btn-group-sm > .btn {
        padding: 0.467rem 1.2rem;
        font-size: 0.8rem;
        line-height: 1.4;
        border-radius: 0.267rem;
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    .btn-block + .btn-block {
        margin-top: 0.5rem;
    }

    input[type="submit"].btn-block,
    input[type="reset"].btn-block,
    input[type="button"].btn-block {
        width: 100%;
    }

    .fade {
        transition: opacity 0.15s linear;
    }

    @media (prefers-reduced-motion: reduce) {
        .fade {
            transition: none;
        }
    }

    .fade:not(.show) {
        opacity: 0;
    }

    .collapse:not(.show) {
        display: none;
    }

    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        transition: height 0.35s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .collapsing {
            transition: none;
        }
    }

    .dropup,
    .dropright,
    .dropdown,
    .dropleft {
        position: relative;
    }

    .dropdown-toggle {
        white-space: nowrap;
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 10;
        display: none;
        float: left;
        min-width: 9.65rem;
        padding: 0.4rem 0;
        margin: 0.5rem 0 0;
        font-size: 0.8rem;
        color: #727E8C;
        text-align: left;
        list-style: none;
        background-color: #FFFFFF;
        background-clip: padding-box;
        border: 1px solid #DFE3E7;
        border-radius: 5px;
    }

    .dropdown-menu-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-right {
        right: 0;
        left: auto;
    }

    @media (min-width: 576px) {
        .dropdown-menu-sm-left {
            right: auto;
            left: 0;
        }
        .dropdown-menu-sm-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 768px) {
        .dropdown-menu-md-left {
            right: auto;
            left: 0;
        }
        .dropdown-menu-md-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 992px) {
        .dropdown-menu-lg-left {
            right: auto;
            left: 0;
        }
        .dropdown-menu-lg-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 1200px) {
        .dropdown-menu-xl-left {
            right: auto;
            left: 0;
        }
        .dropdown-menu-xl-right {
            right: 0;
            left: auto;
        }
    }

    .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: 0.5rem;
    }

    .dropup .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0;
        border-right: 0.3em solid transparent;
        border-bottom: 0.3em solid;
        border-left: 0.3em solid transparent;
    }

    .dropup .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropright .dropdown-menu {
        top: 0;
        right: auto;
        left: 100%;
        margin-top: 0;
        margin-left: 0.5rem;
    }

    .dropright .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0;
        border-bottom: 0.3em solid transparent;
        border-left: 0.3em solid;
    }

    .dropright .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropright .dropdown-toggle::after {
        vertical-align: 0;
    }

    .dropleft .dropdown-menu {
        top: 0;
        right: 100%;
        left: auto;
        margin-top: 0;
        margin-right: 0.5rem;
    }

    .dropleft .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
    }

    .dropleft .dropdown-toggle::after {
        display: none;
    }

    .dropleft .dropdown-toggle::before {
        display: inline-block;
        margin-right: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0.3em solid;
        border-bottom: 0.3em solid transparent;
    }

    .dropleft .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropleft .dropdown-toggle::before {
        vertical-align: 0;
    }

    .dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
        right: auto;
        bottom: auto;
    }

    .dropdown-divider {
        height: 0;
        margin: 0.5rem 0;
        overflow: hidden;
        border-top: 1px solid #DFE3E7;
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.8rem 1.6rem;
        clear: both;
        font-weight: 400;
        color: #475F7B;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    .dropdown-item:hover, .dropdown-item:focus {
        color: #475F7B;
        text-decoration: none;
        background-color: #F2F4F4;
    }

    .dropdown-item.active, .dropdown-item:active {
        color: #FFFFFF;
        text-decoration: none;
        background-color: #5A8DEE;
    }

    .dropdown-item.disabled, .dropdown-item:disabled {
        pointer-events: none;
        background-color: transparent;
    }

    .dropdown-menu.show {
        display: block;
    }

    .dropdown-header {
        display: block;
        padding: 0.4rem 1.6rem;
        margin-bottom: 0;
        font-size: 0.8rem;
        color: #475F7B;
        white-space: nowrap;
    }

    .dropdown-item-text {
        display: block;
        padding: 0.8rem 1.6rem;
        color: #475F7B;
    }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: inline-flex;
        vertical-align: middle;
    }

    .btn-group > .btn,
    .btn-group-vertical > .btn {
        position: relative;
        flex: 1 1 auto;
    }

    .btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
        z-index: 1;
    }

    .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
        z-index: 1;
    }

    .btn-toolbar {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .btn-toolbar .input-group {
        width: auto;
    }

    .btn-group > .btn:not(:first-child),
    .btn-group > .btn-group:not(:first-child) {
        margin-left: 0;
    }

    .btn-group > .btn:not(:last-child):not(.dropdown-toggle),
    .btn-group > .btn-group:not(:last-child) > .btn {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .btn-group > .btn:not(:first-child),
    .btn-group > .btn-group:not(:first-child) > .btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .dropdown-toggle-split {
        padding-right: 1.125rem;
        padding-left: 1.125rem;
    }

    .dropdown-toggle-split::after,
    .dropup .dropdown-toggle-split::after,
    .dropright .dropdown-toggle-split::after {
        margin-left: 0;
    }

    .dropleft .dropdown-toggle-split::before {
        margin-right: 0;
    }

    .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
        padding-right: 0.9rem;
        padding-left: 0.9rem;
    }

    .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
        padding-right: 1.35rem;
        padding-left: 1.35rem;
    }

    .btn-group-vertical {
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
    }

    .btn-group-vertical > .btn,
    .btn-group-vertical > .btn-group {
        width: 100%;
    }

    .btn-group-vertical > .btn:not(:first-child),
    .btn-group-vertical > .btn-group:not(:first-child) {
        margin-top: 0;
    }

    .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
    .btn-group-vertical > .btn-group:not(:last-child) > .btn {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .btn-group-vertical > .btn:not(:first-child),
    .btn-group-vertical > .btn-group:not(:first-child) > .btn {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .btn-group-toggle > .btn,
    .btn-group-toggle > .btn-group > .btn {
        margin-bottom: 0;
    }

    .btn-group-toggle > .btn input[type="radio"],
    .btn-group-toggle > .btn input[type="checkbox"],
    .btn-group-toggle > .btn-group > .btn input[type="radio"],
    .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none;
    }

    .input-group {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        width: 100%;
    }

    .input-group > .form-control,
    .input-group > .form-control-plaintext,
    .input-group > .custom-select,
    .input-group > .custom-file {
        position: relative;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0;
    }

    .input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .form-control-plaintext + .form-control,
    .input-group > .form-control-plaintext + .custom-select,
    .input-group > .form-control-plaintext + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
        margin-left: -1px;
    }

    .input-group > .form-control:focus,
    .input-group > .custom-select:focus,
    .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
        z-index: 3;
    }

    .input-group > .custom-file .custom-file-input:focus {
        z-index: 4;
    }

    .input-group > .form-control:not(:last-child),
    .input-group > .custom-select:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group > .form-control:not(:first-child),
    .input-group > .custom-select:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .input-group > .custom-file {
        display: flex;
        align-items: center;
    }

    .input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::after {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group > .custom-file:not(:first-child) .custom-file-label {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .input-group-prepend,
    .input-group-append {
        display: flex;
    }

    .input-group-prepend .btn,
    .input-group-append .btn {
        position: relative;
        z-index: 2;
    }

    .input-group-prepend .btn:focus,
    .input-group-append .btn:focus {
        z-index: 3;
    }

    .input-group-prepend .btn + .btn,
    .input-group-prepend .btn + .input-group-text,
    .input-group-prepend .input-group-text + .input-group-text,
    .input-group-prepend .input-group-text + .btn,
    .input-group-append .btn + .btn,
    .input-group-append .btn + .input-group-text,
    .input-group-append .input-group-text + .input-group-text,
    .input-group-append .input-group-text + .btn {
        margin-left: -1px;
    }

    .input-group-prepend {
        margin-right: -1px;
    }

    .input-group-append {
        margin-left: -1px;
    }

    .input-group-text {
        display: flex;
        align-items: center;
        padding: 0.47rem 0.8rem;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.4;
        color: #475F7B;
        text-align: center;
        white-space: nowrap;
        background-color: #f0f4f7;
        border: 1px solid #DFE3E7;
        border-radius: 0.267rem;
    }

    .input-group-text input[type="radio"],
    .input-group-text input[type="checkbox"] {
        margin-top: 0;
    }

    .input-group-lg > .form-control:not(textarea),
    .input-group-lg > .custom-select {
        height: calc(1.4em + 1.334rem + 3.7px);
    }

    .input-group-lg > .form-control,
    .input-group-lg > .custom-select,
    .input-group-lg > .input-group-prepend > .input-group-text,
    .input-group-lg > .input-group-append > .input-group-text,
    .input-group-lg > .input-group-prepend > .btn,
    .input-group-lg > .input-group-append > .btn {
        padding: 0.667rem 0.8rem;
        font-size: 1.2rem;
        line-height: 1.4;
        border-radius: 0.267rem;
    }

    .input-group-sm > .form-control:not(textarea),
    .input-group-sm > .custom-select {
        height: calc(1.1em + 0.94rem + 3.7px);
    }

    .input-group-sm > .form-control,
    .input-group-sm > .custom-select,
    .input-group-sm > .input-group-prepend > .input-group-text,
    .input-group-sm > .input-group-append > .input-group-text,
    .input-group-sm > .input-group-prepend > .btn,
    .input-group-sm > .input-group-append > .btn {
        padding: 0.35rem 0.7rem;
        font-size: 0.8rem;
        line-height: 1.1;
        border-radius: 0.267rem;
    }

    .input-group-lg > .custom-select,
    .input-group-sm > .custom-select {
        padding-right: 1.8rem;
    }

    .input-group > .input-group-prepend > .btn,
    .input-group > .input-group-prepend > .input-group-text,
    .input-group > .input-group-append:not(:last-child) > .btn,
    .input-group > .input-group-append:not(:last-child) > .input-group-text,
    .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
    .input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group > .input-group-append > .btn,
    .input-group > .input-group-append > .input-group-text,
    .input-group > .input-group-prepend:not(:first-child) > .btn,
    .input-group > .input-group-prepend:not(:first-child) > .input-group-text,
    .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
    .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .custom-control {
        position: relative;
        display: block;
        min-height: 1.4rem;
        padding-left: 1.5rem;
    }

    .custom-control-inline {
        display: inline-flex;
        margin-right: 1rem;
    }

    .custom-control-input {
        position: absolute;
        z-index: -1;
        opacity: 0;
    }

    .custom-control-input:checked ~ .custom-control-label::before {
        color: #FFFFFF;
        border-color: #5A8DEE;
        background-color: #5A8DEE;
    }

    .custom-control-input:focus ~ .custom-control-label::before {
        box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
        border-color: #5A8DEE;
    }

    .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
        color: #FFFFFF;
        background-color: #fcfdff;
        border-color: #fcfdff;
    }

    .custom-control-input:disabled ~ .custom-control-label {
        color: #475F7B;
    }

    .custom-control-input:disabled ~ .custom-control-label::before {
        background-color: #F2F4F4;
    }

    .custom-control-label {
        position: relative;
        margin-bottom: 0;
        vertical-align: top;
    }

    .custom-control-label::before {
        position: absolute;
        top: 0.2rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        content: "";
        background-color: #FFFFFF;
        border: #DFE3E7 solid 1px;
    }

    .custom-control-label::after {
        position: absolute;
        top: 0.2rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        content: "";
        background: no-repeat 50% / 50% 50%;
    }

    .custom-checkbox .custom-control-label::before {
        border-radius: 0.267rem;
    }

    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23FFFFFF' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
    }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
        border-color: #5A8DEE;
        background-color: #5A8DEE;
    }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23FFFFFF' d='M0 2h4'/%3e%3c/svg%3e");
    }

    .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(90, 141, 238, 0.5);
    }

    .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
        background-color: rgba(90, 141, 238, 0.5);
    }

    .custom-radio .custom-control-label::before {
        border-radius: 50%;
    }

    .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23FFFFFF'/%3e%3c/svg%3e");
    }

    .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(90, 141, 238, 0.5);
    }

    .custom-switch {
        padding-left: 3.25rem;
    }

    .custom-switch .custom-control-label::before {
        left: -3.25rem;
        width: 2.75rem;
        pointer-events: all;
        border-radius: 0.8rem;
    }

    .custom-switch .custom-control-label::after {
        top: calc(0.2rem + 2px);
        left: calc(-3.25rem + 2px);
        width: 18px;
        height: 18px;
        background-color: #DFE3E7;
        border-radius: 0.8rem;
        transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-switch .custom-control-label::after {
            transition: none;
        }
    }

    .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
        background-color: #FFFFFF;
        transform: translateX(1.75rem);
    }

    .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(90, 141, 238, 0.5);
    }

    .custom-select {
        display: inline-block;
        width: 100%;
        height: calc(1.4em + 0.94rem + 3.7px);
        padding: 0.47rem 1.8rem 0.47rem 0.8rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.4;
        color: #475F7B;
        vertical-align: middle;
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23394C62' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.8rem center/8px 10px;
        background-color: #FFFFFF;
        border: 1px solid #DFE3E7;
        border-radius: 0.267rem;
        appearance: none;
    }

    .custom-select:focus {
        border-color: #5A8DEE;
        outline: 0;
        box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .custom-select:focus::-ms-value {
        color: #475F7B;
        background-color: #FFFFFF;
    }

    .custom-select[multiple], .custom-select[size]:not([size="1"]) {
        height: auto;
        padding-right: 0.8rem;
        background-image: none;
    }

    .custom-select:disabled {
        color: #475F7B;
        background-color: #828D99;
    }

    .custom-select::-ms-expand {
        display: none;
    }

    .custom-select-sm {
        height: calc(1.1em + 0.94rem + 3.7px);
        padding-top: 0.35rem;
        padding-bottom: 0.35rem;
        padding-left: 0.7rem;
        font-size: 0.8rem;
    }

    .custom-select-lg {
        height: calc(1.4em + 1.334rem + 3.7px);
        padding-top: 0.667rem;
        padding-bottom: 0.667rem;
        padding-left: 0.8rem;
        font-size: 1.2rem;
    }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 38px;
        margin-bottom: 0;
    }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: 38px;
        margin: 0;
        opacity: 0;
    }

    .custom-file-input:focus ~ .custom-file-label {
        border-color: #5A8DEE;
        box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .custom-file-input:disabled ~ .custom-file-label {
        background-color: #F2F4F4;
    }

    .custom-file-input:lang(en) ~ .custom-file-label::after {
        content: "Browse";
    }

    .custom-file-input ~ .custom-file-label[data-browse]::after {
        content: attr(data-browse);
    }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: 38px;
        padding: 0.65rem 0.8rem;
        font-weight: 400;
        line-height: 1.4;
        color: #475F7B;
        background-color: #FFFFFF;
        border: 1px solid #DFE3E7;
        border-radius: 0.267rem;
    }

    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: calc(1.4em + 1.269rem);
        padding: 0.65rem 0.8rem;
        line-height: 1.4;
        color: #475F7B;
        content: "Browse";
        background-color: #f0f4f7;
        border-left: inherit;
        border-radius: 0 0.267rem 0.267rem 0;
    }

    .custom-range {
        width: 100%;
        height: calc(1rem + 0.4rem);
        padding: 0;
        background-color: transparent;
        appearance: none;
    }

    .custom-range:focus {
        outline: none;
    }

    .custom-range:focus::-webkit-slider-thumb {
        box-shadow: 0 0 0 1px #F2F4F4, 0 3px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .custom-range:focus::-moz-range-thumb {
        box-shadow: 0 0 0 1px #F2F4F4, 0 3px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .custom-range:focus::-ms-thumb {
        box-shadow: 0 0 0 1px #F2F4F4, 0 3px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .custom-range::-moz-focus-outer {
        border: 0;
    }

    .custom-range::-webkit-slider-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: -0.25rem;
        background-color: #5A8DEE;
        border: 0;
        border-radius: 1rem;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-webkit-slider-thumb {
            transition: none;
        }
    }

    .custom-range::-webkit-slider-thumb:active {
        background-color: #fcfdff;
    }

    .custom-range::-webkit-slider-runnable-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #7E8FA3;
        border-color: transparent;
        border-radius: 1rem;
    }

    .custom-range::-moz-range-thumb {
        width: 1rem;
        height: 1rem;
        background-color: #5A8DEE;
        border: 0;
        border-radius: 1rem;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-moz-range-thumb {
            transition: none;
        }
    }

    .custom-range::-moz-range-thumb:active {
        background-color: #fcfdff;
    }

    .custom-range::-moz-range-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #7E8FA3;
        border-color: transparent;
        border-radius: 1rem;
    }

    .custom-range::-ms-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: 0;
        margin-right: 0.2rem;
        margin-left: 0.2rem;
        background-color: #5A8DEE;
        border: 0;
        border-radius: 1rem;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-ms-thumb {
            transition: none;
        }
    }

    .custom-range::-ms-thumb:active {
        background-color: #fcfdff;
    }

    .custom-range::-ms-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: transparent;
        border-color: transparent;
        border-width: 0.5rem;
    }

    .custom-range::-ms-fill-lower {
        background-color: #7E8FA3;
        border-radius: 1rem;
    }

    .custom-range::-ms-fill-upper {
        margin-right: 15px;
        background-color: #7E8FA3;
        border-radius: 1rem;
    }

    .custom-range:disabled::-webkit-slider-thumb {
        background-color: #596F88;
    }

    .custom-range:disabled::-webkit-slider-runnable-track {
        cursor: default;
    }

    .custom-range:disabled::-moz-range-thumb {
        background-color: #596F88;
    }

    .custom-range:disabled::-moz-range-track {
        cursor: default;
    }

    .custom-range:disabled::-ms-thumb {
        background-color: #596F88;
    }

    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            transition: none;
        }
    }

    .nav {
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .nav-link {
        display: block;
        padding: 0.567rem 1.33rem;
    }

    .nav-link:hover, .nav-link:focus {
        text-decoration: none;
    }

    .nav-link.disabled {
        color: #475F7B;
        pointer-events: none;
        cursor: default;
    }

    .nav-tabs {
        border-bottom: 1px solid #7E8FA3;
    }

    .nav-tabs .nav-item {
        margin-bottom: -1px;
    }

    .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: 0.267rem;
        border-top-right-radius: 0.267rem;
    }

    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
        border-color: transparent;
    }

    .nav-tabs .nav-link.disabled {
        color: #475F7B;
        background-color: transparent;
        border-color: transparent;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: #FFFFFF;
        background-color: #5A8DEE;
        border-color: transparent;
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .nav-pills .nav-link {
        border-radius: 0.267rem;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show > .nav-link {
        color: #FFFFFF;
        background-color: #5A8DEE;
    }

    .nav-fill .nav-item {
        flex: 1 1 auto;
        text-align: center;
    }

    .nav-justified .nav-item {
        flex-basis: 0;
        flex-grow: 1;
        text-align: center;
    }

    .tab-content > .tab-pane {
        display: none;
    }

    .tab-content > .active {
        display: block;
    }

    .navbar {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding: 0.5rem 1rem;
    }

    .navbar > .container,
    .navbar > .container-fluid {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
    }

    .navbar-brand {
        display: inline-block;
        padding-top: 0.245rem;
        padding-bottom: 0.245rem;
        margin-right: 1rem;
        font-size: 1.46rem;
        line-height: inherit;
        white-space: nowrap;
    }

    .navbar-brand:hover, .navbar-brand:focus {
        text-decoration: none;
    }

    .navbar-nav {
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0;
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none;
    }

    .navbar-text {
        display: inline-block;
        padding-top: 0.567rem;
        padding-bottom: 0.567rem;
    }

    .navbar-collapse {
        flex-basis: 100%;
        flex-grow: 1;
        align-items: center;
    }

    .navbar-toggler {
        padding: 0.25rem 0.75rem;
        font-size: 1.2rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 0.267rem;
    }

    .navbar-toggler:hover, .navbar-toggler:focus {
        text-decoration: none;
    }

    .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        content: "";
        background: no-repeat center center;
        background-size: 100% 100%;
    }

    @media (max-width: 575.98px) {
        .navbar-expand-sm > .container,
        .navbar-expand-sm > .container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 576px) {
        .navbar-expand-sm {
            flex-flow: row nowrap;
            justify-content: flex-start;
        }
        .navbar-expand-sm .navbar-nav {
            flex-direction: row;
        }
        .navbar-expand-sm .navbar-nav .dropdown-menu {
            position: absolute;
        }
        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }
        .navbar-expand-sm > .container,
        .navbar-expand-sm > .container-fluid {
            flex-wrap: nowrap;
        }
        .navbar-expand-sm .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }
        .navbar-expand-sm .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 767.98px) {
        .navbar-expand-md > .container,
        .navbar-expand-md > .container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 768px) {
        .navbar-expand-md {
            flex-flow: row nowrap;
            justify-content: flex-start;
        }
        .navbar-expand-md .navbar-nav {
            flex-direction: row;
        }
        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute;
        }
        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }
        .navbar-expand-md > .container,
        .navbar-expand-md > .container-fluid {
            flex-wrap: nowrap;
        }
        .navbar-expand-md .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }
        .navbar-expand-md .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 991.98px) {
        .navbar-expand-lg > .container,
        .navbar-expand-lg > .container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 992px) {
        .navbar-expand-lg {
            flex-flow: row nowrap;
            justify-content: flex-start;
        }
        .navbar-expand-lg .navbar-nav {
            flex-direction: row;
        }
        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute;
        }
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }
        .navbar-expand-lg > .container,
        .navbar-expand-lg > .container-fluid {
            flex-wrap: nowrap;
        }
        .navbar-expand-lg .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }
        .navbar-expand-lg .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 1199.98px) {
        .navbar-expand-xl > .container,
        .navbar-expand-xl > .container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 1200px) {
        .navbar-expand-xl {
            flex-flow: row nowrap;
            justify-content: flex-start;
        }
        .navbar-expand-xl .navbar-nav {
            flex-direction: row;
        }
        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute;
        }
        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }
        .navbar-expand-xl > .container,
        .navbar-expand-xl > .container-fluid {
            flex-wrap: nowrap;
        }
        .navbar-expand-xl .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }
        .navbar-expand-xl .navbar-toggler {
            display: none;
        }
    }

    .navbar-expand {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }

    .navbar-expand > .container,
    .navbar-expand > .container-fluid {
        padding-right: 0;
        padding-left: 0;
    }

    .navbar-expand .navbar-nav {
        flex-direction: row;
    }

    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand > .container,
    .navbar-expand > .container-fluid {
        flex-wrap: nowrap;
    }

    .navbar-expand .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }

    .navbar-expand .navbar-toggler {
        display: none;
    }

    .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 0.5);
    }

    .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
        color: rgba(0, 0, 0, 0.7);
    }

    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, 0.3);
    }

    .navbar-light .navbar-nav .show > .nav-link,
    .navbar-light .navbar-nav .active > .nav-link,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .nav-link.active {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.1);
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, 0.5);
    }

    .navbar-light .navbar-text a {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-dark .navbar-brand {
        color: #FFFFFF;
    }

    .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
        color: #FFFFFF;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.5);
    }

    .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
        color: rgba(255, 255, 255, 0.75);
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, 0.25);
    }

    .navbar-dark .navbar-nav .show > .nav-link,
    .navbar-dark .navbar-nav .active > .nav-link,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .nav-link.active {
        color: #FFFFFF;
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, 0.5);
        border-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, 0.5);
    }

    .navbar-dark .navbar-text a {
        color: #FFFFFF;
    }

    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
        color: #FFFFFF;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #FFFFFF;
        background-clip: border-box;
        border: 0px solid #dfe3e7;
        border-radius: 0.267rem;
    }

    .card > hr {
        margin-right: 0;
        margin-left: 0;
    }

    .card > .list-group:first-child .list-group-item:first-child {
        border-top-left-radius: 0.267rem;
        border-top-right-radius: 0.267rem;
    }

    .card > .list-group:last-child .list-group-item:last-child {
        border-bottom-right-radius: 0.267rem;
        border-bottom-left-radius: 0.267rem;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.7rem;
    }

    .card-title {
        margin-bottom: 1.4rem;
    }

    .card-subtitle {
        margin-top: -0.7rem;
        margin-bottom: 0;
    }

    .card-text:last-child {
        margin-bottom: 0;
    }

    .card-link:hover {
        text-decoration: none;
    }

    .card-link + .card-link {
        margin-left: 1.7rem;
    }

    .card-header {
        padding: 1.4rem 1.7rem;
        margin-bottom: 0;
        background-color: transparent;
        border-bottom: 0px solid #dfe3e7;
    }

    .card-header:first-child {
        border-radius: calc(0.267rem - 0px) calc(0.267rem - 0px) 0 0;
    }

    .card-header + .list-group .list-group-item:first-child {
        border-top: 0;
    }

    .card-footer {
        padding: 1.4rem 1.7rem;
        background-color: transparent;
        border-top: 0px solid #dfe3e7;
    }

    .card-footer:last-child {
        border-radius: 0 0 calc(0.267rem - 0px) calc(0.267rem - 0px);
    }

    .card-header-tabs {
        margin-right: -0.85rem;
        margin-bottom: -1.4rem;
        margin-left: -0.85rem;
        border-bottom: 0;
    }

    .card-header-pills {
        margin-right: -0.85rem;
        margin-left: -0.85rem;
    }

    .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1.25rem;
    }

    .card-img {
        width: 100%;
        border-radius: calc(0.267rem - 0px);
    }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(0.267rem - 0px);
        border-top-right-radius: calc(0.267rem - 0px);
    }

    .card-img-bottom {
        width: 100%;
        border-bottom-right-radius: calc(0.267rem - 0px);
        border-bottom-left-radius: calc(0.267rem - 0px);
    }

    .card-deck {
        display: flex;
        flex-direction: column;
    }

    .card-deck .card {
        margin-bottom: 0.75rem;
    }

    @media (min-width: 576px) {
        .card-deck {
            flex-flow: row wrap;
            margin-right: -0.75rem;
            margin-left: -0.75rem;
        }
        .card-deck .card {
            display: flex;
            flex: 1 0 0%;
            flex-direction: column;
            margin-right: 0.75rem;
            margin-bottom: 0;
            margin-left: 0.75rem;
        }
    }

    .card-group {
        display: flex;
        flex-direction: column;
    }

    .card-group > .card {
        margin-bottom: 0.75rem;
    }

    @media (min-width: 576px) {
        .card-group {
            flex-flow: row wrap;
        }
        .card-group > .card {
            flex: 1 0 0%;
            margin-bottom: 0;
        }
        .card-group > .card + .card {
            margin-left: 0;
            border-left: 0;
        }
        .card-group > .card:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .card-group > .card:not(:last-child) .card-img-top,
        .card-group > .card:not(:last-child) .card-header {
            border-top-right-radius: 0;
        }
        .card-group > .card:not(:last-child) .card-img-bottom,
        .card-group > .card:not(:last-child) .card-footer {
            border-bottom-right-radius: 0;
        }
        .card-group > .card:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .card-group > .card:not(:first-child) .card-img-top,
        .card-group > .card:not(:first-child) .card-header {
            border-top-left-radius: 0;
        }
        .card-group > .card:not(:first-child) .card-img-bottom,
        .card-group > .card:not(:first-child) .card-footer {
            border-bottom-left-radius: 0;
        }
    }

    .card-columns .card {
        margin-bottom: 1.4rem;
    }

    @media (min-width: 576px) {
        .card-columns {
            column-count: 3;
            column-gap: 1.6rem;
            orphans: 1;
            widows: 1;
        }
        .card-columns .card {
            display: inline-block;
            width: 100%;
        }
    }

    .accordion > .card {
        overflow: hidden;
    }

    .accordion > .card:not(:first-of-type) .card-header:first-child {
        border-radius: 0;
    }

    .accordion > .card:not(:first-of-type):not(:last-of-type) {
        border-bottom: 0;
        border-radius: 0;
    }

    .accordion > .card:first-of-type {
        border-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .accordion > .card:last-of-type {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .accordion > .card .card-header {
        margin-bottom: 0px;
    }

    .breadcrumb {
        display: flex;
        flex-wrap: wrap;
        padding: 1.05rem 1.67rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #F2F4F4;
        border-radius: 0.267rem;
    }

    .breadcrumb-item + .breadcrumb-item {
        padding-left: 0.93rem;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        display: inline-block;
        padding-right: 0.93rem;
        color: #475F7B;
        content: "|";
    }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: underline;
    }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: none;
    }

    .breadcrumb-item.active {
        /*color: #5A8DEE;*/
        color: black;
        font-weight: bold;
        text-decoration: underline;
    }

    .pagination {
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: 0.267rem;
    }

    .page-link {
        position: relative;
        display: block;
        padding: 0.47rem 0.73rem;
        margin-left: 0;
        line-height: 1.25;
        color: #3F3356;
        background-color: #FFFFFF;
        border: 0 solid #DFE3E7;
    }

    .page-link:hover {
        z-index: 2;
        color: #175ee4;
        text-decoration: none;
        background-color: #828D99;
        border-color: #7E8FA3;
    }

    .page-link:focus {
        z-index: 2;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(90, 141, 238, 0.25);
    }

    .page-item:first-child .page-link {
        margin-left: 0;
        border-top-left-radius: 0.267rem;
        border-bottom-left-radius: 0.267rem;
    }

    .page-item:last-child .page-link {
        border-top-right-radius: 0.267rem;
        border-bottom-right-radius: 0.267rem;
    }

    .page-item.active .page-link {
        z-index: 1;
        color: #FFFFFF;
        background-color: #5A8DEE;
        border-color: #e7edf3;
    }

    .page-item.disabled .page-link {
        color: #828D99;
        pointer-events: none;
        cursor: auto;
        background-color: #F2F4F4;
        border-color: #7E8FA3;
    }

    .pagination-lg .page-link {
        padding: 0.54rem 1.2rem;
        font-size: 1.2rem;
        line-height: 1.4;
    }

    .pagination-lg .page-item:first-child .page-link {
        border-top-left-radius: 0.6rem;
        border-bottom-left-radius: 0.6rem;
    }

    .pagination-lg .page-item:last-child .page-link {
        border-top-right-radius: 0.6rem;
        border-bottom-right-radius: 0.6rem;
    }

    .pagination-sm .page-link {
        padding: 0.367rem 0.6rem;
        font-size: 0.8rem;
        line-height: 1.1;
    }

    .pagination-sm .page-item:first-child .page-link {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }

    .pagination-sm .page-item:last-child .page-link {
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
    }

    .badge {
        display: inline-block;
        padding: 0.34rem 1.11rem;
        font-size: 0.8rem;
        font-weight: 400;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.267rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .badge {
            transition: none;
        }
    }

    a.badge:hover, a.badge:focus {
        text-decoration: none;
    }

    .badge:empty {
        display: none;
    }

    .btn .badge {
        position: relative;
        top: -1px;
    }

    .badge-pill {
        padding-right: 1.11rem;
        padding-left: 1.11rem;
        border-radius: 2rem;
    }

    .badge-primary {
        color: #FFFFFF;
        background-color: #5A8DEE;
    }

    a.badge-primary:hover, a.badge-primary:focus {
        color: #FFFFFF;
        background-color: #2c6de9;
    }

    a.badge-primary:focus, a.badge-primary.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(90, 141, 238, 0.5);
    }

    .badge-secondary {
        color: #FFFFFF;
        background-color: #475F7B;
    }

    a.badge-secondary:hover, a.badge-secondary:focus {
        color: #FFFFFF;
        background-color: #34465b;
    }

    a.badge-secondary:focus, a.badge-secondary.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(71, 95, 123, 0.5);
    }

    .badge-success {
        color: #324356;
        background-color: #39DA8A;
    }

    a.badge-success:hover, a.badge-success:focus {
        color: #324356;
        background-color: #23bd70;
    }

    a.badge-success:focus, a.badge-success.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(57, 218, 138, 0.5);
    }

    .badge-info {
        color: #FFFFFF;
        background-color: #00CFDD;
    }

    a.badge-info:hover, a.badge-info:focus {
        color: #FFFFFF;
        background-color: #009faa;
    }

    a.badge-info:focus, a.badge-info.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 207, 221, 0.5);
    }

    .badge-warning {
        color: #324356;
        background-color: #FDAC41;
    }

    a.badge-warning:hover, a.badge-warning:focus {
        color: #324356;
        background-color: #fc960f;
    }

    a.badge-warning:focus, a.badge-warning.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(253, 172, 65, 0.5);
    }

    .badge-danger {
        color: #FFFFFF;
        background-color: #FF5B5C;
    }

    a.badge-danger:hover, a.badge-danger:focus {
        color: #FFFFFF;
        background-color: #ff2829;
    }

    a.badge-danger:focus, a.badge-danger.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(255, 91, 92, 0.5);
    }

    .badge-light {
        color: #324356;
        background-color: #A3AFBD;
    }

    a.badge-light:hover, a.badge-light:focus {
        color: #324356;
        background-color: #8595a8;
    }

    a.badge-light:focus, a.badge-light.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(163, 175, 189, 0.5);
    }

    .badge-dark {
        color: #FFFFFF;
        background-color: #394C62;
    }

    a.badge-dark:hover, a.badge-dark:focus {
        color: #FFFFFF;
        background-color: #263342;
    }

    a.badge-dark:focus, a.badge-dark.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(57, 76, 98, 0.5);
    }

    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #828D99;
        border-radius: 0.6rem;
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 4rem 2rem;
        }
    }

    .jumbotron-fluid {
        padding-right: 0;
        padding-left: 0;
        border-radius: 0;
    }

    .alert {
        position: relative;
        padding: 1.1rem 1.267rem;
        margin-bottom: 2.67rem;
        border: 0 solid transparent;
        border-radius: 0.267rem;
    }

    .alert-heading {
        color: inherit;
    }

    .alert-link {
        font-weight: 500;
    }

    .alert-dismissible {
        padding-right: 4.034rem;
    }

    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 1.1rem 1.267rem;
        color: inherit;
    }

    .alert-primary {
        color: #2f497c;
        background-color: #dee8fc;
        border-color: #d1dffa;
    }

    .alert-primary hr {
        border-top-color: #bacff8;
    }

    .alert-primary .alert-link {
        color: #213357;
    }

    .alert-secondary {
        color: #253140;
        background-color: #dadfe5;
        border-color: #cbd2da;
    }

    .alert-secondary hr {
        border-top-color: #bcc5cf;
    }

    .alert-secondary .alert-link {
        color: #121820;
    }

    .alert-success {
        color: #1e7148;
        background-color: #d7f8e8;
        border-color: #c8f5de;
    }

    .alert-success hr {
        border-top-color: #b2f1d1;
    }

    .alert-success .alert-link {
        color: #13492e;
    }

    .alert-info {
        color: #006c73;
        background-color: #ccf5f8;
        border-color: #b8f2f5;
    }

    .alert-info hr {
        border-top-color: #a2eef2;
    }

    .alert-info .alert-link {
        color: #003c40;
    }

    .alert-warning {
        color: #845922;
        background-color: #ffeed9;
        border-color: #fee8ca;
    }

    .alert-warning hr {
        border-top-color: #feddb1;
    }

    .alert-warning .alert-link {
        color: #5b3e18;
    }

    .alert-danger {
        color: #852f30;
        background-color: #ffdede;
        border-color: #ffd1d1;
    }

    .alert-danger hr {
        border-top-color: #ffb8b8;
    }

    .alert-danger .alert-link {
        color: #5f2222;
    }

    .alert-light {
        color: #555b62;
        background-color: #edeff2;
        border-color: #e5e9ed;
    }

    .alert-light hr {
        border-top-color: #d6dce3;
    }

    .alert-light .alert-link {
        color: #3d4247;
    }

    .alert-dark {
        color: #1e2833;
        background-color: #d7dbe0;
        border-color: #c8cdd3;
    }

    .alert-dark hr {
        border-top-color: #bac0c8;
    }

    .alert-dark .alert-link {
        color: #0b0f13;
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 0.357rem 0;
        }
        to {
            background-position: 0 0;
        }
    }

    .progress {
        display: flex;
        height: 0.357rem;
        overflow: hidden;
        font-size: 0.75rem;
        background-color: #828D99;
        border-radius: 1.28rem;
    }

    .progress-bar {
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #FFFFFF;
        text-align: center;
        white-space: nowrap;
        background-color: #5A8DEE;
        transition: width 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .progress-bar {
            transition: none;
        }
    }

    .progress-bar-striped {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-size: 0.357rem 0.357rem;
    }

    .progress-bar-animated {
        animation: progress-bar-stripes 1s linear infinite;
    }

    @media (prefers-reduced-motion: reduce) {
        .progress-bar-animated {
            animation: none;
        }
    }

    .media {
        display: flex;
        align-items: flex-start;
    }

    .media-body {
        flex: 1;
    }

    .list-group {
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
    }

    .list-group-item-action {
        width: 100%;
        color: #40566F;
        text-align: inherit;
    }

    .list-group-item-action:hover, .list-group-item-action:focus {
        z-index: 1;
        color: #40566F;
        text-decoration: none;
        background-color: #F2F4F4;
    }

    .list-group-item-action:active {
        color: #727E8C;
        background-color: #828D99;
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: 1rem 2rem;
        margin-bottom: -1px;
        color: #596F88;
        background-color: #FFFFFF;
        border: 1px solid #DFE3E7;
    }

    .list-group-item:first-child {
        border-top-left-radius: 0.267rem;
        border-top-right-radius: 0.267rem;
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 0.267rem;
        border-bottom-left-radius: 0.267rem;
    }

    .list-group-item.disabled, .list-group-item:disabled {
        color: #828D99;
        pointer-events: none;
        background-color: #e7edf3;
    }

    .list-group-item.active {
        z-index: 2;
        color: #FFFFFF;
        background-color: #5A8DEE;
        border-color: #5A8DEE;
    }

    .list-group-horizontal {
        flex-direction: row;
    }

    .list-group-horizontal .list-group-item {
        margin-right: -1px;
        margin-bottom: 0;
    }

    .list-group-horizontal .list-group-item:first-child {
        border-top-left-radius: 0.267rem;
        border-bottom-left-radius: 0.267rem;
        border-top-right-radius: 0;
    }

    .list-group-horizontal .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.267rem;
        border-bottom-right-radius: 0.267rem;
        border-bottom-left-radius: 0;
    }

    @media (min-width: 576px) {
        .list-group-horizontal-sm {
            flex-direction: row;
        }
        .list-group-horizontal-sm .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }
        .list-group-horizontal-sm .list-group-item:first-child {
            border-top-left-radius: 0.267rem;
            border-bottom-left-radius: 0.267rem;
            border-top-right-radius: 0;
        }
        .list-group-horizontal-sm .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.267rem;
            border-bottom-right-radius: 0.267rem;
            border-bottom-left-radius: 0;
        }
    }

    @media (min-width: 768px) {
        .list-group-horizontal-md {
            flex-direction: row;
        }
        .list-group-horizontal-md .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }
        .list-group-horizontal-md .list-group-item:first-child {
            border-top-left-radius: 0.267rem;
            border-bottom-left-radius: 0.267rem;
            border-top-right-radius: 0;
        }
        .list-group-horizontal-md .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.267rem;
            border-bottom-right-radius: 0.267rem;
            border-bottom-left-radius: 0;
        }
    }

    @media (min-width: 992px) {
        .list-group-horizontal-lg {
            flex-direction: row;
        }
        .list-group-horizontal-lg .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }
        .list-group-horizontal-lg .list-group-item:first-child {
            border-top-left-radius: 0.267rem;
            border-bottom-left-radius: 0.267rem;
            border-top-right-radius: 0;
        }
        .list-group-horizontal-lg .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.267rem;
            border-bottom-right-radius: 0.267rem;
            border-bottom-left-radius: 0;
        }
    }

    @media (min-width: 1200px) {
        .list-group-horizontal-xl {
            flex-direction: row;
        }
        .list-group-horizontal-xl .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }
        .list-group-horizontal-xl .list-group-item:first-child {
            border-top-left-radius: 0.267rem;
            border-bottom-left-radius: 0.267rem;
            border-top-right-radius: 0;
        }
        .list-group-horizontal-xl .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.267rem;
            border-bottom-right-radius: 0.267rem;
            border-bottom-left-radius: 0;
        }
    }

    .list-group-flush .list-group-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0;
    }

    .list-group-flush .list-group-item:last-child {
        margin-bottom: -1px;
    }

    .list-group-flush:first-child .list-group-item:first-child {
        border-top: 0;
    }

    .list-group-flush:last-child .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom: 0;
    }

    .list-group-item-primary {
        color: #2f497c;
        background-color: #d1dffa;
    }

    .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
        color: #2f497c;
        background-color: #bacff8;
    }

    .list-group-item-primary.list-group-item-action.active {
        color: #FFFFFF;
        background-color: #2f497c;
        border-color: #2f497c;
    }

    .list-group-item-secondary {
        color: #253140;
        background-color: #cbd2da;
    }

    .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
        color: #253140;
        background-color: #bcc5cf;
    }

    .list-group-item-secondary.list-group-item-action.active {
        color: #FFFFFF;
        background-color: #253140;
        border-color: #253140;
    }

    .list-group-item-success {
        color: #1e7148;
        background-color: #c8f5de;
    }

    .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
        color: #1e7148;
        background-color: #b2f1d1;
    }

    .list-group-item-success.list-group-item-action.active {
        color: #FFFFFF;
        background-color: #1e7148;
        border-color: #1e7148;
    }

    .list-group-item-info {
        color: #006c73;
        background-color: #b8f2f5;
    }

    .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
        color: #006c73;
        background-color: #a2eef2;
    }

    .list-group-item-info.list-group-item-action.active {
        color: #FFFFFF;
        background-color: #006c73;
        border-color: #006c73;
    }

    .list-group-item-warning {
        color: #845922;
        background-color: #fee8ca;
    }

    .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
        color: #845922;
        background-color: #feddb1;
    }

    .list-group-item-warning.list-group-item-action.active {
        color: #FFFFFF;
        background-color: #845922;
        border-color: #845922;
    }

    .list-group-item-danger {
        color: #852f30;
        background-color: #ffd1d1;
    }

    .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
        color: #852f30;
        background-color: #ffb8b8;
    }

    .list-group-item-danger.list-group-item-action.active {
        color: #FFFFFF;
        background-color: #852f30;
        border-color: #852f30;
    }

    .list-group-item-light {
        color: #555b62;
        background-color: #e5e9ed;
    }

    .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
        color: #555b62;
        background-color: #d6dce3;
    }

    .list-group-item-light.list-group-item-action.active {
        color: #FFFFFF;
        background-color: #555b62;
        border-color: #555b62;
    }

    .list-group-item-dark {
        color: #1e2833;
        background-color: #c8cdd3;
    }

    .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
        color: #1e2833;
        background-color: #bac0c8;
    }

    .list-group-item-dark.list-group-item-action.active {
        color: #FFFFFF;
        background-color: #1e2833;
        border-color: #1e2833;
    }

    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 500;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #FFFFFF;
        opacity: .5;
    }

    .close:hover {
        color: #000;
        text-decoration: none;
    }

    .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
        opacity: .75;
    }

    button.close {
        padding: 0;
        background-color: transparent;
        border: 0;
        appearance: none;
    }

    a.close.disabled {
        pointer-events: none;
    }

    .toast {
        max-width: 25.33rem;
        overflow: hidden;
        font-size: 1rem;
        background-color: rgba(255, 255, 255, 0.95);
        background-clip: padding-box;
        border: 1px solid #DFE3E7;
        box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.08);
        backdrop-filter: blur(10px);
        opacity: 0;
        border-radius: 0.267rem;
    }

    .toast:not(:last-child) {
        margin-bottom: 1.4rem;
    }

    .toast.showing {
        opacity: 1;
    }

    .toast.show {
        display: block;
        opacity: 1;
    }

    .toast.hide {
        display: none;
    }

    .toast-header {
        display: flex;
        align-items: center;
        padding: 0.86rem 1.4rem;
        color: #FFFFFF;
        background-color: #5A8DEE;
        background-clip: padding-box;
        border-bottom: 1px solid transparent;
    }

    .toast-body {
        padding: 1.4rem;
    }

    .modal-open {
        overflow: hidden;
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto;
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        display: none;
        width: 100%;
        height: 100%;
        overflow: hidden;
        outline: 0;
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 0.5rem;
        pointer-events: none;
    }

    .modal.fade .modal-dialog {
        transition: transform 0.3s ease-out;
        transform: translate(0, -50px);
    }

    @media (prefers-reduced-motion: reduce) {
        .modal.fade .modal-dialog {
            transition: none;
        }
    }

    .modal.show .modal-dialog {
        transform: none;
    }

    .modal-dialog-scrollable {
        display: flex;
        max-height: calc(100% - 1rem);
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 1rem);
        overflow: hidden;
    }

    .modal-dialog-scrollable .modal-header,
    .modal-dialog-scrollable .modal-footer {
        flex-shrink: 0;
    }

    .modal-dialog-scrollable .modal-body {
        overflow-y: auto;
    }

    .modal-dialog-centered {
        display: flex;
        align-items: center;
        min-height: calc(100% - 1rem);
    }

    .modal-dialog-centered::before {
        display: block;
        height: calc(100vh - 1rem);
        content: "";
    }

    .modal-dialog-centered.modal-dialog-scrollable {
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
        max-height: none;
    }

    .modal-dialog-centered.modal-dialog-scrollable::before {
        content: none;
    }

    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #FFFFFF;
        background-clip: padding-box;
        border: none solid rgba(0, 0, 0, 0.2);
        border-radius: 0.267rem;
        outline: 0;
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: #000;
    }

    .modal-backdrop.fade {
        opacity: 0;
    }

    .modal-backdrop.show {
        opacity: 0.5;
    }

    .modal-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        padding: 1.05rem 2.3rem;
        border-bottom: 1px solid #DFE3E7;
        border-top-left-radius: 0.267rem;
        border-top-right-radius: 0.267rem;
    }

    .modal-header .close {
        padding: 1.05rem 2.3rem;
        margin: -1.05rem -2.3rem -1.05rem auto;
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.4;
    }

    .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: 1.3rem 2.3rem;
    }

    .modal-footer {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding: 1.3rem 2.3rem;
        border-top: 1px solid #DFE3E7;
        border-bottom-right-radius: 0.267rem;
        border-bottom-left-radius: 0.267rem;
    }

    .modal-footer > :not(:first-child) {
        margin-left: .25rem;
    }

    .modal-footer > :not(:last-child) {
        margin-right: .25rem;
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll;
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 540px;
            margin: 1.75rem auto;
        }
        .modal-dialog-scrollable {
            max-height: calc(100% - 3.5rem);
        }
        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 3.5rem);
        }
        .modal-dialog-centered {
            min-height: calc(100% - 3.5rem);
        }
        .modal-dialog-centered::before {
            height: calc(100vh - 3.5rem);
        }
        .modal-sm {
            max-width: 300px;
        }
    }

    @media (min-width: 992px) {
        .modal-lg,
        .modal-xl {
            max-width: 800px;
        }
    }

    @media (min-width: 1200px) {
        .modal-xl {
            max-width: 1140px;
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        margin: 0;
        font-family: "IBM Plex Sans", Helvetica, Arial, serif;
        font-style: normal;
        font-weight: 400;
        line-height: 1.4;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 1rem;
        word-wrap: break-word;
        opacity: 0;
    }

    .tooltip.show {
        opacity: 1;
    }

    .tooltip .arrow {
        position: absolute;
        display: block;
        width: 1.07rem;
        height: 0.53rem;
    }

    .tooltip .arrow::before {
        position: absolute;
        content: "";
        border-color: transparent;
        border-style: solid;
    }

    .bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
        padding: 0.53rem 0;
    }

    .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
        bottom: 0;
    }

    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
        top: 0;
        border-width: 0.53rem 0.535rem 0;
        border-top-color: #475F7B;
    }

    .bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
        padding: 0 0.53rem;
    }

    .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
        left: 0;
        width: 0.53rem;
        height: 1.07rem;
    }

    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
        right: 0;
        border-width: 0.535rem 0.53rem 0.535rem 0;
        border-right-color: #475F7B;
    }

    .bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
        padding: 0.53rem 0;
    }

    .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
        top: 0;
    }

    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
        bottom: 0;
        border-width: 0 0.535rem 0.53rem;
        border-bottom-color: #475F7B;
    }

    .bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
        padding: 0 0.53rem;
    }

    .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
        right: 0;
        width: 0.53rem;
        height: 1.07rem;
    }

    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
        left: 0;
        border-width: 0.535rem 0 0.535rem 0.53rem;
        border-left-color: #475F7B;
    }

    .tooltip-inner {
        max-width: 200px;
        padding: 0.267rem 0.867rem;
        color: #FFFFFF;
        text-align: center;
        background-color: #475F7B;
        border-radius: 0.267rem;
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: block;
        max-width: 276px;
        font-family: "IBM Plex Sans", Helvetica, Arial, serif;
        font-style: normal;
        font-weight: 400;
        line-height: 1.4;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 1rem;
        word-wrap: break-word;
        background-color: #FFFFFF;
        background-clip: padding-box;
        border: 1px solid #DFE3E7;
        border-radius: 0.267rem;
    }

    .popover .arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: 0.5rem;
        margin: 0 0.6rem;
    }

    .popover .arrow::before, .popover .arrow::after {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid;
    }

    .bs-popover-top, .bs-popover-auto[x-placement^="top"] {
        margin-bottom: 0.5rem;
    }

    .bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
        bottom: calc((0.5rem + 1px) * -1);
    }

    .bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
        bottom: 0;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: #dfe3e7;
    }

    .bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
        bottom: 1px;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: #FFFFFF;
    }

    .bs-popover-right, .bs-popover-auto[x-placement^="right"] {
        margin-left: 0.5rem;
    }

    .bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
        left: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.6rem 0;
    }

    .bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
        left: 0;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: #dfe3e7;
    }

    .bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
        left: 1px;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: #FFFFFF;
    }

    .bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
        margin-top: 0.5rem;
    }

    .bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
        top: calc((0.5rem + 1px) * -1);
    }

    .bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
        top: 0;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: #dfe3e7;
    }

    .bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
        top: 1px;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: #FFFFFF;
    }

    .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -0.5rem;
        content: "";
        border-bottom: 1px solid #FFFFFF;
    }

    .bs-popover-left, .bs-popover-auto[x-placement^="left"] {
        margin-right: 0.5rem;
    }

    .bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
        right: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.6rem 0;
    }

    .bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
        right: 0;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: #dfe3e7;
    }

    .bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
        right: 1px;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: #FFFFFF;
    }

    .popover-header {
        padding: 0.5rem 0.75rem;
        margin-bottom: 0;
        font-size: 1rem;
        color: #304156;
        background-color: #FFFFFF;
        border-bottom: 1px solid #f2f2f2;
        border-top-left-radius: calc(0.6rem - 1px);
        border-top-right-radius: calc(0.6rem - 1px);
    }

    .popover-header:empty {
        display: none;
    }

    .popover-body {
        padding: 0.5rem 0.75rem;
        color: #727E8C;
    }

    .carousel {
        position: relative;
    }

    .carousel.pointer-event {
        touch-action: pan-y;
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-inner::after {
        display: block;
        clear: both;
        content: "";
    }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        backface-visibility: hidden;
        transition: transform 0.6s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-item {
            transition: none;
        }
    }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }

    .carousel-item-next:not(.carousel-item-left),
    .active.carousel-item-right {
        transform: translateX(100%);
    }

    .carousel-item-prev:not(.carousel-item-right),
    .active.carousel-item-left {
        transform: translateX(-100%);
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        transition-property: opacity;
        transform: none;
    }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
        z-index: 1;
        opacity: 1;
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        z-index: 0;
        opacity: 0;
        transition: 0s 0.6s opacity;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            transition: none;
        }
    }

    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15%;
        color: #FFFFFF;
        text-align: center;
        opacity: 0.5;
        transition: opacity 0.15s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-control-prev,
        .carousel-control-next {
            transition: none;
        }
    }

    .carousel-control-prev:hover, .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
        color: #FFFFFF;
        text-decoration: none;
        outline: 0;
        opacity: 0.9;
    }

    .carousel-control-prev {
        left: 0;
    }

    .carousel-control-next {
        right: 0;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        display: inline-block;
        width: 14px;
        height: 14px;
        background: no-repeat 50% / 100% 100%;
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFFFFF' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFFFFF' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 15;
        display: flex;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none;
    }

    .carousel-indicators li {
        box-sizing: content-box;
        flex: 0 1 auto;
        width: 24px;
        height: 6px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #FFFFFF;
        background-clip: padding-box;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: .5;
        transition: opacity 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-indicators li {
            transition: none;
        }
    }

    .carousel-indicators .active {
        opacity: 1;
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #FFFFFF;
        text-align: center;
    }

    @keyframes spinner-border {
        to {
            transform: rotate(360deg);
        }
    }

    .spinner-border {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        border: 0.25em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        animation: spinner-border .75s linear infinite;
    }

    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: 0.2em;
    }

    @keyframes spinner-grow {
        0% {
            transform: scale(0);
        }
        50% {
            opacity: 1;
        }
    }

    .spinner-grow {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        background-color: currentColor;
        border-radius: 50%;
        opacity: 0;
        animation: spinner-grow .75s linear infinite;
    }

    .spinner-grow-sm {
        width: 1rem;
        height: 1rem;
    }

    .align-baseline {
        vertical-align: baseline !important;
    }

    .align-top {
        vertical-align: top !important;
    }

    .align-middle {
        vertical-align: middle !important;
    }

    .align-bottom {
        vertical-align: bottom !important;
    }

    .align-text-bottom {
        vertical-align: text-bottom !important;
    }

    .align-text-top {
        vertical-align: text-top !important;
    }

    .bg-primary {
        background-color: #5A8DEE !important;
    }

    a.bg-primary:hover, a.bg-primary:focus,
    button.bg-primary:hover,
    button.bg-primary:focus {
        background-color: #2c6de9 !important;
    }

    .bg-secondary {
        background-color: #475F7B !important;
    }

    a.bg-secondary:hover, a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
        background-color: #34465b !important;
    }

    .bg-success {
        background-color: #39DA8A !important;
    }

    a.bg-success:hover, a.bg-success:focus,
    button.bg-success:hover,
    button.bg-success:focus {
        background-color: #23bd70 !important;
    }

    .bg-info {
        background-color: #00CFDD !important;
    }

    a.bg-info:hover, a.bg-info:focus,
    button.bg-info:hover,
    button.bg-info:focus {
        background-color: #009faa !important;
    }

    .bg-warning {
        background-color: #FDAC41 !important;
    }

    a.bg-warning:hover, a.bg-warning:focus,
    button.bg-warning:hover,
    button.bg-warning:focus {
        background-color: #fc960f !important;
    }

    .bg-danger {
        background-color: #FF5B5C !important;
    }

    a.bg-danger:hover, a.bg-danger:focus,
    button.bg-danger:hover,
    button.bg-danger:focus {
        background-color: #ff2829 !important;
    }

    .bg-light {
        background-color: #A3AFBD !important;
    }

    a.bg-light:hover, a.bg-light:focus,
    button.bg-light:hover,
    button.bg-light:focus {
        background-color: #8595a8 !important;
    }

    .bg-dark {
        background-color: #394C62 !important;
    }

    a.bg-dark:hover, a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
        background-color: #263342 !important;
    }

    .bg-white {
        background-color: #FFFFFF !important;
    }

    .bg-transparent {
        background-color: transparent !important;
    }

    .border {
        border: 1px solid #DFE3E7 !important;
    }

    .border-top {
        border-top: 1px solid #DFE3E7 !important;
    }

    .border-right {
        border-right: 1px solid #DFE3E7 !important;
    }

    .border-bottom {
        border-bottom: 1px solid #DFE3E7 !important;
    }

    .border-left {
        border-left: 1px solid #DFE3E7 !important;
    }

    .border-0 {
        border: 0 !important;
    }

    .border-top-0 {
        border-top: 0 !important;
    }

    .border-right-0 {
        border-right: 0 !important;
    }

    .border-bottom-0 {
        border-bottom: 0 !important;
    }

    .border-left-0 {
        border-left: 0 !important;
    }

    .border-primary {
        border-color: #5A8DEE !important;
    }

    .border-secondary {
        border-color: #475F7B !important;
    }

    .border-success {
        border-color: #39DA8A !important;
    }

    .border-info {
        border-color: #00CFDD !important;
    }

    .border-warning {
        border-color: #FDAC41 !important;
    }

    .border-danger {
        border-color: #FF5B5C !important;
    }

    .border-light {
        border-color: #A3AFBD !important;
    }

    .border-dark {
        border-color: #394C62 !important;
    }

    .border-white {
        border-color: #FFFFFF !important;
    }

    .rounded-sm {
        border-radius: 0.25rem !important;
    }

    .rounded {
        border-radius: 0.267rem !important;
    }

    .rounded-top {
        border-top-left-radius: 0.267rem !important;
        border-top-right-radius: 0.267rem !important;
    }

    .rounded-right {
        border-top-right-radius: 0.267rem !important;
        border-bottom-right-radius: 0.267rem !important;
    }

    .rounded-bottom {
        border-bottom-right-radius: 0.267rem !important;
        border-bottom-left-radius: 0.267rem !important;
    }

    .rounded-left {
        border-top-left-radius: 0.267rem !important;
        border-bottom-left-radius: 0.267rem !important;
    }

    .rounded-lg {
        border-radius: 0.6rem !important;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .rounded-pill {
        border-radius: 50rem !important;
    }

    .rounded-0 {
        border-radius: 0 !important;
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: "";
    }

    .d-none {
        display: none !important;
    }

    .d-inline {
        display: inline !important;
    }

    .d-inline-block {
        display: inline-block !important;
    }

    .d-block {
        display: block !important;
    }

    .d-table {
        display: table !important;
    }

    .d-table-row {
        display: table-row !important;
    }

    .d-table-cell {
        display: table-cell !important;
    }

    .d-flex {
        display: flex !important;
    }

    .d-inline-flex {
        display: inline-flex !important;
    }

    @media (min-width: 576px) {
        .d-sm-none {
            display: none !important;
        }
        .d-sm-inline {
            display: inline !important;
        }
        .d-sm-inline-block {
            display: inline-block !important;
        }
        .d-sm-block {
            display: block !important;
        }
        .d-sm-table {
            display: table !important;
        }
        .d-sm-table-row {
            display: table-row !important;
        }
        .d-sm-table-cell {
            display: table-cell !important;
        }
        .d-sm-flex {
            display: flex !important;
        }
        .d-sm-inline-flex {
            display: inline-flex !important;
        }
    }

    @media (min-width: 768px) {
        .d-md-none {
            display: none !important;
        }
        .d-md-inline {
            display: inline !important;
        }
        .d-md-inline-block {
            display: inline-block !important;
        }
        .d-md-block {
            display: block !important;
        }
        .d-md-table {
            display: table !important;
        }
        .d-md-table-row {
            display: table-row !important;
        }
        .d-md-table-cell {
            display: table-cell !important;
        }
        .d-md-flex {
            display: flex !important;
        }
        .d-md-inline-flex {
            display: inline-flex !important;
        }
    }

    @media (min-width: 992px) {
        .d-lg-none {
            display: none !important;
        }
        .d-lg-inline {
            display: inline !important;
        }
        .d-lg-inline-block {
            display: inline-block !important;
        }
        .d-lg-block {
            display: block !important;
        }
        .d-lg-table {
            display: table !important;
        }
        .d-lg-table-row {
            display: table-row !important;
        }
        .d-lg-table-cell {
            display: table-cell !important;
        }
        .d-lg-flex {
            display: flex !important;
        }
        .d-lg-inline-flex {
            display: inline-flex !important;
        }
    }

    @media (min-width: 1200px) {
        .d-xl-none {
            display: none !important;
        }
        .d-xl-inline {
            display: inline !important;
        }
        .d-xl-inline-block {
            display: inline-block !important;
        }
        .d-xl-block {
            display: block !important;
        }
        .d-xl-table {
            display: table !important;
        }
        .d-xl-table-row {
            display: table-row !important;
        }
        .d-xl-table-cell {
            display: table-cell !important;
        }
        .d-xl-flex {
            display: flex !important;
        }
        .d-xl-inline-flex {
            display: inline-flex !important;
        }
    }

    @media print {
        .d-print-none {
            display: none !important;
        }
        .d-print-inline {
            display: inline !important;
        }
        .d-print-inline-block {
            display: inline-block !important;
        }
        .d-print-block {
            display: block !important;
        }
        .d-print-table {
            display: table !important;
        }
        .d-print-table-row {
            display: table-row !important;
        }
        .d-print-table-cell {
            display: table-cell !important;
        }
        .d-print-flex {
            display: flex !important;
        }
        .d-print-inline-flex {
            display: inline-flex !important;
        }
    }

    .embed-responsive {
        position: relative;
        display: block;
        width: 100%;
        padding: 0;
        overflow: hidden;
    }

    .embed-responsive::before {
        display: block;
        content: "";
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive iframe,
    .embed-responsive embed,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .embed-responsive-21by9::before {
        padding-top: 42.85714%;
    }

    .embed-responsive-16by9::before {
        padding-top: 56.25%;
    }

    .embed-responsive-4by3::before {
        padding-top: 75%;
    }

    .embed-responsive-1by1::before {
        padding-top: 100%;
    }

    .embed-responsive-21by9::before {
        padding-top: 42.85714%;
    }

    .embed-responsive-16by9::before {
        padding-top: 56.25%;
    }

    .embed-responsive-4by3::before {
        padding-top: 75%;
    }

    .embed-responsive-1by1::before {
        padding-top: 100%;
    }

    .flex-row {
        flex-direction: row !important;
    }

    .flex-column {
        flex-direction: column !important;
    }

    .flex-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-wrap {
        flex-wrap: wrap !important;
    }

    .flex-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-fill {
        flex: 1 1 auto !important;
    }

    .flex-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-start {
        justify-content: flex-start !important;
    }

    .justify-content-end {
        justify-content: flex-end !important;
    }

    .justify-content-center {
        justify-content: center !important;
    }

    .justify-content-between {
        justify-content: space-between !important;
    }

    .justify-content-around {
        justify-content: space-around !important;
    }

    .align-items-start {
        align-items: flex-start !important;
    }

    .align-items-end {
        align-items: flex-end !important;
    }

    .align-items-center {
        align-items: center !important;
    }

    .align-items-baseline {
        align-items: baseline !important;
    }

    .align-items-stretch {
        align-items: stretch !important;
    }

    .align-content-start {
        align-content: flex-start !important;
    }

    .align-content-end {
        align-content: flex-end !important;
    }

    .align-content-center {
        align-content: center !important;
    }

    .align-content-between {
        align-content: space-between !important;
    }

    .align-content-around {
        align-content: space-around !important;
    }

    .align-content-stretch {
        align-content: stretch !important;
    }

    .align-self-auto {
        align-self: auto !important;
    }

    .align-self-start {
        align-self: flex-start !important;
    }

    .align-self-end {
        align-self: flex-end !important;
    }

    .align-self-center {
        align-self: center !important;
    }

    .align-self-baseline {
        align-self: baseline !important;
    }

    .align-self-stretch {
        align-self: stretch !important;
    }

    @media (min-width: 576px) {
        .flex-sm-row {
            flex-direction: row !important;
        }
        .flex-sm-column {
            flex-direction: column !important;
        }
        .flex-sm-row-reverse {
            flex-direction: row-reverse !important;
        }
        .flex-sm-column-reverse {
            flex-direction: column-reverse !important;
        }
        .flex-sm-wrap {
            flex-wrap: wrap !important;
        }
        .flex-sm-nowrap {
            flex-wrap: nowrap !important;
        }
        .flex-sm-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }
        .flex-sm-fill {
            flex: 1 1 auto !important;
        }
        .flex-sm-grow-0 {
            flex-grow: 0 !important;
        }
        .flex-sm-grow-1 {
            flex-grow: 1 !important;
        }
        .flex-sm-shrink-0 {
            flex-shrink: 0 !important;
        }
        .flex-sm-shrink-1 {
            flex-shrink: 1 !important;
        }
        .justify-content-sm-start {
            justify-content: flex-start !important;
        }
        .justify-content-sm-end {
            justify-content: flex-end !important;
        }
        .justify-content-sm-center {
            justify-content: center !important;
        }
        .justify-content-sm-between {
            justify-content: space-between !important;
        }
        .justify-content-sm-around {
            justify-content: space-around !important;
        }
        .align-items-sm-start {
            align-items: flex-start !important;
        }
        .align-items-sm-end {
            align-items: flex-end !important;
        }
        .align-items-sm-center {
            align-items: center !important;
        }
        .align-items-sm-baseline {
            align-items: baseline !important;
        }
        .align-items-sm-stretch {
            align-items: stretch !important;
        }
        .align-content-sm-start {
            align-content: flex-start !important;
        }
        .align-content-sm-end {
            align-content: flex-end !important;
        }
        .align-content-sm-center {
            align-content: center !important;
        }
        .align-content-sm-between {
            align-content: space-between !important;
        }
        .align-content-sm-around {
            align-content: space-around !important;
        }
        .align-content-sm-stretch {
            align-content: stretch !important;
        }
        .align-self-sm-auto {
            align-self: auto !important;
        }
        .align-self-sm-start {
            align-self: flex-start !important;
        }
        .align-self-sm-end {
            align-self: flex-end !important;
        }
        .align-self-sm-center {
            align-self: center !important;
        }
        .align-self-sm-baseline {
            align-self: baseline !important;
        }
        .align-self-sm-stretch {
            align-self: stretch !important;
        }
    }

    @media (min-width: 768px) {
        .flex-md-row {
            flex-direction: row !important;
        }
        .flex-md-column {
            flex-direction: column !important;
        }
        .flex-md-row-reverse {
            flex-direction: row-reverse !important;
        }
        .flex-md-column-reverse {
            flex-direction: column-reverse !important;
        }
        .flex-md-wrap {
            flex-wrap: wrap !important;
        }
        .flex-md-nowrap {
            flex-wrap: nowrap !important;
        }
        .flex-md-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }
        .flex-md-fill {
            flex: 1 1 auto !important;
        }
        .flex-md-grow-0 {
            flex-grow: 0 !important;
        }
        .flex-md-grow-1 {
            flex-grow: 1 !important;
        }
        .flex-md-shrink-0 {
            flex-shrink: 0 !important;
        }
        .flex-md-shrink-1 {
            flex-shrink: 1 !important;
        }
        .justify-content-md-start {
            justify-content: flex-start !important;
        }
        .justify-content-md-end {
            justify-content: flex-end !important;
        }
        .justify-content-md-center {
            justify-content: center !important;
        }
        .justify-content-md-between {
            justify-content: space-between !important;
        }
        .justify-content-md-around {
            justify-content: space-around !important;
        }
        .align-items-md-start {
            align-items: flex-start !important;
        }
        .align-items-md-end {
            align-items: flex-end !important;
        }
        .align-items-md-center {
            align-items: center !important;
        }
        .align-items-md-baseline {
            align-items: baseline !important;
        }
        .align-items-md-stretch {
            align-items: stretch !important;
        }
        .align-content-md-start {
            align-content: flex-start !important;
        }
        .align-content-md-end {
            align-content: flex-end !important;
        }
        .align-content-md-center {
            align-content: center !important;
        }
        .align-content-md-between {
            align-content: space-between !important;
        }
        .align-content-md-around {
            align-content: space-around !important;
        }
        .align-content-md-stretch {
            align-content: stretch !important;
        }
        .align-self-md-auto {
            align-self: auto !important;
        }
        .align-self-md-start {
            align-self: flex-start !important;
        }
        .align-self-md-end {
            align-self: flex-end !important;
        }
        .align-self-md-center {
            align-self: center !important;
        }
        .align-self-md-baseline {
            align-self: baseline !important;
        }
        .align-self-md-stretch {
            align-self: stretch !important;
        }
    }

    @media (min-width: 992px) {
        .flex-lg-row {
            flex-direction: row !important;
        }
        .flex-lg-column {
            flex-direction: column !important;
        }
        .flex-lg-row-reverse {
            flex-direction: row-reverse !important;
        }
        .flex-lg-column-reverse {
            flex-direction: column-reverse !important;
        }
        .flex-lg-wrap {
            flex-wrap: wrap !important;
        }
        .flex-lg-nowrap {
            flex-wrap: nowrap !important;
        }
        .flex-lg-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }
        .flex-lg-fill {
            flex: 1 1 auto !important;
        }
        .flex-lg-grow-0 {
            flex-grow: 0 !important;
        }
        .flex-lg-grow-1 {
            flex-grow: 1 !important;
        }
        .flex-lg-shrink-0 {
            flex-shrink: 0 !important;
        }
        .flex-lg-shrink-1 {
            flex-shrink: 1 !important;
        }
        .justify-content-lg-start {
            justify-content: flex-start !important;
        }
        .justify-content-lg-end {
            justify-content: flex-end !important;
        }
        .justify-content-lg-center {
            justify-content: center !important;
        }
        .justify-content-lg-between {
            justify-content: space-between !important;
        }
        .justify-content-lg-around {
            justify-content: space-around !important;
        }
        .align-items-lg-start {
            align-items: flex-start !important;
        }
        .align-items-lg-end {
            align-items: flex-end !important;
        }
        .align-items-lg-center {
            align-items: center !important;
        }
        .align-items-lg-baseline {
            align-items: baseline !important;
        }
        .align-items-lg-stretch {
            align-items: stretch !important;
        }
        .align-content-lg-start {
            align-content: flex-start !important;
        }
        .align-content-lg-end {
            align-content: flex-end !important;
        }
        .align-content-lg-center {
            align-content: center !important;
        }
        .align-content-lg-between {
            align-content: space-between !important;
        }
        .align-content-lg-around {
            align-content: space-around !important;
        }
        .align-content-lg-stretch {
            align-content: stretch !important;
        }
        .align-self-lg-auto {
            align-self: auto !important;
        }
        .align-self-lg-start {
            align-self: flex-start !important;
        }
        .align-self-lg-end {
            align-self: flex-end !important;
        }
        .align-self-lg-center {
            align-self: center !important;
        }
        .align-self-lg-baseline {
            align-self: baseline !important;
        }
        .align-self-lg-stretch {
            align-self: stretch !important;
        }
    }

    @media (min-width: 1200px) {
        .flex-xl-row {
            flex-direction: row !important;
        }
        .flex-xl-column {
            flex-direction: column !important;
        }
        .flex-xl-row-reverse {
            flex-direction: row-reverse !important;
        }
        .flex-xl-column-reverse {
            flex-direction: column-reverse !important;
        }
        .flex-xl-wrap {
            flex-wrap: wrap !important;
        }
        .flex-xl-nowrap {
            flex-wrap: nowrap !important;
        }
        .flex-xl-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }
        .flex-xl-fill {
            flex: 1 1 auto !important;
        }
        .flex-xl-grow-0 {
            flex-grow: 0 !important;
        }
        .flex-xl-grow-1 {
            flex-grow: 1 !important;
        }
        .flex-xl-shrink-0 {
            flex-shrink: 0 !important;
        }
        .flex-xl-shrink-1 {
            flex-shrink: 1 !important;
        }
        .justify-content-xl-start {
            justify-content: flex-start !important;
        }
        .justify-content-xl-end {
            justify-content: flex-end !important;
        }
        .justify-content-xl-center {
            justify-content: center !important;
        }
        .justify-content-xl-between {
            justify-content: space-between !important;
        }
        .justify-content-xl-around {
            justify-content: space-around !important;
        }
        .align-items-xl-start {
            align-items: flex-start !important;
        }
        .align-items-xl-end {
            align-items: flex-end !important;
        }
        .align-items-xl-center {
            align-items: center !important;
        }
        .align-items-xl-baseline {
            align-items: baseline !important;
        }
        .align-items-xl-stretch {
            align-items: stretch !important;
        }
        .align-content-xl-start {
            align-content: flex-start !important;
        }
        .align-content-xl-end {
            align-content: flex-end !important;
        }
        .align-content-xl-center {
            align-content: center !important;
        }
        .align-content-xl-between {
            align-content: space-between !important;
        }
        .align-content-xl-around {
            align-content: space-around !important;
        }
        .align-content-xl-stretch {
            align-content: stretch !important;
        }
        .align-self-xl-auto {
            align-self: auto !important;
        }
        .align-self-xl-start {
            align-self: flex-start !important;
        }
        .align-self-xl-end {
            align-self: flex-end !important;
        }
        .align-self-xl-center {
            align-self: center !important;
        }
        .align-self-xl-baseline {
            align-self: baseline !important;
        }
        .align-self-xl-stretch {
            align-self: stretch !important;
        }
    }

    .float-left {
        float: left !important;
    }

    .float-right {
        float: right !important;
    }

    .float-none {
        float: none !important;
    }

    @media (min-width: 576px) {
        .float-sm-left {
            float: left !important;
        }
        .float-sm-right {
            float: right !important;
        }
        .float-sm-none {
            float: none !important;
        }
    }

    @media (min-width: 768px) {
        .float-md-left {
            float: left !important;
        }
        .float-md-right {
            float: right !important;
        }
        .float-md-none {
            float: none !important;
        }
    }

    @media (min-width: 992px) {
        .float-lg-left {
            float: left !important;
        }
        .float-lg-right {
            float: right !important;
        }
        .float-lg-none {
            float: none !important;
        }
    }

    @media (min-width: 1200px) {
        .float-xl-left {
            float: left !important;
        }
        .float-xl-right {
            float: right !important;
        }
        .float-xl-none {
            float: none !important;
        }
    }

    .overflow-auto {
        overflow: auto !important;
    }

    .overflow-hidden {
        overflow: hidden !important;
    }

    .position-static {
        position: static !important;
    }

    .position-relative {
        position: relative !important;
    }

    .position-absolute {
        position: absolute !important;
    }

    .position-fixed {
        position: fixed !important;
    }

    .position-sticky {
        position: sticky !important;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
    }

    .fixed-footer .footer {
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1030;
    }

    @supports (position: sticky) {
        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1020;
        }
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        overflow: visible;
        clip: auto;
        white-space: normal;
    }

    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    }

    .shadow {
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2) !important;
    }

    .shadow-lg {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }

    .shadow-none {
        box-shadow: none !important;
    }

    .w-25 {
        width: 25% !important;
    }

    .w-50 {
        width: 50% !important;
    }

    .w-75 {
        width: 75% !important;
    }

    .w-100 {
        width: 100% !important;
    }

    .w-auto {
        width: auto !important;
    }

    .h-25 {
        height: 25% !important;
    }

    .h-50 {
        height: 50% !important;
    }

    .h-75 {
        height: 75% !important;
    }

    .h-100 {
        height: 100% !important;
    }

    .h-auto {
        height: auto !important;
    }

    .mw-100 {
        max-width: 100% !important;
    }

    .mh-100 {
        max-height: 100% !important;
    }

    .min-vw-100 {
        min-width: 100vw !important;
    }

    .min-vh-100 {
        min-height: 100vh !important;
    }

    .vw-100 {
        width: 100vw !important;
    }

    .vh-100 {
        height: 100vh !important;
    }

    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        pointer-events: auto;
        content: "";
        background-color: rgba(0, 0, 0, 0);
    }

    .m-0 {
        margin: 0 !important;
    }

    .mt-0,
    .my-0 {
        margin-top: 0 !important;
    }

    .mr-0,
    .mx-0 {
        margin-right: 0 !important;
    }

    .mb-0,
    .my-0 {
        margin-bottom: 0 !important;
    }

    .ml-0,
    .mx-0 {
        margin-left: 0 !important;
    }

    .m-1 {
        margin: 1rem !important;
    }

    .mt-1,
    .my-1 {
        margin-top: 1rem !important;
    }

    .mr-1,
    .mx-1 {
        margin-right: 1rem !important;
    }

    .mb-1,
    .my-1 {
        margin-bottom: 1rem !important;
    }

    .ml-1,
    .mx-1 {
        margin-left: 1rem !important;
    }

    .m-2 {
        margin: 1.5rem !important;
    }

    .mt-2,
    .my-2 {
        margin-top: 1.5rem !important;
    }

    .mr-2,
    .mx-2 {
        margin-right: 1.5rem !important;
    }

    .mb-2,
    .my-2 {
        margin-bottom: 1.5rem !important;
    }

    .ml-2,
    .mx-2 {
        margin-left: 1.5rem !important;
    }

    .m-3 {
        margin: 3rem !important;
    }

    .mt-3,
    .my-3 {
        margin-top: 3rem !important;
    }

    .mr-3,
    .mx-3 {
        margin-right: 3rem !important;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 3rem !important;
    }

    .ml-3,
    .mx-3 {
        margin-left: 3rem !important;
    }

    .m-4 {
        margin: 3.5rem !important;
    }

    .mt-4,
    .my-4 {
        margin-top: 3.5rem !important;
    }

    .mr-4,
    .mx-4 {
        margin-right: 3.5rem !important;
    }

    .mb-4,
    .my-4 {
        margin-bottom: 3.5rem !important;
    }

    .ml-4,
    .mx-4 {
        margin-left: 3.5rem !important;
    }

    .m-5 {
        margin: 4rem !important;
    }

    .mt-5,
    .my-5 {
        margin-top: 4rem !important;
    }

    .mr-5,
    .mx-5 {
        margin-right: 4rem !important;
    }

    .mb-5,
    .my-5 {
        margin-bottom: 4rem !important;
    }

    .ml-5,
    .mx-5 {
        margin-left: 4rem !important;
    }

    .m-25 {
        margin: 0.25rem !important;
    }

    .mt-25,
    .my-25 {
        margin-top: 0.25rem !important;
    }

    .mr-25,
    .mx-25 {
        margin-right: 0.25rem !important;
    }

    .mb-25,
    .my-25 {
        margin-bottom: 0.25rem !important;
    }

    .ml-25,
    .mx-25 {
        margin-left: 0.25rem !important;
    }

    .m-50 {
        margin: 0.5rem !important;
    }

    .mt-50,
    .my-50 {
        margin-top: 0.5rem !important;
    }

    .mr-50,
    .mx-50 {
        margin-right: 0.5rem !important;
    }

    .mb-50,
    .my-50 {
        margin-bottom: 0.5rem !important;
    }

    .ml-50,
    .mx-50 {
        margin-left: 0.5rem !important;
    }

    .m-75 {
        margin: 0.75rem !important;
    }

    .mt-75,
    .my-75 {
        margin-top: 0.75rem !important;
    }

    .mr-75,
    .mx-75 {
        margin-right: 0.75rem !important;
    }

    .mb-75,
    .my-75 {
        margin-bottom: 0.75rem !important;
    }

    .ml-75,
    .mx-75 {
        margin-left: 0.75rem !important;
    }

    .p-0 {
        padding: 0 !important;
    }

    .pt-0,
    .py-0 {
        padding-top: 0 !important;
    }

    .pr-0,
    .px-0 {
        padding-right: 0 !important;
    }

    .pb-0,
    .py-0 {
        padding-bottom: 0 !important;
    }

    .pl-0,
    .px-0 {
        padding-left: 0 !important;
    }

    .p-1 {
        padding: 1rem !important;
    }

    .pt-1,
    .py-1 {
        padding-top: 1rem !important;
    }

    .pr-1,
    .px-1 {
        padding-right: 1rem !important;
    }

    .pb-1,
    .py-1 {
        padding-bottom: 1rem !important;
    }

    .pl-1,
    .px-1 {
        padding-left: 1rem !important;
    }

    .p-2 {
        padding: 1.5rem !important;
    }

    .pt-2,
    .py-2 {
        padding-top: 1.5rem !important;
    }

    .pr-2,
    .px-2 {
        padding-right: 1.5rem !important;
    }

    .pb-2,
    .py-2 {
        padding-bottom: 1.5rem !important;
    }

    .pl-2,
    .px-2 {
        padding-left: 1.5rem !important;
    }

    .p-3 {
        padding: 3rem !important;
    }

    .pt-3,
    .py-3 {
        padding-top: 3rem !important;
    }

    .pr-3,
    .px-3 {
        padding-right: 3rem !important;
    }

    .pb-3,
    .py-3 {
        padding-bottom: 3rem !important;
    }

    .pl-3,
    .px-3 {
        padding-left: 3rem !important;
    }

    .p-4 {
        padding: 3.5rem !important;
    }

    .pt-4,
    .py-4 {
        padding-top: 3.5rem !important;
    }

    .pr-4,
    .px-4 {
        padding-right: 3.5rem !important;
    }

    .pb-4,
    .py-4 {
        padding-bottom: 3.5rem !important;
    }

    .pl-4,
    .px-4 {
        padding-left: 3.5rem !important;
    }

    .p-5 {
        padding: 4rem !important;
    }

    .pt-5,
    .py-5 {
        padding-top: 4rem !important;
    }

    .pr-5,
    .px-5 {
        padding-right: 4rem !important;
    }

    .pb-5,
    .py-5 {
        padding-bottom: 4rem !important;
    }

    .pl-5,
    .px-5 {
        padding-left: 4rem !important;
    }

    .p-25 {
        padding: 0.25rem !important;
    }

    .pt-25,
    .py-25 {
        padding-top: 0.25rem !important;
    }

    .pr-25,
    .px-25 {
        padding-right: 0.25rem !important;
    }

    .pb-25,
    .py-25 {
        padding-bottom: 0.25rem !important;
    }

    .pl-25,
    .px-25 {
        padding-left: 0.25rem !important;
    }

    .p-50 {
        padding: 0.5rem !important;
    }

    .pt-50,
    .py-50 {
        padding-top: 0.5rem !important;
    }

    .pr-50,
    .px-50 {
        padding-right: 0.5rem !important;
    }

    .pb-50,
    .py-50 {
        padding-bottom: 0.5rem !important;
    }

    .pl-50,
    .px-50 {
        padding-left: 0.5rem !important;
    }

    .p-75 {
        padding: 0.75rem !important;
    }

    .pt-75,
    .py-75 {
        padding-top: 0.75rem !important;
    }

    .pr-75,
    .px-75 {
        padding-right: 0.75rem !important;
    }

    .pb-75,
    .py-75 {
        padding-bottom: 0.75rem !important;
    }

    .pl-75,
    .px-75 {
        padding-left: 0.75rem !important;
    }

    .m-n1 {
        margin: -1rem !important;
    }

    .mt-n1,
    .my-n1 {
        margin-top: -1rem !important;
    }

    .mr-n1,
    .mx-n1 {
        margin-right: -1rem !important;
    }

    .mb-n1,
    .my-n1 {
        margin-bottom: -1rem !important;
    }

    .ml-n1,
    .mx-n1 {
        margin-left: -1rem !important;
    }

    .m-n2 {
        margin: -1.5rem !important;
    }

    .mt-n2,
    .my-n2 {
        margin-top: -1.5rem !important;
    }

    .mr-n2,
    .mx-n2 {
        margin-right: -1.5rem !important;
    }

    .mb-n2,
    .my-n2 {
        margin-bottom: -1.5rem !important;
    }

    .ml-n2,
    .mx-n2 {
        margin-left: -1.5rem !important;
    }

    .m-n3 {
        margin: -3rem !important;
    }

    .mt-n3,
    .my-n3 {
        margin-top: -3rem !important;
    }

    .mr-n3,
    .mx-n3 {
        margin-right: -3rem !important;
    }

    .mb-n3,
    .my-n3 {
        margin-bottom: -3rem !important;
    }

    .ml-n3,
    .mx-n3 {
        margin-left: -3rem !important;
    }

    .m-n4 {
        margin: -3.5rem !important;
    }

    .mt-n4,
    .my-n4 {
        margin-top: -3.5rem !important;
    }

    .mr-n4,
    .mx-n4 {
        margin-right: -3.5rem !important;
    }

    .mb-n4,
    .my-n4 {
        margin-bottom: -3.5rem !important;
    }

    .ml-n4,
    .mx-n4 {
        margin-left: -3.5rem !important;
    }

    .m-n5 {
        margin: -4rem !important;
    }

    .mt-n5,
    .my-n5 {
        margin-top: -4rem !important;
    }

    .mr-n5,
    .mx-n5 {
        margin-right: -4rem !important;
    }

    .mb-n5,
    .my-n5 {
        margin-bottom: -4rem !important;
    }

    .ml-n5,
    .mx-n5 {
        margin-left: -4rem !important;
    }

    .m-n25 {
        margin: -0.25rem !important;
    }

    .mt-n25,
    .my-n25 {
        margin-top: -0.25rem !important;
    }

    .mr-n25,
    .mx-n25 {
        margin-right: -0.25rem !important;
    }

    .mb-n25,
    .my-n25 {
        margin-bottom: -0.25rem !important;
    }

    .ml-n25,
    .mx-n25 {
        margin-left: -0.25rem !important;
    }

    .m-n50 {
        margin: -0.5rem !important;
    }

    .mt-n50,
    .my-n50 {
        margin-top: -0.5rem !important;
    }

    .mr-n50,
    .mx-n50 {
        margin-right: -0.5rem !important;
    }

    .mb-n50,
    .my-n50 {
        margin-bottom: -0.5rem !important;
    }

    .ml-n50,
    .mx-n50 {
        margin-left: -0.5rem !important;
    }

    .m-n75 {
        margin: -0.75rem !important;
    }

    .mt-n75,
    .my-n75 {
        margin-top: -0.75rem !important;
    }

    .mr-n75,
    .mx-n75 {
        margin-right: -0.75rem !important;
    }

    .mb-n75,
    .my-n75 {
        margin-bottom: -0.75rem !important;
    }

    .ml-n75,
    .mx-n75 {
        margin-left: -0.75rem !important;
    }

    .m-auto {
        margin: auto !important;
    }

    .mt-auto,
    .my-auto {
        margin-top: auto !important;
    }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important;
    }

    .mb-auto,
    .my-auto {
        margin-bottom: auto !important;
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important;
    }

    @media (min-width: 576px) {
        .m-sm-0 {
            margin: 0 !important;
        }
        .mt-sm-0,
        .my-sm-0 {
            margin-top: 0 !important;
        }
        .mr-sm-0,
        .mx-sm-0 {
            margin-right: 0 !important;
        }
        .mb-sm-0,
        .my-sm-0 {
            margin-bottom: 0 !important;
        }
        .ml-sm-0,
        .mx-sm-0 {
            margin-left: 0 !important;
        }
        .m-sm-1 {
            margin: 1rem !important;
        }
        .mt-sm-1,
        .my-sm-1 {
            margin-top: 1rem !important;
        }
        .mr-sm-1,
        .mx-sm-1 {
            margin-right: 1rem !important;
        }
        .mb-sm-1,
        .my-sm-1 {
            margin-bottom: 1rem !important;
        }
        .ml-sm-1,
        .mx-sm-1 {
            margin-left: 1rem !important;
        }
        .m-sm-2 {
            margin: 1.5rem !important;
        }
        .mt-sm-2,
        .my-sm-2 {
            margin-top: 1.5rem !important;
        }
        .mr-sm-2,
        .mx-sm-2 {
            margin-right: 1.5rem !important;
        }
        .mb-sm-2,
        .my-sm-2 {
            margin-bottom: 1.5rem !important;
        }
        .ml-sm-2,
        .mx-sm-2 {
            margin-left: 1.5rem !important;
        }
        .m-sm-3 {
            margin: 3rem !important;
        }
        .mt-sm-3,
        .my-sm-3 {
            margin-top: 3rem !important;
        }
        .mr-sm-3,
        .mx-sm-3 {
            margin-right: 3rem !important;
        }
        .mb-sm-3,
        .my-sm-3 {
            margin-bottom: 3rem !important;
        }
        .ml-sm-3,
        .mx-sm-3 {
            margin-left: 3rem !important;
        }
        .m-sm-4 {
            margin: 3.5rem !important;
        }
        .mt-sm-4,
        .my-sm-4 {
            margin-top: 3.5rem !important;
        }
        .mr-sm-4,
        .mx-sm-4 {
            margin-right: 3.5rem !important;
        }
        .mb-sm-4,
        .my-sm-4 {
            margin-bottom: 3.5rem !important;
        }
        .ml-sm-4,
        .mx-sm-4 {
            margin-left: 3.5rem !important;
        }
        .m-sm-5 {
            margin: 4rem !important;
        }
        .mt-sm-5,
        .my-sm-5 {
            margin-top: 4rem !important;
        }
        .mr-sm-5,
        .mx-sm-5 {
            margin-right: 4rem !important;
        }
        .mb-sm-5,
        .my-sm-5 {
            margin-bottom: 4rem !important;
        }
        .ml-sm-5,
        .mx-sm-5 {
            margin-left: 4rem !important;
        }
        .m-sm-25 {
            margin: 0.25rem !important;
        }
        .mt-sm-25,
        .my-sm-25 {
            margin-top: 0.25rem !important;
        }
        .mr-sm-25,
        .mx-sm-25 {
            margin-right: 0.25rem !important;
        }
        .mb-sm-25,
        .my-sm-25 {
            margin-bottom: 0.25rem !important;
        }
        .ml-sm-25,
        .mx-sm-25 {
            margin-left: 0.25rem !important;
        }
        .m-sm-50 {
            margin: 0.5rem !important;
        }
        .mt-sm-50,
        .my-sm-50 {
            margin-top: 0.5rem !important;
        }
        .mr-sm-50,
        .mx-sm-50 {
            margin-right: 0.5rem !important;
        }
        .mb-sm-50,
        .my-sm-50 {
            margin-bottom: 0.5rem !important;
        }
        .ml-sm-50,
        .mx-sm-50 {
            margin-left: 0.5rem !important;
        }
        .m-sm-75 {
            margin: 0.75rem !important;
        }
        .mt-sm-75,
        .my-sm-75 {
            margin-top: 0.75rem !important;
        }
        .mr-sm-75,
        .mx-sm-75 {
            margin-right: 0.75rem !important;
        }
        .mb-sm-75,
        .my-sm-75 {
            margin-bottom: 0.75rem !important;
        }
        .ml-sm-75,
        .mx-sm-75 {
            margin-left: 0.75rem !important;
        }
        .p-sm-0 {
            padding: 0 !important;
        }
        .pt-sm-0,
        .py-sm-0 {
            padding-top: 0 !important;
        }
        .pr-sm-0,
        .px-sm-0 {
            padding-right: 0 !important;
        }
        .pb-sm-0,
        .py-sm-0 {
            padding-bottom: 0 !important;
        }
        .pl-sm-0,
        .px-sm-0 {
            padding-left: 0 !important;
        }
        .p-sm-1 {
            padding: 1rem !important;
        }
        .pt-sm-1,
        .py-sm-1 {
            padding-top: 1rem !important;
        }
        .pr-sm-1,
        .px-sm-1 {
            padding-right: 1rem !important;
        }
        .pb-sm-1,
        .py-sm-1 {
            padding-bottom: 1rem !important;
        }
        .pl-sm-1,
        .px-sm-1 {
            padding-left: 1rem !important;
        }
        .p-sm-2 {
            padding: 1.5rem !important;
        }
        .pt-sm-2,
        .py-sm-2 {
            padding-top: 1.5rem !important;
        }
        .pr-sm-2,
        .px-sm-2 {
            padding-right: 1.5rem !important;
        }
        .pb-sm-2,
        .py-sm-2 {
            padding-bottom: 1.5rem !important;
        }
        .pl-sm-2,
        .px-sm-2 {
            padding-left: 1.5rem !important;
        }
        .p-sm-3 {
            padding: 3rem !important;
        }
        .pt-sm-3,
        .py-sm-3 {
            padding-top: 3rem !important;
        }
        .pr-sm-3,
        .px-sm-3 {
            padding-right: 3rem !important;
        }
        .pb-sm-3,
        .py-sm-3 {
            padding-bottom: 3rem !important;
        }
        .pl-sm-3,
        .px-sm-3 {
            padding-left: 3rem !important;
        }
        .p-sm-4 {
            padding: 3.5rem !important;
        }
        .pt-sm-4,
        .py-sm-4 {
            padding-top: 3.5rem !important;
        }
        .pr-sm-4,
        .px-sm-4 {
            padding-right: 3.5rem !important;
        }
        .pb-sm-4,
        .py-sm-4 {
            padding-bottom: 3.5rem !important;
        }
        .pl-sm-4,
        .px-sm-4 {
            padding-left: 3.5rem !important;
        }
        .p-sm-5 {
            padding: 4rem !important;
        }
        .pt-sm-5,
        .py-sm-5 {
            padding-top: 4rem !important;
        }
        .pr-sm-5,
        .px-sm-5 {
            padding-right: 4rem !important;
        }
        .pb-sm-5,
        .py-sm-5 {
            padding-bottom: 4rem !important;
        }
        .pl-sm-5,
        .px-sm-5 {
            padding-left: 4rem !important;
        }
        .p-sm-25 {
            padding: 0.25rem !important;
        }
        .pt-sm-25,
        .py-sm-25 {
            padding-top: 0.25rem !important;
        }
        .pr-sm-25,
        .px-sm-25 {
            padding-right: 0.25rem !important;
        }
        .pb-sm-25,
        .py-sm-25 {
            padding-bottom: 0.25rem !important;
        }
        .pl-sm-25,
        .px-sm-25 {
            padding-left: 0.25rem !important;
        }
        .p-sm-50 {
            padding: 0.5rem !important;
        }
        .pt-sm-50,
        .py-sm-50 {
            padding-top: 0.5rem !important;
        }
        .pr-sm-50,
        .px-sm-50 {
            padding-right: 0.5rem !important;
        }
        .pb-sm-50,
        .py-sm-50 {
            padding-bottom: 0.5rem !important;
        }
        .pl-sm-50,
        .px-sm-50 {
            padding-left: 0.5rem !important;
        }
        .p-sm-75 {
            padding: 0.75rem !important;
        }
        .pt-sm-75,
        .py-sm-75 {
            padding-top: 0.75rem !important;
        }
        .pr-sm-75,
        .px-sm-75 {
            padding-right: 0.75rem !important;
        }
        .pb-sm-75,
        .py-sm-75 {
            padding-bottom: 0.75rem !important;
        }
        .pl-sm-75,
        .px-sm-75 {
            padding-left: 0.75rem !important;
        }
        .m-sm-n1 {
            margin: -1rem !important;
        }
        .mt-sm-n1,
        .my-sm-n1 {
            margin-top: -1rem !important;
        }
        .mr-sm-n1,
        .mx-sm-n1 {
            margin-right: -1rem !important;
        }
        .mb-sm-n1,
        .my-sm-n1 {
            margin-bottom: -1rem !important;
        }
        .ml-sm-n1,
        .mx-sm-n1 {
            margin-left: -1rem !important;
        }
        .m-sm-n2 {
            margin: -1.5rem !important;
        }
        .mt-sm-n2,
        .my-sm-n2 {
            margin-top: -1.5rem !important;
        }
        .mr-sm-n2,
        .mx-sm-n2 {
            margin-right: -1.5rem !important;
        }
        .mb-sm-n2,
        .my-sm-n2 {
            margin-bottom: -1.5rem !important;
        }
        .ml-sm-n2,
        .mx-sm-n2 {
            margin-left: -1.5rem !important;
        }
        .m-sm-n3 {
            margin: -3rem !important;
        }
        .mt-sm-n3,
        .my-sm-n3 {
            margin-top: -3rem !important;
        }
        .mr-sm-n3,
        .mx-sm-n3 {
            margin-right: -3rem !important;
        }
        .mb-sm-n3,
        .my-sm-n3 {
            margin-bottom: -3rem !important;
        }
        .ml-sm-n3,
        .mx-sm-n3 {
            margin-left: -3rem !important;
        }
        .m-sm-n4 {
            margin: -3.5rem !important;
        }
        .mt-sm-n4,
        .my-sm-n4 {
            margin-top: -3.5rem !important;
        }
        .mr-sm-n4,
        .mx-sm-n4 {
            margin-right: -3.5rem !important;
        }
        .mb-sm-n4,
        .my-sm-n4 {
            margin-bottom: -3.5rem !important;
        }
        .ml-sm-n4,
        .mx-sm-n4 {
            margin-left: -3.5rem !important;
        }
        .m-sm-n5 {
            margin: -4rem !important;
        }
        .mt-sm-n5,
        .my-sm-n5 {
            margin-top: -4rem !important;
        }
        .mr-sm-n5,
        .mx-sm-n5 {
            margin-right: -4rem !important;
        }
        .mb-sm-n5,
        .my-sm-n5 {
            margin-bottom: -4rem !important;
        }
        .ml-sm-n5,
        .mx-sm-n5 {
            margin-left: -4rem !important;
        }
        .m-sm-n25 {
            margin: -0.25rem !important;
        }
        .mt-sm-n25,
        .my-sm-n25 {
            margin-top: -0.25rem !important;
        }
        .mr-sm-n25,
        .mx-sm-n25 {
            margin-right: -0.25rem !important;
        }
        .mb-sm-n25,
        .my-sm-n25 {
            margin-bottom: -0.25rem !important;
        }
        .ml-sm-n25,
        .mx-sm-n25 {
            margin-left: -0.25rem !important;
        }
        .m-sm-n50 {
            margin: -0.5rem !important;
        }
        .mt-sm-n50,
        .my-sm-n50 {
            margin-top: -0.5rem !important;
        }
        .mr-sm-n50,
        .mx-sm-n50 {
            margin-right: -0.5rem !important;
        }
        .mb-sm-n50,
        .my-sm-n50 {
            margin-bottom: -0.5rem !important;
        }
        .ml-sm-n50,
        .mx-sm-n50 {
            margin-left: -0.5rem !important;
        }
        .m-sm-n75 {
            margin: -0.75rem !important;
        }
        .mt-sm-n75,
        .my-sm-n75 {
            margin-top: -0.75rem !important;
        }
        .mr-sm-n75,
        .mx-sm-n75 {
            margin-right: -0.75rem !important;
        }
        .mb-sm-n75,
        .my-sm-n75 {
            margin-bottom: -0.75rem !important;
        }
        .ml-sm-n75,
        .mx-sm-n75 {
            margin-left: -0.75rem !important;
        }
        .m-sm-auto {
            margin: auto !important;
        }
        .mt-sm-auto,
        .my-sm-auto {
            margin-top: auto !important;
        }
        .mr-sm-auto,
        .mx-sm-auto {
            margin-right: auto !important;
        }
        .mb-sm-auto,
        .my-sm-auto {
            margin-bottom: auto !important;
        }
        .ml-sm-auto,
        .mx-sm-auto {
            margin-left: auto !important;
        }
    }

    @media (min-width: 768px) {
        .m-md-0 {
            margin: 0 !important;
        }
        .mt-md-0,
        .my-md-0 {
            margin-top: 0 !important;
        }
        .mr-md-0,
        .mx-md-0 {
            margin-right: 0 !important;
        }
        .mb-md-0,
        .my-md-0 {
            margin-bottom: 0 !important;
        }
        .ml-md-0,
        .mx-md-0 {
            margin-left: 0 !important;
        }
        .m-md-1 {
            margin: 1rem !important;
        }
        .mt-md-1,
        .my-md-1 {
            margin-top: 1rem !important;
        }
        .mr-md-1,
        .mx-md-1 {
            margin-right: 1rem !important;
        }
        .mb-md-1,
        .my-md-1 {
            margin-bottom: 1rem !important;
        }
        .ml-md-1,
        .mx-md-1 {
            margin-left: 1rem !important;
        }
        .m-md-2 {
            margin: 1.5rem !important;
        }
        .mt-md-2,
        .my-md-2 {
            margin-top: 1.5rem !important;
        }
        .mr-md-2,
        .mx-md-2 {
            margin-right: 1.5rem !important;
        }
        .mb-md-2,
        .my-md-2 {
            margin-bottom: 1.5rem !important;
        }
        .ml-md-2,
        .mx-md-2 {
            margin-left: 1.5rem !important;
        }
        .m-md-3 {
            margin: 3rem !important;
        }
        .mt-md-3,
        .my-md-3 {
            margin-top: 3rem !important;
        }
        .mr-md-3,
        .mx-md-3 {
            margin-right: 3rem !important;
        }
        .mb-md-3,
        .my-md-3 {
            margin-bottom: 3rem !important;
        }
        .ml-md-3,
        .mx-md-3 {
            margin-left: 3rem !important;
        }
        .m-md-4 {
            margin: 3.5rem !important;
        }
        .mt-md-4,
        .my-md-4 {
            margin-top: 3.5rem !important;
        }
        .mr-md-4,
        .mx-md-4 {
            margin-right: 3.5rem !important;
        }
        .mb-md-4,
        .my-md-4 {
            margin-bottom: 3.5rem !important;
        }
        .ml-md-4,
        .mx-md-4 {
            margin-left: 3.5rem !important;
        }
        .m-md-5 {
            margin: 4rem !important;
        }
        .mt-md-5,
        .my-md-5 {
            margin-top: 4rem !important;
        }
        .mr-md-5,
        .mx-md-5 {
            margin-right: 4rem !important;
        }
        .mb-md-5,
        .my-md-5 {
            margin-bottom: 4rem !important;
        }
        .ml-md-5,
        .mx-md-5 {
            margin-left: 4rem !important;
        }
        .m-md-25 {
            margin: 0.25rem !important;
        }
        .mt-md-25,
        .my-md-25 {
            margin-top: 0.25rem !important;
        }
        .mr-md-25,
        .mx-md-25 {
            margin-right: 0.25rem !important;
        }
        .mb-md-25,
        .my-md-25 {
            margin-bottom: 0.25rem !important;
        }
        .ml-md-25,
        .mx-md-25 {
            margin-left: 0.25rem !important;
        }
        .m-md-50 {
            margin: 0.5rem !important;
        }
        .mt-md-50,
        .my-md-50 {
            margin-top: 0.5rem !important;
        }
        .mr-md-50,
        .mx-md-50 {
            margin-right: 0.5rem !important;
        }
        .mb-md-50,
        .my-md-50 {
            margin-bottom: 0.5rem !important;
        }
        .ml-md-50,
        .mx-md-50 {
            margin-left: 0.5rem !important;
        }
        .m-md-75 {
            margin: 0.75rem !important;
        }
        .mt-md-75,
        .my-md-75 {
            margin-top: 0.75rem !important;
        }
        .mr-md-75,
        .mx-md-75 {
            margin-right: 0.75rem !important;
        }
        .mb-md-75,
        .my-md-75 {
            margin-bottom: 0.75rem !important;
        }
        .ml-md-75,
        .mx-md-75 {
            margin-left: 0.75rem !important;
        }
        .p-md-0 {
            padding: 0 !important;
        }
        .pt-md-0,
        .py-md-0 {
            padding-top: 0 !important;
        }
        .pr-md-0,
        .px-md-0 {
            padding-right: 0 !important;
        }
        .pb-md-0,
        .py-md-0 {
            padding-bottom: 0 !important;
        }
        .pl-md-0,
        .px-md-0 {
            padding-left: 0 !important;
        }
        .p-md-1 {
            padding: 1rem !important;
        }
        .pt-md-1,
        .py-md-1 {
            padding-top: 1rem !important;
        }
        .pr-md-1,
        .px-md-1 {
            padding-right: 1rem !important;
        }
        .pb-md-1,
        .py-md-1 {
            padding-bottom: 1rem !important;
        }
        .pl-md-1,
        .px-md-1 {
            padding-left: 1rem !important;
        }
        .p-md-2 {
            padding: 1.5rem !important;
        }
        .pt-md-2,
        .py-md-2 {
            padding-top: 1.5rem !important;
        }
        .pr-md-2,
        .px-md-2 {
            padding-right: 1.5rem !important;
        }
        .pb-md-2,
        .py-md-2 {
            padding-bottom: 1.5rem !important;
        }
        .pl-md-2,
        .px-md-2 {
            padding-left: 1.5rem !important;
        }
        .p-md-3 {
            padding: 3rem !important;
        }
        .pt-md-3,
        .py-md-3 {
            padding-top: 3rem !important;
        }
        .pr-md-3,
        .px-md-3 {
            padding-right: 3rem !important;
        }
        .pb-md-3,
        .py-md-3 {
            padding-bottom: 3rem !important;
        }
        .pl-md-3,
        .px-md-3 {
            padding-left: 3rem !important;
        }
        .p-md-4 {
            padding: 3.5rem !important;
        }
        .pt-md-4,
        .py-md-4 {
            padding-top: 3.5rem !important;
        }
        .pr-md-4,
        .px-md-4 {
            padding-right: 3.5rem !important;
        }
        .pb-md-4,
        .py-md-4 {
            padding-bottom: 3.5rem !important;
        }
        .pl-md-4,
        .px-md-4 {
            padding-left: 3.5rem !important;
        }
        .p-md-5 {
            padding: 4rem !important;
        }
        .pt-md-5,
        .py-md-5 {
            padding-top: 4rem !important;
        }
        .pr-md-5,
        .px-md-5 {
            padding-right: 4rem !important;
        }
        .pb-md-5,
        .py-md-5 {
            padding-bottom: 4rem !important;
        }
        .pl-md-5,
        .px-md-5 {
            padding-left: 4rem !important;
        }
        .p-md-25 {
            padding: 0.25rem !important;
        }
        .pt-md-25,
        .py-md-25 {
            padding-top: 0.25rem !important;
        }
        .pr-md-25,
        .px-md-25 {
            padding-right: 0.25rem !important;
        }
        .pb-md-25,
        .py-md-25 {
            padding-bottom: 0.25rem !important;
        }
        .pl-md-25,
        .px-md-25 {
            padding-left: 0.25rem !important;
        }
        .p-md-50 {
            padding: 0.5rem !important;
        }
        .pt-md-50,
        .py-md-50 {
            padding-top: 0.5rem !important;
        }
        .pr-md-50,
        .px-md-50 {
            padding-right: 0.5rem !important;
        }
        .pb-md-50,
        .py-md-50 {
            padding-bottom: 0.5rem !important;
        }
        .pl-md-50,
        .px-md-50 {
            padding-left: 0.5rem !important;
        }
        .p-md-75 {
            padding: 0.75rem !important;
        }
        .pt-md-75,
        .py-md-75 {
            padding-top: 0.75rem !important;
        }
        .pr-md-75,
        .px-md-75 {
            padding-right: 0.75rem !important;
        }
        .pb-md-75,
        .py-md-75 {
            padding-bottom: 0.75rem !important;
        }
        .pl-md-75,
        .px-md-75 {
            padding-left: 0.75rem !important;
        }
        .m-md-n1 {
            margin: -1rem !important;
        }
        .mt-md-n1,
        .my-md-n1 {
            margin-top: -1rem !important;
        }
        .mr-md-n1,
        .mx-md-n1 {
            margin-right: -1rem !important;
        }
        .mb-md-n1,
        .my-md-n1 {
            margin-bottom: -1rem !important;
        }
        .ml-md-n1,
        .mx-md-n1 {
            margin-left: -1rem !important;
        }
        .m-md-n2 {
            margin: -1.5rem !important;
        }
        .mt-md-n2,
        .my-md-n2 {
            margin-top: -1.5rem !important;
        }
        .mr-md-n2,
        .mx-md-n2 {
            margin-right: -1.5rem !important;
        }
        .mb-md-n2,
        .my-md-n2 {
            margin-bottom: -1.5rem !important;
        }
        .ml-md-n2,
        .mx-md-n2 {
            margin-left: -1.5rem !important;
        }
        .m-md-n3 {
            margin: -3rem !important;
        }
        .mt-md-n3,
        .my-md-n3 {
            margin-top: -3rem !important;
        }
        .mr-md-n3,
        .mx-md-n3 {
            margin-right: -3rem !important;
        }
        .mb-md-n3,
        .my-md-n3 {
            margin-bottom: -3rem !important;
        }
        .ml-md-n3,
        .mx-md-n3 {
            margin-left: -3rem !important;
        }
        .m-md-n4 {
            margin: -3.5rem !important;
        }
        .mt-md-n4,
        .my-md-n4 {
            margin-top: -3.5rem !important;
        }
        .mr-md-n4,
        .mx-md-n4 {
            margin-right: -3.5rem !important;
        }
        .mb-md-n4,
        .my-md-n4 {
            margin-bottom: -3.5rem !important;
        }
        .ml-md-n4,
        .mx-md-n4 {
            margin-left: -3.5rem !important;
        }
        .m-md-n5 {
            margin: -4rem !important;
        }
        .mt-md-n5,
        .my-md-n5 {
            margin-top: -4rem !important;
        }
        .mr-md-n5,
        .mx-md-n5 {
            margin-right: -4rem !important;
        }
        .mb-md-n5,
        .my-md-n5 {
            margin-bottom: -4rem !important;
        }
        .ml-md-n5,
        .mx-md-n5 {
            margin-left: -4rem !important;
        }
        .m-md-n25 {
            margin: -0.25rem !important;
        }
        .mt-md-n25,
        .my-md-n25 {
            margin-top: -0.25rem !important;
        }
        .mr-md-n25,
        .mx-md-n25 {
            margin-right: -0.25rem !important;
        }
        .mb-md-n25,
        .my-md-n25 {
            margin-bottom: -0.25rem !important;
        }
        .ml-md-n25,
        .mx-md-n25 {
            margin-left: -0.25rem !important;
        }
        .m-md-n50 {
            margin: -0.5rem !important;
        }
        .mt-md-n50,
        .my-md-n50 {
            margin-top: -0.5rem !important;
        }
        .mr-md-n50,
        .mx-md-n50 {
            margin-right: -0.5rem !important;
        }
        .mb-md-n50,
        .my-md-n50 {
            margin-bottom: -0.5rem !important;
        }
        .ml-md-n50,
        .mx-md-n50 {
            margin-left: -0.5rem !important;
        }
        .m-md-n75 {
            margin: -0.75rem !important;
        }
        .mt-md-n75,
        .my-md-n75 {
            margin-top: -0.75rem !important;
        }
        .mr-md-n75,
        .mx-md-n75 {
            margin-right: -0.75rem !important;
        }
        .mb-md-n75,
        .my-md-n75 {
            margin-bottom: -0.75rem !important;
        }
        .ml-md-n75,
        .mx-md-n75 {
            margin-left: -0.75rem !important;
        }
        .m-md-auto {
            margin: auto !important;
        }
        .mt-md-auto,
        .my-md-auto {
            margin-top: auto !important;
        }
        .mr-md-auto,
        .mx-md-auto {
            margin-right: auto !important;
        }
        .mb-md-auto,
        .my-md-auto {
            margin-bottom: auto !important;
        }
        .ml-md-auto,
        .mx-md-auto {
            margin-left: auto !important;
        }
    }

    @media (min-width: 992px) {
        .m-lg-0 {
            margin: 0 !important;
        }
        .mt-lg-0,
        .my-lg-0 {
            margin-top: 0 !important;
        }
        .mr-lg-0,
        .mx-lg-0 {
            margin-right: 0 !important;
        }
        .mb-lg-0,
        .my-lg-0 {
            margin-bottom: 0 !important;
        }
        .ml-lg-0,
        .mx-lg-0 {
            margin-left: 0 !important;
        }
        .m-lg-1 {
            margin: 1rem !important;
        }
        .mt-lg-1,
        .my-lg-1 {
            margin-top: 1rem !important;
        }
        .mr-lg-1,
        .mx-lg-1 {
            margin-right: 1rem !important;
        }
        .mb-lg-1,
        .my-lg-1 {
            margin-bottom: 1rem !important;
        }
        .ml-lg-1,
        .mx-lg-1 {
            margin-left: 1rem !important;
        }
        .m-lg-2 {
            margin: 1.5rem !important;
        }
        .mt-lg-2,
        .my-lg-2 {
            margin-top: 1.5rem !important;
        }
        .mr-lg-2,
        .mx-lg-2 {
            margin-right: 1.5rem !important;
        }
        .mb-lg-2,
        .my-lg-2 {
            margin-bottom: 1.5rem !important;
        }
        .ml-lg-2,
        .mx-lg-2 {
            margin-left: 1.5rem !important;
        }
        .m-lg-3 {
            margin: 3rem !important;
        }
        .mt-lg-3,
        .my-lg-3 {
            margin-top: 3rem !important;
        }
        .mr-lg-3,
        .mx-lg-3 {
            margin-right: 3rem !important;
        }
        .mb-lg-3,
        .my-lg-3 {
            margin-bottom: 3rem !important;
        }
        .ml-lg-3,
        .mx-lg-3 {
            margin-left: 3rem !important;
        }
        .m-lg-4 {
            margin: 3.5rem !important;
        }
        .mt-lg-4,
        .my-lg-4 {
            margin-top: 3.5rem !important;
        }
        .mr-lg-4,
        .mx-lg-4 {
            margin-right: 3.5rem !important;
        }
        .mb-lg-4,
        .my-lg-4 {
            margin-bottom: 3.5rem !important;
        }
        .ml-lg-4,
        .mx-lg-4 {
            margin-left: 3.5rem !important;
        }
        .m-lg-5 {
            margin: 4rem !important;
        }
        .mt-lg-5,
        .my-lg-5 {
            margin-top: 4rem !important;
        }
        .mr-lg-5,
        .mx-lg-5 {
            margin-right: 4rem !important;
        }
        .mb-lg-5,
        .my-lg-5 {
            margin-bottom: 4rem !important;
        }
        .ml-lg-5,
        .mx-lg-5 {
            margin-left: 4rem !important;
        }
        .m-lg-25 {
            margin: 0.25rem !important;
        }
        .mt-lg-25,
        .my-lg-25 {
            margin-top: 0.25rem !important;
        }
        .mr-lg-25,
        .mx-lg-25 {
            margin-right: 0.25rem !important;
        }
        .mb-lg-25,
        .my-lg-25 {
            margin-bottom: 0.25rem !important;
        }
        .ml-lg-25,
        .mx-lg-25 {
            margin-left: 0.25rem !important;
        }
        .m-lg-50 {
            margin: 0.5rem !important;
        }
        .mt-lg-50,
        .my-lg-50 {
            margin-top: 0.5rem !important;
        }
        .mr-lg-50,
        .mx-lg-50 {
            margin-right: 0.5rem !important;
        }
        .mb-lg-50,
        .my-lg-50 {
            margin-bottom: 0.5rem !important;
        }
        .ml-lg-50,
        .mx-lg-50 {
            margin-left: 0.5rem !important;
        }
        .m-lg-75 {
            margin: 0.75rem !important;
        }
        .mt-lg-75,
        .my-lg-75 {
            margin-top: 0.75rem !important;
        }
        .mr-lg-75,
        .mx-lg-75 {
            margin-right: 0.75rem !important;
        }
        .mb-lg-75,
        .my-lg-75 {
            margin-bottom: 0.75rem !important;
        }
        .ml-lg-75,
        .mx-lg-75 {
            margin-left: 0.75rem !important;
        }
        .p-lg-0 {
            padding: 0 !important;
        }
        .pt-lg-0,
        .py-lg-0 {
            padding-top: 0 !important;
        }
        .pr-lg-0,
        .px-lg-0 {
            padding-right: 0 !important;
        }
        .pb-lg-0,
        .py-lg-0 {
            padding-bottom: 0 !important;
        }
        .pl-lg-0,
        .px-lg-0 {
            padding-left: 0 !important;
        }
        .p-lg-1 {
            padding: 1rem !important;
        }
        .pt-lg-1,
        .py-lg-1 {
            padding-top: 1rem !important;
        }
        .pr-lg-1,
        .px-lg-1 {
            padding-right: 1rem !important;
        }
        .pb-lg-1,
        .py-lg-1 {
            padding-bottom: 1rem !important;
        }
        .pl-lg-1,
        .px-lg-1 {
            padding-left: 1rem !important;
        }
        .p-lg-2 {
            padding: 1.5rem !important;
        }
        .pt-lg-2,
        .py-lg-2 {
            padding-top: 1.5rem !important;
        }
        .pr-lg-2,
        .px-lg-2 {
            padding-right: 1.5rem !important;
        }
        .pb-lg-2,
        .py-lg-2 {
            padding-bottom: 1.5rem !important;
        }
        .pl-lg-2,
        .px-lg-2 {
            padding-left: 1.5rem !important;
        }
        .p-lg-3 {
            padding: 3rem !important;
        }
        .pt-lg-3,
        .py-lg-3 {
            padding-top: 3rem !important;
        }
        .pr-lg-3,
        .px-lg-3 {
            padding-right: 3rem !important;
        }
        .pb-lg-3,
        .py-lg-3 {
            padding-bottom: 3rem !important;
        }
        .pl-lg-3,
        .px-lg-3 {
            padding-left: 3rem !important;
        }
        .p-lg-4 {
            padding: 3.5rem !important;
        }
        .pt-lg-4,
        .py-lg-4 {
            padding-top: 3.5rem !important;
        }
        .pr-lg-4,
        .px-lg-4 {
            padding-right: 3.5rem !important;
        }
        .pb-lg-4,
        .py-lg-4 {
            padding-bottom: 3.5rem !important;
        }
        .pl-lg-4,
        .px-lg-4 {
            padding-left: 3.5rem !important;
        }
        .p-lg-5 {
            padding: 4rem !important;
        }
        .pt-lg-5,
        .py-lg-5 {
            padding-top: 4rem !important;
        }
        .pr-lg-5,
        .px-lg-5 {
            padding-right: 4rem !important;
        }
        .pb-lg-5,
        .py-lg-5 {
            padding-bottom: 4rem !important;
        }
        .pl-lg-5,
        .px-lg-5 {
            padding-left: 4rem !important;
        }
        .p-lg-25 {
            padding: 0.25rem !important;
        }
        .pt-lg-25,
        .py-lg-25 {
            padding-top: 0.25rem !important;
        }
        .pr-lg-25,
        .px-lg-25 {
            padding-right: 0.25rem !important;
        }
        .pb-lg-25,
        .py-lg-25 {
            padding-bottom: 0.25rem !important;
        }
        .pl-lg-25,
        .px-lg-25 {
            padding-left: 0.25rem !important;
        }
        .p-lg-50 {
            padding: 0.5rem !important;
        }
        .pt-lg-50,
        .py-lg-50 {
            padding-top: 0.5rem !important;
        }
        .pr-lg-50,
        .px-lg-50 {
            padding-right: 0.5rem !important;
        }
        .pb-lg-50,
        .py-lg-50 {
            padding-bottom: 0.5rem !important;
        }
        .pl-lg-50,
        .px-lg-50 {
            padding-left: 0.5rem !important;
        }
        .p-lg-75 {
            padding: 0.75rem !important;
        }
        .pt-lg-75,
        .py-lg-75 {
            padding-top: 0.75rem !important;
        }
        .pr-lg-75,
        .px-lg-75 {
            padding-right: 0.75rem !important;
        }
        .pb-lg-75,
        .py-lg-75 {
            padding-bottom: 0.75rem !important;
        }
        .pl-lg-75,
        .px-lg-75 {
            padding-left: 0.75rem !important;
        }
        .m-lg-n1 {
            margin: -1rem !important;
        }
        .mt-lg-n1,
        .my-lg-n1 {
            margin-top: -1rem !important;
        }
        .mr-lg-n1,
        .mx-lg-n1 {
            margin-right: -1rem !important;
        }
        .mb-lg-n1,
        .my-lg-n1 {
            margin-bottom: -1rem !important;
        }
        .ml-lg-n1,
        .mx-lg-n1 {
            margin-left: -1rem !important;
        }
        .m-lg-n2 {
            margin: -1.5rem !important;
        }
        .mt-lg-n2,
        .my-lg-n2 {
            margin-top: -1.5rem !important;
        }
        .mr-lg-n2,
        .mx-lg-n2 {
            margin-right: -1.5rem !important;
        }
        .mb-lg-n2,
        .my-lg-n2 {
            margin-bottom: -1.5rem !important;
        }
        .ml-lg-n2,
        .mx-lg-n2 {
            margin-left: -1.5rem !important;
        }
        .m-lg-n3 {
            margin: -3rem !important;
        }
        .mt-lg-n3,
        .my-lg-n3 {
            margin-top: -3rem !important;
        }
        .mr-lg-n3,
        .mx-lg-n3 {
            margin-right: -3rem !important;
        }
        .mb-lg-n3,
        .my-lg-n3 {
            margin-bottom: -3rem !important;
        }
        .ml-lg-n3,
        .mx-lg-n3 {
            margin-left: -3rem !important;
        }
        .m-lg-n4 {
            margin: -3.5rem !important;
        }
        .mt-lg-n4,
        .my-lg-n4 {
            margin-top: -3.5rem !important;
        }
        .mr-lg-n4,
        .mx-lg-n4 {
            margin-right: -3.5rem !important;
        }
        .mb-lg-n4,
        .my-lg-n4 {
            margin-bottom: -3.5rem !important;
        }
        .ml-lg-n4,
        .mx-lg-n4 {
            margin-left: -3.5rem !important;
        }
        .m-lg-n5 {
            margin: -4rem !important;
        }
        .mt-lg-n5,
        .my-lg-n5 {
            margin-top: -4rem !important;
        }
        .mr-lg-n5,
        .mx-lg-n5 {
            margin-right: -4rem !important;
        }
        .mb-lg-n5,
        .my-lg-n5 {
            margin-bottom: -4rem !important;
        }
        .ml-lg-n5,
        .mx-lg-n5 {
            margin-left: -4rem !important;
        }
        .m-lg-n25 {
            margin: -0.25rem !important;
        }
        .mt-lg-n25,
        .my-lg-n25 {
            margin-top: -0.25rem !important;
        }
        .mr-lg-n25,
        .mx-lg-n25 {
            margin-right: -0.25rem !important;
        }
        .mb-lg-n25,
        .my-lg-n25 {
            margin-bottom: -0.25rem !important;
        }
        .ml-lg-n25,
        .mx-lg-n25 {
            margin-left: -0.25rem !important;
        }
        .m-lg-n50 {
            margin: -0.5rem !important;
        }
        .mt-lg-n50,
        .my-lg-n50 {
            margin-top: -0.5rem !important;
        }
        .mr-lg-n50,
        .mx-lg-n50 {
            margin-right: -0.5rem !important;
        }
        .mb-lg-n50,
        .my-lg-n50 {
            margin-bottom: -0.5rem !important;
        }
        .ml-lg-n50,
        .mx-lg-n50 {
            margin-left: -0.5rem !important;
        }
        .m-lg-n75 {
            margin: -0.75rem !important;
        }
        .mt-lg-n75,
        .my-lg-n75 {
            margin-top: -0.75rem !important;
        }
        .mr-lg-n75,
        .mx-lg-n75 {
            margin-right: -0.75rem !important;
        }
        .mb-lg-n75,
        .my-lg-n75 {
            margin-bottom: -0.75rem !important;
        }
        .ml-lg-n75,
        .mx-lg-n75 {
            margin-left: -0.75rem !important;
        }
        .m-lg-auto {
            margin: auto !important;
        }
        .mt-lg-auto,
        .my-lg-auto {
            margin-top: auto !important;
        }
        .mr-lg-auto,
        .mx-lg-auto {
            margin-right: auto !important;
        }
        .mb-lg-auto,
        .my-lg-auto {
            margin-bottom: auto !important;
        }
        .ml-lg-auto,
        .mx-lg-auto {
            margin-left: auto !important;
        }
    }

    @media (min-width: 1200px) {
        .m-xl-0 {
            margin: 0 !important;
        }
        .mt-xl-0,
        .my-xl-0 {
            margin-top: 0 !important;
        }
        .mr-xl-0,
        .mx-xl-0 {
            margin-right: 0 !important;
        }
        .mb-xl-0,
        .my-xl-0 {
            margin-bottom: 0 !important;
        }
        .ml-xl-0,
        .mx-xl-0 {
            margin-left: 0 !important;
        }
        .m-xl-1 {
            margin: 1rem !important;
        }
        .mt-xl-1,
        .my-xl-1 {
            margin-top: 1rem !important;
        }
        .mr-xl-1,
        .mx-xl-1 {
            margin-right: 1rem !important;
        }
        .mb-xl-1,
        .my-xl-1 {
            margin-bottom: 1rem !important;
        }
        .ml-xl-1,
        .mx-xl-1 {
            margin-left: 1rem !important;
        }
        .m-xl-2 {
            margin: 1.5rem !important;
        }
        .mt-xl-2,
        .my-xl-2 {
            margin-top: 1.5rem !important;
        }
        .mr-xl-2,
        .mx-xl-2 {
            margin-right: 1.5rem !important;
        }
        .mb-xl-2,
        .my-xl-2 {
            margin-bottom: 1.5rem !important;
        }
        .ml-xl-2,
        .mx-xl-2 {
            margin-left: 1.5rem !important;
        }
        .m-xl-3 {
            margin: 3rem !important;
        }
        .mt-xl-3,
        .my-xl-3 {
            margin-top: 3rem !important;
        }
        .mr-xl-3,
        .mx-xl-3 {
            margin-right: 3rem !important;
        }
        .mb-xl-3,
        .my-xl-3 {
            margin-bottom: 3rem !important;
        }
        .ml-xl-3,
        .mx-xl-3 {
            margin-left: 3rem !important;
        }
        .m-xl-4 {
            margin: 3.5rem !important;
        }
        .mt-xl-4,
        .my-xl-4 {
            margin-top: 3.5rem !important;
        }
        .mr-xl-4,
        .mx-xl-4 {
            margin-right: 3.5rem !important;
        }
        .mb-xl-4,
        .my-xl-4 {
            margin-bottom: 3.5rem !important;
        }
        .ml-xl-4,
        .mx-xl-4 {
            margin-left: 3.5rem !important;
        }
        .m-xl-5 {
            margin: 4rem !important;
        }
        .mt-xl-5,
        .my-xl-5 {
            margin-top: 4rem !important;
        }
        .mr-xl-5,
        .mx-xl-5 {
            margin-right: 4rem !important;
        }
        .mb-xl-5,
        .my-xl-5 {
            margin-bottom: 4rem !important;
        }
        .ml-xl-5,
        .mx-xl-5 {
            margin-left: 4rem !important;
        }
        .m-xl-25 {
            margin: 0.25rem !important;
        }
        .mt-xl-25,
        .my-xl-25 {
            margin-top: 0.25rem !important;
        }
        .mr-xl-25,
        .mx-xl-25 {
            margin-right: 0.25rem !important;
        }
        .mb-xl-25,
        .my-xl-25 {
            margin-bottom: 0.25rem !important;
        }
        .ml-xl-25,
        .mx-xl-25 {
            margin-left: 0.25rem !important;
        }
        .m-xl-50 {
            margin: 0.5rem !important;
        }
        .mt-xl-50,
        .my-xl-50 {
            margin-top: 0.5rem !important;
        }
        .mr-xl-50,
        .mx-xl-50 {
            margin-right: 0.5rem !important;
        }
        .mb-xl-50,
        .my-xl-50 {
            margin-bottom: 0.5rem !important;
        }
        .ml-xl-50,
        .mx-xl-50 {
            margin-left: 0.5rem !important;
        }
        .m-xl-75 {
            margin: 0.75rem !important;
        }
        .mt-xl-75,
        .my-xl-75 {
            margin-top: 0.75rem !important;
        }
        .mr-xl-75,
        .mx-xl-75 {
            margin-right: 0.75rem !important;
        }
        .mb-xl-75,
        .my-xl-75 {
            margin-bottom: 0.75rem !important;
        }
        .ml-xl-75,
        .mx-xl-75 {
            margin-left: 0.75rem !important;
        }
        .p-xl-0 {
            padding: 0 !important;
        }
        .pt-xl-0,
        .py-xl-0 {
            padding-top: 0 !important;
        }
        .pr-xl-0,
        .px-xl-0 {
            padding-right: 0 !important;
        }
        .pb-xl-0,
        .py-xl-0 {
            padding-bottom: 0 !important;
        }
        .pl-xl-0,
        .px-xl-0 {
            padding-left: 0 !important;
        }
        .p-xl-1 {
            padding: 1rem !important;
        }
        .pt-xl-1,
        .py-xl-1 {
            padding-top: 1rem !important;
        }
        .pr-xl-1,
        .px-xl-1 {
            padding-right: 1rem !important;
        }
        .pb-xl-1,
        .py-xl-1 {
            padding-bottom: 1rem !important;
        }
        .pl-xl-1,
        .px-xl-1 {
            padding-left: 1rem !important;
        }
        .p-xl-2 {
            padding: 1.5rem !important;
        }
        .pt-xl-2,
        .py-xl-2 {
            padding-top: 1.5rem !important;
        }
        .pr-xl-2,
        .px-xl-2 {
            padding-right: 1.5rem !important;
        }
        .pb-xl-2,
        .py-xl-2 {
            padding-bottom: 1.5rem !important;
        }
        .pl-xl-2,
        .px-xl-2 {
            padding-left: 1.5rem !important;
        }
        .p-xl-3 {
            padding: 3rem !important;
        }
        .pt-xl-3,
        .py-xl-3 {
            padding-top: 3rem !important;
        }
        .pr-xl-3,
        .px-xl-3 {
            padding-right: 3rem !important;
        }
        .pb-xl-3,
        .py-xl-3 {
            padding-bottom: 3rem !important;
        }
        .pl-xl-3,
        .px-xl-3 {
            padding-left: 3rem !important;
        }
        .p-xl-4 {
            padding: 3.5rem !important;
        }
        .pt-xl-4,
        .py-xl-4 {
            padding-top: 3.5rem !important;
        }
        .pr-xl-4,
        .px-xl-4 {
            padding-right: 3.5rem !important;
        }
        .pb-xl-4,
        .py-xl-4 {
            padding-bottom: 3.5rem !important;
        }
        .pl-xl-4,
        .px-xl-4 {
            padding-left: 3.5rem !important;
        }
        .p-xl-5 {
            padding: 4rem !important;
        }
        .pt-xl-5,
        .py-xl-5 {
            padding-top: 4rem !important;
        }
        .pr-xl-5,
        .px-xl-5 {
            padding-right: 4rem !important;
        }
        .pb-xl-5,
        .py-xl-5 {
            padding-bottom: 4rem !important;
        }
        .pl-xl-5,
        .px-xl-5 {
            padding-left: 4rem !important;
        }
        .p-xl-25 {
            padding: 0.25rem !important;
        }
        .pt-xl-25,
        .py-xl-25 {
            padding-top: 0.25rem !important;
        }
        .pr-xl-25,
        .px-xl-25 {
            padding-right: 0.25rem !important;
        }
        .pb-xl-25,
        .py-xl-25 {
            padding-bottom: 0.25rem !important;
        }
        .pl-xl-25,
        .px-xl-25 {
            padding-left: 0.25rem !important;
        }
        .p-xl-50 {
            padding: 0.5rem !important;
        }
        .pt-xl-50,
        .py-xl-50 {
            padding-top: 0.5rem !important;
        }
        .pr-xl-50,
        .px-xl-50 {
            padding-right: 0.5rem !important;
        }
        .pb-xl-50,
        .py-xl-50 {
            padding-bottom: 0.5rem !important;
        }
        .pl-xl-50,
        .px-xl-50 {
            padding-left: 0.5rem !important;
        }
        .p-xl-75 {
            padding: 0.75rem !important;
        }
        .pt-xl-75,
        .py-xl-75 {
            padding-top: 0.75rem !important;
        }
        .pr-xl-75,
        .px-xl-75 {
            padding-right: 0.75rem !important;
        }
        .pb-xl-75,
        .py-xl-75 {
            padding-bottom: 0.75rem !important;
        }
        .pl-xl-75,
        .px-xl-75 {
            padding-left: 0.75rem !important;
        }
        .m-xl-n1 {
            margin: -1rem !important;
        }
        .mt-xl-n1,
        .my-xl-n1 {
            margin-top: -1rem !important;
        }
        .mr-xl-n1,
        .mx-xl-n1 {
            margin-right: -1rem !important;
        }
        .mb-xl-n1,
        .my-xl-n1 {
            margin-bottom: -1rem !important;
        }
        .ml-xl-n1,
        .mx-xl-n1 {
            margin-left: -1rem !important;
        }
        .m-xl-n2 {
            margin: -1.5rem !important;
        }
        .mt-xl-n2,
        .my-xl-n2 {
            margin-top: -1.5rem !important;
        }
        .mr-xl-n2,
        .mx-xl-n2 {
            margin-right: -1.5rem !important;
        }
        .mb-xl-n2,
        .my-xl-n2 {
            margin-bottom: -1.5rem !important;
        }
        .ml-xl-n2,
        .mx-xl-n2 {
            margin-left: -1.5rem !important;
        }
        .m-xl-n3 {
            margin: -3rem !important;
        }
        .mt-xl-n3,
        .my-xl-n3 {
            margin-top: -3rem !important;
        }
        .mr-xl-n3,
        .mx-xl-n3 {
            margin-right: -3rem !important;
        }
        .mb-xl-n3,
        .my-xl-n3 {
            margin-bottom: -3rem !important;
        }
        .ml-xl-n3,
        .mx-xl-n3 {
            margin-left: -3rem !important;
        }
        .m-xl-n4 {
            margin: -3.5rem !important;
        }
        .mt-xl-n4,
        .my-xl-n4 {
            margin-top: -3.5rem !important;
        }
        .mr-xl-n4,
        .mx-xl-n4 {
            margin-right: -3.5rem !important;
        }
        .mb-xl-n4,
        .my-xl-n4 {
            margin-bottom: -3.5rem !important;
        }
        .ml-xl-n4,
        .mx-xl-n4 {
            margin-left: -3.5rem !important;
        }
        .m-xl-n5 {
            margin: -4rem !important;
        }
        .mt-xl-n5,
        .my-xl-n5 {
            margin-top: -4rem !important;
        }
        .mr-xl-n5,
        .mx-xl-n5 {
            margin-right: -4rem !important;
        }
        .mb-xl-n5,
        .my-xl-n5 {
            margin-bottom: -4rem !important;
        }
        .ml-xl-n5,
        .mx-xl-n5 {
            margin-left: -4rem !important;
        }
        .m-xl-n25 {
            margin: -0.25rem !important;
        }
        .mt-xl-n25,
        .my-xl-n25 {
            margin-top: -0.25rem !important;
        }
        .mr-xl-n25,
        .mx-xl-n25 {
            margin-right: -0.25rem !important;
        }
        .mb-xl-n25,
        .my-xl-n25 {
            margin-bottom: -0.25rem !important;
        }
        .ml-xl-n25,
        .mx-xl-n25 {
            margin-left: -0.25rem !important;
        }
        .m-xl-n50 {
            margin: -0.5rem !important;
        }
        .mt-xl-n50,
        .my-xl-n50 {
            margin-top: -0.5rem !important;
        }
        .mr-xl-n50,
        .mx-xl-n50 {
            margin-right: -0.5rem !important;
        }
        .mb-xl-n50,
        .my-xl-n50 {
            margin-bottom: -0.5rem !important;
        }
        .ml-xl-n50,
        .mx-xl-n50 {
            margin-left: -0.5rem !important;
        }
        .m-xl-n75 {
            margin: -0.75rem !important;
        }
        .mt-xl-n75,
        .my-xl-n75 {
            margin-top: -0.75rem !important;
        }
        .mr-xl-n75,
        .mx-xl-n75 {
            margin-right: -0.75rem !important;
        }
        .mb-xl-n75,
        .my-xl-n75 {
            margin-bottom: -0.75rem !important;
        }
        .ml-xl-n75,
        .mx-xl-n75 {
            margin-left: -0.75rem !important;
        }
        .m-xl-auto {
            margin: auto !important;
        }
        .mt-xl-auto,
        .my-xl-auto {
            margin-top: auto !important;
        }
        .mr-xl-auto,
        .mx-xl-auto {
            margin-right: auto !important;
        }
        .mb-xl-auto,
        .my-xl-auto {
            margin-bottom: auto !important;
        }
        .ml-xl-auto,
        .mx-xl-auto {
            margin-left: auto !important;
        }
    }

    .text-monospace {
        font-family: "Rubik", Helvetica, Arial, serif !important;
    }

    .text-justify {
        text-align: justify !important;
    }

    .text-wrap {
        white-space: normal !important;
    }

    .text-nowrap {
        white-space: nowrap !important;
    }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .text-left {
        text-align: left !important;
    }

    .text-right {
        text-align: right !important;
    }

    .text-center {
        text-align: center !important;
    }

    @media (min-width: 576px) {
        .text-sm-left {
            text-align: left !important;
        }
        .text-sm-right {
            text-align: right !important;
        }
        .text-sm-center {
            text-align: center !important;
        }
    }

    @media (min-width: 768px) {
        .text-md-left {
            text-align: left !important;
        }
        .text-md-right {
            text-align: right !important;
        }
        .text-md-center {
            text-align: center !important;
        }
    }

    @media (min-width: 992px) {
        .text-lg-left {
            text-align: left !important;
        }
        .text-lg-right {
            text-align: right !important;
        }
        .text-lg-center {
            text-align: center !important;
        }
    }

    @media (min-width: 1200px) {
        .text-xl-left {
            text-align: left !important;
        }
        .text-xl-right {
            text-align: right !important;
        }
        .text-xl-center {
            text-align: center !important;
        }
    }

    .text-lowercase {
        text-transform: lowercase !important;
    }

    .text-uppercase {
        text-transform: uppercase !important;
    }

    .text-capitalize {
        text-transform: capitalize !important;
    }

    .font-weight-light {
        font-weight: 300 !important;
    }

    .font-weight-lighter {
        font-weight: lighter !important;
    }

    .font-weight-normal {
        font-weight: 400 !important;
    }

    .font-weight-bold {
        font-weight: 500 !important;
    }

    .font-weight-bolder {
        font-weight: bolder !important;
    }

    .font-italic {
        font-style: italic !important;
    }

    .text-white {
        color: #FFFFFF !important;
    }

    .text-primary {
        color: #5A8DEE !important;
    }

    a.text-primary:hover, a.text-primary:focus {
        color: #175ee4 !important;
    }

    .text-secondary {
        color: #475F7B !important;
    }

    a.text-secondary:hover, a.text-secondary:focus {
        color: #2b3a4a !important;
    }

    .text-success {
        color: #39DA8A !important;
    }

    a.text-success:hover, a.text-success:focus {
        color: #1fa764 !important;
    }

    .text-info {
        color: #00CFDD !important;
    }

    a.text-info:hover, a.text-info:focus {
        color: #008791 !important;
    }

    .text-warning {
        color: #FDAC41 !important;
    }

    a.text-warning:hover, a.text-warning:focus {
        color: #ef8903 !important;
    }

    .text-danger {
        color: #FF5B5C !important;
    }

    a.text-danger:hover, a.text-danger:focus {
        color: #ff0f10 !important;
    }

    .text-light {
        color: #A3AFBD !important;
    }

    a.text-light:hover, a.text-light:focus {
        color: #76889d !important;
    }

    .text-dark {
        color: #394C62 !important;
    }

    a.text-dark:hover, a.text-dark:focus {
        color: #1d2632 !important;
    }

    .text-body {
        color: #727E8C !important;
    }

    .text-muted {
        color: #828D99 !important;
    }

    .text-black-50 {
        color: rgba(0, 0, 0, 0.5) !important;
    }

    .text-white-50 {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0;
    }

    .text-decoration-none {
        text-decoration: none !important;
    }

    .text-break {
        word-break: break-word !important;
        overflow-wrap: break-word !important;
    }

    .text-reset {
        color: inherit !important;
    }

    .visible {
        visibility: visible !important;
    }

    .invisible {
        visibility: hidden !important;
    }

    @media print {
        *,
        *::before,
        *::after {
            text-shadow: none !important;
            box-shadow: none !important;
        }
        a:not(.btn) {
            text-decoration: underline;
        }
        abbr[title]::after {
            content: " (" attr(title) ")";
        }
        pre {
            white-space: pre-wrap !important;
        }
        pre,
        blockquote {
            border: 1px solid #596F88;
            page-break-inside: avoid;
        }
        thead {
            display: table-header-group;
        }
        tr,
        img {
            page-break-inside: avoid;
        }
        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3;
        }
        h2,
        h3 {
            page-break-after: avoid;
        }
        @page {
            size: a3;
        }
        body {
            min-width: 992px !important;
        }
        .container {
            min-width: 992px !important;
        }
        .navbar {
            display: none;
        }
        .badge {
            border: 1px solid #000;
        }
        .table {
            border-collapse: collapse !important;
        }
        .table td,
        .table th {
            background-color: #FFFFFF !important;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #7E8FA3 !important;
        }
        .table-dark {
            color: inherit;
        }
        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody + tbody {
            border-color: #DFE3E7;
        }
        .table .thead-dark th {
            color: inherit;
            border-color: #DFE3E7;
        }
    }
    /* Colors CSS */
    /* --------- */
    /*------------------------------------------------------------------
[Table of contents for each color options]

- Text Color
- Background Color
- Alert
- Border
- Badges
- Buttons
- Dropdowns
- Bullet
- Pagination
- Progress bars
- Chips
- Divider
- Timeline
- Checkboxes & Radio
- Custom Switches
- Touchspin
- Scrumboard
- Select2
-------------------------------------------------------------------*/
    /* white Color Style */
    /* ----------------------- */
    /* Text color */
    /* ---------- */
    .white {
        color: #FFFFFF !important;
    }

    /* text with light white */
    .text-light-white {
        color: rgba(255, 255, 255, 0.2) !important;
    }

    /* Background color */
    /* ---------------- */
    .bg-white {
        background-color: #FFFFFF !important;
    }

    .bg-white .card-header,
    .bg-white .card-footer {
        background-color: transparent;
    }

    /* bg color lighten for rgba - opacity set */
    .bg-rgba-white {
        background: rgba(255, 255, 255, 0.2) !important;
    }

    .bg-rgba-white.alert {
        color: #FFFFFF;
    }

    .bg-rgba-white.alert.alert-dismissible .close {
        color: #FFFFFF;
    }

    /* Alert white */
    /* ---------------- */
    .alert.alert-white {
        background: #FFFFFF !important;
        color: #fff !important;
        box-shadow: 0 3px 8px 0 rgba(255, 255, 255, 0.4);
        border: none;
    }

    /* Border white */
    /* ---------------- */
    .border-white {
        border: 1px solid #FFFFFF !important;
    }

    .border-white.alert {
        color: #FFFFFF;
    }

    .border-white.alert.alert-dismissible .close {
        color: #FFFFFF;
    }

    .border-top-white {
        border-top: 1px solid #FFFFFF;
    }

    .border-bottom-white {
        border-bottom: 1px solid #FFFFFF;
    }

    .border-left-white {
        border-left: 1px solid #FFFFFF;
    }

    .border-right-white {
        border-right: 1px solid #FFFFFF;
    }

    /* Navbar icon stroke color according to bg color */
    .header-navbar.bg-white .navbar-nav .nav-item > a i {
        -webkit-text-stroke: 0.2px #FFFFFF !important;
    }

    /* Badges */
    /* ------ */
    .badge.badge-white {
        background-color: #FFFFFF;
    }

    .badge.badge-light-white {
        color: #FFFFFF !important;
    }

    .badge.bg-white.badge-glow, .badge.border-white.badge-glow, .badge.badge-white.badge-glow {
        box-shadow: 0px 0px 10px #FFFFFF;
    }

    .badge-circle-white {
        background-color: #FFFFFF;
    }

    .badge-circle-light-white {
        color: #FFFFFF;
    }

    .overlay-white {
        background: #FFFFFF;
        background: rgba(255, 255, 255, 0.6);
    }

    /* Basic buttons */
    /* ------------- */
    .btn-white {
        background-color: #FFFFFF !important;
        color: #fff;
    }

    .btn-white:hover, .btn-white.hover {
        color: #fff;
    }

    .btn-white:hover.glow, .btn-white.hover.glow {
        box-shadow: 0 4px 12px 0 rgba(255, 255, 255, 0.6) !important;
    }

    .btn-white:focus, .btn-white:active, .btn-white.active {
        color: #fff !important;
    }

    .btn-white.glow {
        box-shadow: 0 2px 4px 0 rgba(255, 255, 255, 0.5) !important;
    }

    .btn-white:disabled, .btn-white.disabled {
        color: #fff !important;
    }

    .btn-light-white {
        color: #FFFFFF !important;
    }

    .btn-light-white:hover, .btn-light-white.hover {
        color: #fff !important;
    }

    .btn-light-white:active, .btn-light-white.active {
        color: #fff !important;
    }

    /* Outline buttons */
    .btn-outline-white {
        border: 1px solid #FFFFFF;
        background-color: transparent;
        color: #FFFFFF !important;
    }

    .btn-outline-white:hover, .btn-outline-white.hover {
        color: #fff !important;
    }

    .btn-outline-white:active, .btn-outline-white.active {
        color: #fff !important;
    }

    /* Dropdowns */
    /* --------- */
    .btn-white ~ .dropdown-menu .dropdown-item.active, .btn-outline-white ~ .dropdown-menu .dropdown-item.active {
        background-color: #FFFFFF;
        color: #fff;
    }

    .btn-white ~ .dropdown-menu .dropdown-item.active:hover, .btn-outline-white ~ .dropdown-menu .dropdown-item.active:hover {
        color: #fff;
    }

    .dropdown.dropdown-icon-wrapper .btn-white ~ .dropdown-menu .dropdown-item:hover i, .dropdown.dropdown-icon-wrapper .btn-outline-white ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-white ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-outline-white ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-white ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-outline-white ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-white ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-outline-white ~ .dropdown-menu .dropdown-item:hover i {
        color: #FFFFFF;
    }

    .dropdown.dropdown-icon-wrapper .btn-white ~ .dropdown-menu .dropdown-item:active i, .dropdown.dropdown-icon-wrapper .btn-outline-white ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-white ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-outline-white ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-white ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-outline-white ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-white ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-outline-white ~ .dropdown-menu .dropdown-item:active i {
        color: #fff;
    }

    /* Bullet white */
    .bullet.bullet-white {
        background-color: #FFFFFF;
    }

    /* For Pagination */
    /* -------------- */
    .pagination-white .page-item.active .page-link, .pagination-white .page-item.active .page-link:hover {
        background: #FFFFFF !important;
        color: #fff;
    }

    .pagination-white .page-item.previous .page-link, .pagination-white .page-item.next .page-link {
        color: #FFFFFF;
    }

    .pagination-white .page-item.previous .page-link:hover, .pagination-white .page-item.next .page-link:hover {
        background: #FFFFFF;
    }

    /* Progress Bars white */
    /* ---------------------- */
    .progress-bar-white .progress-bar {
        background-color: #FFFFFF;
        box-shadow: 0 2px 6px 0 rgba(255, 255, 255, 0.6);
    }

    /* Chips white */
    /* ---------------- */
    .chip-white {
        background-color: #FFFFFF !important;
    }

    .chip-white .chip-body {
        color: #fff !important;
    }

    /* Divider white */
    /* ---------------*/
    .divider.divider-white .divider-text:before, .divider.divider-white .divider-text:after {
        border-color: #FFFFFF !important;
    }

    /* timeline */
    .widget-timeline li.timeline-items.timeline-icon-white:before {
        background: #FFFFFF !important;
    }

    /* Custom Checkbox & Radio - Colored */
    /* --------------------------------- */
    input[type="checkbox"].bg-white + .custom-control-label:before, input[type="radio"].bg-white + .custom-control-label:before {
        background-color: #FFFFFF !important;
    }

    .checkbox.checkbox-white input:checked ~ label::before, .checkbox.radio-white input:checked ~ label::before, .radio.checkbox-white input:checked ~ label::before, .radio.radio-white input:checked ~ label::before {
        background-color: #FFFFFF;
        border-color: #FFFFFF;
    }

    .checkbox.checkbox-white input:checked ~ label::after, .checkbox.radio-white input:checked ~ label::after, .radio.checkbox-white input:checked ~ label::after, .radio.radio-white input:checked ~ label::after {
        border-color: #fff;
    }

    .checkbox.checkbox-white.checkbox-glow input:checked ~ label::before, .checkbox.checkbox-white.radio-glow input:checked ~ label::before, .checkbox.radio-white.checkbox-glow input:checked ~ label::before, .checkbox.radio-white.radio-glow input:checked ~ label::before, .radio.checkbox-white.checkbox-glow input:checked ~ label::before, .radio.checkbox-white.radio-glow input:checked ~ label::before, .radio.radio-white.checkbox-glow input:checked ~ label::before, .radio.radio-white.radio-glow input:checked ~ label::before {
        box-shadow: 0 0 6px 0 rgba(255, 255, 255, 0.7);
    }

    .checkbox.checkbox-white.checkbox-icon label i, .checkbox.radio-white.checkbox-icon label i, .radio.checkbox-white.checkbox-icon label i, .radio.radio-white.checkbox-icon label i {
        color: #fff;
    }

    .checkbox.checkbox-white label:after {
        transition: 250ms ease-in-out;
    }

    .radio.radio-white input:checked ~ label::after {
        background-color: #fff;
        transition: all 0.15s cubic-bezier(0.35, 0.9, 0.4, 0.9);
    }

    /* Bootstrap Custom Switches */
    /* ------------------------- */
    .custom-switch-white .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #FFFFFF !important;
        color: #fff;
        transition: all .2s ease-out;
    }

    .custom-switch-white.custom-switch-glow .custom-control-input:not(:disabled):checked ~ .custom-control-label::before {
        box-shadow: 0 0 8px 0 rgba(255, 255, 255, 0.8) !important;
    }

    /* Touchspin Glow */
    /* -------------- */
    .input-group.touchspin-glow .bootstrap-touchspin-down.btn-white, .input-group.touchspin-glow .bootstrap-touchspin-up.btn-white {
        box-shadow: 0 0 8px 0 rgba(255, 255, 255, 0.8);
    }

    /* Scrumboard Application - kanban-item with coloured border */
    /* --------------------------------------------------------- */
    .kanban-container .kanban-board .kanban-item[data-border=white]:before {
        background-color: #FFFFFF;
    }

    .edit-kanban-item select option.bg-color_name {
        background-color: #FFFFFF;
    }

    /* Select2 white */
    /* ---------------*/
    select.select-light-white ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice, select.select-light-white ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice__remove {
        color: #FFFFFF !important;
    }

    /* black Color Style */
    /* ----------------------- */
    /* Text color */
    /* ---------- */
    .black {
        color: #000000 !important;
    }

    /* text with light black */
    .text-light-black {
        color: rgba(0, 0, 0, 0.2) !important;
    }

    /* Background color */
    /* ---------------- */
    .bg-black {
        background-color: #000000 !important;
    }

    .bg-black .card-header,
    .bg-black .card-footer {
        background-color: transparent;
    }

    /* bg color lighten for rgba - opacity set */
    .bg-rgba-black {
        background: rgba(0, 0, 0, 0.2) !important;
    }

    .bg-rgba-black.alert {
        color: #000000;
    }

    .bg-rgba-black.alert.alert-dismissible .close {
        color: #000000;
    }

    /* Alert black */
    /* ---------------- */
    .alert.alert-black {
        background: #000000 !important;
        color: #fff !important;
        box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.4);
        border: none;
    }

    /* Border black */
    /* ---------------- */
    .border-black {
        border: 1px solid #000000 !important;
    }

    .border-black.alert {
        color: #000000;
    }

    .border-black.alert.alert-dismissible .close {
        color: #000000;
    }

    .border-top-black {
        border-top: 1px solid #000000;
    }

    .border-bottom-black {
        border-bottom: 1px solid #000000;
    }

    .border-left-black {
        border-left: 1px solid #000000;
    }

    .border-right-black {
        border-right: 1px solid #000000;
    }

    /* Navbar icon stroke color according to bg color */
    .header-navbar.bg-black .navbar-nav .nav-item > a i {
        -webkit-text-stroke: 0.2px #000000 !important;
    }

    /* Badges */
    /* ------ */
    .badge.badge-black {
        background-color: #000000;
    }

    .badge.badge-light-black {
        color: #000000 !important;
    }

    .badge.bg-black.badge-glow, .badge.border-black.badge-glow, .badge.badge-black.badge-glow {
        box-shadow: 0px 0px 10px #000000;
    }

    .badge-circle-black {
        background-color: #000000;
    }

    .badge-circle-light-black {
        color: #000000;
    }

    .overlay-black {
        background: #000000;
        background: rgba(0, 0, 0, 0.6);
    }

    /* Basic buttons */
    /* ------------- */
    .btn-black {
        background-color: #000000 !important;
        color: #fff;
    }

    .btn-black:hover, .btn-black.hover {
        color: #fff;
    }

    .btn-black:hover.glow, .btn-black.hover.glow {
        box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.6) !important;
    }

    .btn-black:focus, .btn-black:active, .btn-black.active {
        color: #fff !important;
    }

    .btn-black.glow {
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5) !important;
    }

    .btn-black:disabled, .btn-black.disabled {
        color: #fff !important;
    }

    .btn-light-black {
        color: #000000 !important;
    }

    .btn-light-black:hover, .btn-light-black.hover {
        color: #fff !important;
    }

    .btn-light-black:active, .btn-light-black.active {
        color: #fff !important;
    }

    /* Outline buttons */
    .btn-outline-black {
        border: 1px solid #000000;
        background-color: transparent;
        color: #000000 !important;
    }

    .btn-outline-black:hover, .btn-outline-black.hover {
        color: #fff !important;
    }

    .btn-outline-black:active, .btn-outline-black.active {
        color: #fff !important;
    }

    /* Dropdowns */
    /* --------- */
    .btn-black ~ .dropdown-menu .dropdown-item.active, .btn-outline-black ~ .dropdown-menu .dropdown-item.active {
        background-color: #000000;
        color: #fff;
    }

    .btn-black ~ .dropdown-menu .dropdown-item.active:hover, .btn-outline-black ~ .dropdown-menu .dropdown-item.active:hover {
        color: #fff;
    }

    .dropdown.dropdown-icon-wrapper .btn-black ~ .dropdown-menu .dropdown-item:hover i, .dropdown.dropdown-icon-wrapper .btn-outline-black ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-black ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-outline-black ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-black ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-outline-black ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-black ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-outline-black ~ .dropdown-menu .dropdown-item:hover i {
        color: #000000;
    }

    .dropdown.dropdown-icon-wrapper .btn-black ~ .dropdown-menu .dropdown-item:active i, .dropdown.dropdown-icon-wrapper .btn-outline-black ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-black ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-outline-black ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-black ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-outline-black ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-black ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-outline-black ~ .dropdown-menu .dropdown-item:active i {
        color: #fff;
    }

    /* Bullet black */
    .bullet.bullet-black {
        background-color: #000000;
    }

    /* For Pagination */
    /* -------------- */
    .pagination-black .page-item.active .page-link, .pagination-black .page-item.active .page-link:hover {
        background: #000000 !important;
        color: #fff;
    }

    .pagination-black .page-item.previous .page-link, .pagination-black .page-item.next .page-link {
        color: #000000;
    }

    .pagination-black .page-item.previous .page-link:hover, .pagination-black .page-item.next .page-link:hover {
        background: #000000;
    }

    /* Progress Bars black */
    /* ---------------------- */
    .progress-bar-black .progress-bar {
        background-color: #000000;
        box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.6);
    }

    /* Chips black */
    /* ---------------- */
    .chip-black {
        background-color: #000000 !important;
    }

    .chip-black .chip-body {
        color: #fff !important;
    }

    /* Divider black */
    /* ---------------*/
    .divider.divider-black .divider-text:before, .divider.divider-black .divider-text:after {
        border-color: #000000 !important;
    }

    /* timeline */
    .widget-timeline li.timeline-items.timeline-icon-black:before {
        background: #000000 !important;
    }

    /* Custom Checkbox & Radio - Colored */
    /* --------------------------------- */
    input[type="checkbox"].bg-black + .custom-control-label:before, input[type="radio"].bg-black + .custom-control-label:before {
        background-color: #000000 !important;
    }

    .checkbox.checkbox-black input:checked ~ label::before, .checkbox.radio-black input:checked ~ label::before, .radio.checkbox-black input:checked ~ label::before, .radio.radio-black input:checked ~ label::before {
        background-color: #000000;
        border-color: #000000;
    }

    .checkbox.checkbox-black input:checked ~ label::after, .checkbox.radio-black input:checked ~ label::after, .radio.checkbox-black input:checked ~ label::after, .radio.radio-black input:checked ~ label::after {
        border-color: #fff;
    }

    .checkbox.checkbox-black.checkbox-glow input:checked ~ label::before, .checkbox.checkbox-black.radio-glow input:checked ~ label::before, .checkbox.radio-black.checkbox-glow input:checked ~ label::before, .checkbox.radio-black.radio-glow input:checked ~ label::before, .radio.checkbox-black.checkbox-glow input:checked ~ label::before, .radio.checkbox-black.radio-glow input:checked ~ label::before, .radio.radio-black.checkbox-glow input:checked ~ label::before, .radio.radio-black.radio-glow input:checked ~ label::before {
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.7);
    }

    .checkbox.checkbox-black.checkbox-icon label i, .checkbox.radio-black.checkbox-icon label i, .radio.checkbox-black.checkbox-icon label i, .radio.radio-black.checkbox-icon label i {
        color: #fff;
    }

    .checkbox.checkbox-black label:after {
        transition: 250ms ease-in-out;
    }

    .radio.radio-black input:checked ~ label::after {
        background-color: #fff;
        transition: all 0.15s cubic-bezier(0.35, 0.9, 0.4, 0.9);
    }

    /* Bootstrap Custom Switches */
    /* ------------------------- */
    .custom-switch-black .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #000000 !important;
        color: #fff;
        transition: all .2s ease-out;
    }

    .custom-switch-black.custom-switch-glow .custom-control-input:not(:disabled):checked ~ .custom-control-label::before {
        box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.8) !important;
    }

    /* Touchspin Glow */
    /* -------------- */
    .input-group.touchspin-glow .bootstrap-touchspin-down.btn-black, .input-group.touchspin-glow .bootstrap-touchspin-up.btn-black {
        box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.8);
    }

    /* Scrumboard Application - kanban-item with coloured border */
    /* --------------------------------------------------------- */
    .kanban-container .kanban-board .kanban-item[data-border=black]:before {
        background-color: #000000;
    }

    .edit-kanban-item select option.bg-color_name {
        background-color: #000000;
    }

    /* Select2 black */
    /* ---------------*/
    select.select-light-black ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice, select.select-light-black ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice__remove {
        color: #000000 !important;
    }

    /* dark Color Style */
    /* ----------------------- */
    /* Text color */
    /* ---------- */
    .dark {
        color: #394C62 !important;
    }

    /* text with light dark */
    .text-light-dark {
        color: rgba(57, 76, 98, 0.2) !important;
    }

    /* Background color */
    /* ---------------- */
    .bg-dark {
        background-color: #394C62 !important;
    }

    .bg-dark .card-header,
    .bg-dark .card-footer {
        background-color: transparent;
    }

    /* bg color lighten for rgba - opacity set */
    .bg-rgba-dark {
        background: rgba(57, 76, 98, 0.2) !important;
    }

    .bg-rgba-dark.alert {
        color: #394C62;
    }

    .bg-rgba-dark.alert.alert-dismissible .close {
        color: #394C62;
    }

    /* Alert dark */
    /* ---------------- */
    .alert.alert-dark {
        background: #394C62 !important;
        color: #fff !important;
        box-shadow: 0 3px 8px 0 rgba(57, 76, 98, 0.4);
        border: none;
    }

    /* Border dark */
    /* ---------------- */
    .border-dark {
        border: 1px solid #394C62 !important;
    }

    .border-dark.alert {
        color: #394C62;
    }

    .border-dark.alert.alert-dismissible .close {
        color: #394C62;
    }

    .border-top-dark {
        border-top: 1px solid #394C62;
    }

    .border-bottom-dark {
        border-bottom: 1px solid #394C62;
    }

    .border-left-dark {
        border-left: 1px solid #394C62;
    }

    .border-right-dark {
        border-right: 1px solid #394C62;
    }

    /* Navbar icon stroke color according to bg color */
    .header-navbar.bg-dark .navbar-nav .nav-item > a i {
        -webkit-text-stroke: 0.2px #394C62 !important;
    }

    /* Badges */
    /* ------ */
    .badge.badge-dark {
        background-color: #394C62;
    }

    .badge.badge-light-dark {
        color: #394C62 !important;
    }

    .badge.bg-dark.badge-glow, .badge.border-dark.badge-glow, .badge.badge-dark.badge-glow {
        box-shadow: 0px 0px 10px #394C62;
    }

    .badge-circle-dark {
        background-color: #394C62;
    }

    .badge-circle-light-dark {
        color: #394C62;
    }

    .overlay-dark {
        background: #394C62;
        background: rgba(57, 76, 98, 0.6);
    }

    /* Basic buttons */
    /* ------------- */
    .btn-dark {
        background-color: #394C62 !important;
        color: #fff;
    }

    .btn-dark:hover, .btn-dark.hover {
        color: #fff;
    }

    .btn-dark:hover.glow, .btn-dark.hover.glow {
        box-shadow: 0 4px 12px 0 rgba(57, 76, 98, 0.6) !important;
    }

    .btn-dark:focus, .btn-dark:active, .btn-dark.active {
        color: #fff !important;
    }

    .btn-dark.glow {
        box-shadow: 0 2px 4px 0 rgba(57, 76, 98, 0.5) !important;
    }

    .btn-dark:disabled, .btn-dark.disabled {
        color: #fff !important;
    }

    .btn-light-dark {
        color: #394C62 !important;
    }

    .btn-light-dark:hover, .btn-light-dark.hover {
        color: #fff !important;
    }

    .btn-light-dark:active, .btn-light-dark.active {
        color: #fff !important;
    }

    /* Outline buttons */
    .btn-outline-dark {
        border: 1px solid #394C62;
        background-color: transparent;
        color: #394C62 !important;
    }

    .btn-outline-dark:hover, .btn-outline-dark.hover {
        color: #fff !important;
    }

    .btn-outline-dark:active, .btn-outline-dark.active {
        color: #fff !important;
    }

    /* Dropdowns */
    /* --------- */
    .btn-dark ~ .dropdown-menu .dropdown-item.active, .btn-outline-dark ~ .dropdown-menu .dropdown-item.active {
        background-color: #394C62;
        color: #fff;
    }

    .btn-dark ~ .dropdown-menu .dropdown-item.active:hover, .btn-outline-dark ~ .dropdown-menu .dropdown-item.active:hover {
        color: #fff;
    }

    .dropdown.dropdown-icon-wrapper .btn-dark ~ .dropdown-menu .dropdown-item:hover i, .dropdown.dropdown-icon-wrapper .btn-outline-dark ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-dark ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-outline-dark ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-dark ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-outline-dark ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-dark ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-outline-dark ~ .dropdown-menu .dropdown-item:hover i {
        color: #394C62;
    }

    .dropdown.dropdown-icon-wrapper .btn-dark ~ .dropdown-menu .dropdown-item:active i, .dropdown.dropdown-icon-wrapper .btn-outline-dark ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-dark ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-outline-dark ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-dark ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-outline-dark ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-dark ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-outline-dark ~ .dropdown-menu .dropdown-item:active i {
        color: #fff;
    }

    /* Bullet dark */
    .bullet.bullet-dark {
        background-color: #394C62;
    }

    /* For Pagination */
    /* -------------- */
    .pagination-dark .page-item.active .page-link, .pagination-dark .page-item.active .page-link:hover {
        background: #394C62 !important;
        color: #fff;
    }

    .pagination-dark .page-item.previous .page-link, .pagination-dark .page-item.next .page-link {
        color: #394C62;
    }

    .pagination-dark .page-item.previous .page-link:hover, .pagination-dark .page-item.next .page-link:hover {
        background: #394C62;
    }

    /* Progress Bars dark */
    /* ---------------------- */
    .progress-bar-dark .progress-bar {
        background-color: #394C62;
        box-shadow: 0 2px 6px 0 rgba(57, 76, 98, 0.6);
    }

    /* Chips dark */
    /* ---------------- */
    .chip-dark {
        background-color: #394C62 !important;
    }

    .chip-dark .chip-body {
        color: #fff !important;
    }

    /* Divider dark */
    /* ---------------*/
    .divider.divider-dark .divider-text:before, .divider.divider-dark .divider-text:after {
        border-color: #394C62 !important;
    }

    /* timeline */
    .widget-timeline li.timeline-items.timeline-icon-dark:before {
        background: #394C62 !important;
    }

    /* Custom Checkbox & Radio - Colored */
    /* --------------------------------- */
    input[type="checkbox"].bg-dark + .custom-control-label:before, input[type="radio"].bg-dark + .custom-control-label:before {
        background-color: #394C62 !important;
    }

    .checkbox.checkbox-dark input:checked ~ label::before, .checkbox.radio-dark input:checked ~ label::before, .radio.checkbox-dark input:checked ~ label::before, .radio.radio-dark input:checked ~ label::before {
        background-color: #394C62;
        border-color: #394C62;
    }

    .checkbox.checkbox-dark input:checked ~ label::after, .checkbox.radio-dark input:checked ~ label::after, .radio.checkbox-dark input:checked ~ label::after, .radio.radio-dark input:checked ~ label::after {
        border-color: #fff;
    }

    .checkbox.checkbox-dark.checkbox-glow input:checked ~ label::before, .checkbox.checkbox-dark.radio-glow input:checked ~ label::before, .checkbox.radio-dark.checkbox-glow input:checked ~ label::before, .checkbox.radio-dark.radio-glow input:checked ~ label::before, .radio.checkbox-dark.checkbox-glow input:checked ~ label::before, .radio.checkbox-dark.radio-glow input:checked ~ label::before, .radio.radio-dark.checkbox-glow input:checked ~ label::before, .radio.radio-dark.radio-glow input:checked ~ label::before {
        box-shadow: 0 0 6px 0 rgba(57, 76, 98, 0.7);
    }

    .checkbox.checkbox-dark.checkbox-icon label i, .checkbox.radio-dark.checkbox-icon label i, .radio.checkbox-dark.checkbox-icon label i, .radio.radio-dark.checkbox-icon label i {
        color: #fff;
    }

    .checkbox.checkbox-dark label:after {
        transition: 250ms ease-in-out;
    }

    .radio.radio-dark input:checked ~ label::after {
        background-color: #fff;
        transition: all 0.15s cubic-bezier(0.35, 0.9, 0.4, 0.9);
    }

    /* Bootstrap Custom Switches */
    /* ------------------------- */
    .custom-switch-dark .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #394C62 !important;
        color: #fff;
        transition: all .2s ease-out;
    }

    .custom-switch-dark.custom-switch-glow .custom-control-input:not(:disabled):checked ~ .custom-control-label::before {
        box-shadow: 0 0 8px 0 rgba(57, 76, 98, 0.8) !important;
    }

    /* Touchspin Glow */
    /* -------------- */
    .input-group.touchspin-glow .bootstrap-touchspin-down.btn-dark, .input-group.touchspin-glow .bootstrap-touchspin-up.btn-dark {
        box-shadow: 0 0 8px 0 rgba(57, 76, 98, 0.8);
    }

    /* Scrumboard Application - kanban-item with coloured border */
    /* --------------------------------------------------------- */
    .kanban-container .kanban-board .kanban-item[data-border=dark]:before {
        background-color: #394C62;
    }

    .edit-kanban-item select option.bg-color_name {
        background-color: #394C62;
    }

    /* Select2 dark */
    /* ---------------*/
    select.select-light-dark ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice, select.select-light-dark ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice__remove {
        color: #394C62 !important;
    }

    /* light Color Style */
    /* ----------------------- */
    /* Text color */
    /* ---------- */
    .light {
        color: #A3AFBD !important;
    }

    /* text with light light */
    .text-light-light {
        color: rgba(163, 175, 189, 0.2) !important;
    }

    /* Background color */
    /* ---------------- */
    .bg-light {
        background-color: #A3AFBD !important;
    }

    .bg-light .card-header,
    .bg-light .card-footer {
        background-color: transparent;
    }

    /* bg color lighten for rgba - opacity set */
    .bg-rgba-light {
        background: rgba(163, 175, 189, 0.2) !important;
    }

    .bg-rgba-light.alert {
        color: #A3AFBD;
    }

    .bg-rgba-light.alert.alert-dismissible .close {
        color: #A3AFBD;
    }

    /* Alert light */
    /* ---------------- */
    .alert.alert-light {
        background: #A3AFBD !important;
        color: #fff !important;
        box-shadow: 0 3px 8px 0 rgba(163, 175, 189, 0.4);
        border: none;
    }

    /* Border light */
    /* ---------------- */
    .border-light {
        border: 1px solid #A3AFBD !important;
    }

    .border-light.alert {
        color: #A3AFBD;
    }

    .border-light.alert.alert-dismissible .close {
        color: #A3AFBD;
    }

    .border-top-light {
        border-top: 1px solid #A3AFBD;
    }

    .border-bottom-light {
        border-bottom: 1px solid #A3AFBD;
    }

    .border-left-light {
        border-left: 1px solid #A3AFBD;
    }

    .border-right-light {
        border-right: 1px solid #A3AFBD;
    }

    /* Navbar icon stroke color according to bg color */
    .header-navbar.bg-light .navbar-nav .nav-item > a i {
        -webkit-text-stroke: 0.2px #A3AFBD !important;
    }

    /* Badges */
    /* ------ */
    .badge.badge-light {
        background-color: #A3AFBD;
    }

    .badge.badge-light-light {
        color: #A3AFBD !important;
    }

    .badge.bg-light.badge-glow, .badge.border-light.badge-glow, .badge.badge-light.badge-glow {
        box-shadow: 0px 0px 10px #A3AFBD;
    }

    .badge-circle-light {
        background-color: #A3AFBD;
    }

    .badge-circle-light-light {
        color: #A3AFBD;
    }

    .overlay-light {
        background: #A3AFBD;
        background: rgba(163, 175, 189, 0.6);
    }

    /* Basic buttons */
    /* ------------- */
    .btn-light {
        background-color: #A3AFBD !important;
        color: #fff;
    }

    .btn-light:hover, .btn-light.hover {
        color: #fff;
    }

    .btn-light:hover.glow, .btn-light.hover.glow {
        box-shadow: 0 4px 12px 0 rgba(163, 175, 189, 0.6) !important;
    }

    .btn-light:focus, .btn-light:active, .btn-light.active {
        color: #fff !important;
    }

    .btn-light.glow {
        box-shadow: 0 2px 4px 0 rgba(163, 175, 189, 0.5) !important;
    }

    .btn-light:disabled, .btn-light.disabled {
        color: #fff !important;
    }

    .btn-light-light {
        color: #A3AFBD !important;
    }

    .btn-light-light:hover, .btn-light-light.hover {
        color: #fff !important;
    }

    .btn-light-light:active, .btn-light-light.active {
        color: #fff !important;
    }

    /* Outline buttons */
    .btn-outline-light {
        border: 1px solid #A3AFBD;
        background-color: transparent;
        color: #A3AFBD !important;
    }

    .btn-outline-light:hover, .btn-outline-light.hover {
        color: #fff !important;
    }

    .btn-outline-light:active, .btn-outline-light.active {
        color: #fff !important;
    }

    /* Dropdowns */
    /* --------- */
    .btn-light ~ .dropdown-menu .dropdown-item.active, .btn-outline-light ~ .dropdown-menu .dropdown-item.active {
        background-color: #A3AFBD;
        color: #fff;
    }

    .btn-light ~ .dropdown-menu .dropdown-item.active:hover, .btn-outline-light ~ .dropdown-menu .dropdown-item.active:hover {
        color: #fff;
    }

    .dropdown.dropdown-icon-wrapper .btn-light ~ .dropdown-menu .dropdown-item:hover i, .dropdown.dropdown-icon-wrapper .btn-outline-light ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-light ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-outline-light ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-light ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-outline-light ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-light ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-outline-light ~ .dropdown-menu .dropdown-item:hover i {
        color: #A3AFBD;
    }

    .dropdown.dropdown-icon-wrapper .btn-light ~ .dropdown-menu .dropdown-item:active i, .dropdown.dropdown-icon-wrapper .btn-outline-light ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-light ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-outline-light ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-light ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-outline-light ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-light ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-outline-light ~ .dropdown-menu .dropdown-item:active i {
        color: #fff;
    }

    /* Bullet light */
    .bullet.bullet-light {
        background-color: #A3AFBD;
    }

    /* For Pagination */
    /* -------------- */
    .pagination-light .page-item.active .page-link, .pagination-light .page-item.active .page-link:hover {
        background: #A3AFBD !important;
        color: #fff;
    }

    .pagination-light .page-item.previous .page-link, .pagination-light .page-item.next .page-link {
        color: #A3AFBD;
    }

    .pagination-light .page-item.previous .page-link:hover, .pagination-light .page-item.next .page-link:hover {
        background: #A3AFBD;
    }

    /* Progress Bars light */
    /* ---------------------- */
    .progress-bar-light .progress-bar {
        background-color: #A3AFBD;
        box-shadow: 0 2px 6px 0 rgba(163, 175, 189, 0.6);
    }

    /* Chips light */
    /* ---------------- */
    .chip-light {
        background-color: #A3AFBD !important;
    }

    .chip-light .chip-body {
        color: #fff !important;
    }

    /* Divider light */
    /* ---------------*/
    .divider.divider-light .divider-text:before, .divider.divider-light .divider-text:after {
        border-color: #A3AFBD !important;
    }

    /* timeline */
    .widget-timeline li.timeline-items.timeline-icon-light:before {
        background: #A3AFBD !important;
    }

    /* Custom Checkbox & Radio - Colored */
    /* --------------------------------- */
    input[type="checkbox"].bg-light + .custom-control-label:before, input[type="radio"].bg-light + .custom-control-label:before {
        background-color: #A3AFBD !important;
    }

    .checkbox.checkbox-light input:checked ~ label::before, .checkbox.radio-light input:checked ~ label::before, .radio.checkbox-light input:checked ~ label::before, .radio.radio-light input:checked ~ label::before {
        background-color: #A3AFBD;
        border-color: #A3AFBD;
    }

    .checkbox.checkbox-light input:checked ~ label::after, .checkbox.radio-light input:checked ~ label::after, .radio.checkbox-light input:checked ~ label::after, .radio.radio-light input:checked ~ label::after {
        border-color: #fff;
    }

    .checkbox.checkbox-light.checkbox-glow input:checked ~ label::before, .checkbox.checkbox-light.radio-glow input:checked ~ label::before, .checkbox.radio-light.checkbox-glow input:checked ~ label::before, .checkbox.radio-light.radio-glow input:checked ~ label::before, .radio.checkbox-light.checkbox-glow input:checked ~ label::before, .radio.checkbox-light.radio-glow input:checked ~ label::before, .radio.radio-light.checkbox-glow input:checked ~ label::before, .radio.radio-light.radio-glow input:checked ~ label::before {
        box-shadow: 0 0 6px 0 rgba(163, 175, 189, 0.7);
    }

    .checkbox.checkbox-light.checkbox-icon label i, .checkbox.radio-light.checkbox-icon label i, .radio.checkbox-light.checkbox-icon label i, .radio.radio-light.checkbox-icon label i {
        color: #fff;
    }

    .checkbox.checkbox-light label:after {
        transition: 250ms ease-in-out;
    }

    .radio.radio-light input:checked ~ label::after {
        background-color: #fff;
        transition: all 0.15s cubic-bezier(0.35, 0.9, 0.4, 0.9);
    }

    /* Bootstrap Custom Switches */
    /* ------------------------- */
    .custom-switch-light .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #A3AFBD !important;
        color: #fff;
        transition: all .2s ease-out;
    }

    .custom-switch-light.custom-switch-glow .custom-control-input:not(:disabled):checked ~ .custom-control-label::before {
        box-shadow: 0 0 8px 0 rgba(163, 175, 189, 0.8) !important;
    }

    /* Touchspin Glow */
    /* -------------- */
    .input-group.touchspin-glow .bootstrap-touchspin-down.btn-light, .input-group.touchspin-glow .bootstrap-touchspin-up.btn-light {
        box-shadow: 0 0 8px 0 rgba(163, 175, 189, 0.8);
    }

    /* Scrumboard Application - kanban-item with coloured border */
    /* --------------------------------------------------------- */
    .kanban-container .kanban-board .kanban-item[data-border=light]:before {
        background-color: #A3AFBD;
    }

    .edit-kanban-item select option.bg-color_name {
        background-color: #A3AFBD;
    }

    /* Select2 light */
    /* ---------------*/
    select.select-light-light ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice, select.select-light-light ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice__remove {
        color: #A3AFBD !important;
    }

    .primary.lighten-5 {
        color: #ceddfa !important;
    }

    .bg-primary.bg-lighten-5 {
        background-color: #ceddfa !important;
    }

    .btn-primary.btn-lighten-5 {
        border-color: #2c6de9 !important;
        background-color: #ceddfa !important;
    }

    .btn-primary.btn-lighten-5:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-lighten-5:focus, .btn-primary.btn-lighten-5:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-lighten-5 {
        border-color: #ceddfa !important;
        color: #ceddfa !important;
    }

    .btn-outline-primary.btn-outline-lighten-5:hover {
        background-color: #ceddfa !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ceddfa !important;
    }

    .border-primary.border-lighten-5 {
        border: 1px solid #ceddfa !important;
    }

    .border-top-primary.border-top-lighten-5 {
        border-top: 1px solid #ceddfa !important;
    }

    .border-bottom-primary.border-bottom-lighten-5 {
        border-bottom: 1px solid #ceddfa !important;
    }

    .border-left-primary.border-left-lighten-5 {
        border-left: 1px solid #ceddfa !important;
    }

    .border-right-primary.border-right-lighten-5 {
        border-right: 1px solid #ceddfa !important;
    }

    .overlay-primary.overlay-lighten-5 {
        background: #ceddfa;
        background: rgba(206, 221, 250, 0.6);
    }

    .primary.lighten-4 {
        color: #b6cdf8 !important;
    }

    .bg-primary.bg-lighten-4 {
        background-color: #b6cdf8 !important;
    }

    .btn-primary.btn-lighten-4 {
        border-color: #2c6de9 !important;
        background-color: #b6cdf8 !important;
    }

    .btn-primary.btn-lighten-4:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-lighten-4:focus, .btn-primary.btn-lighten-4:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-lighten-4 {
        border-color: #b6cdf8 !important;
        color: #b6cdf8 !important;
    }

    .btn-outline-primary.btn-outline-lighten-4:hover {
        background-color: #b6cdf8 !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #b6cdf8 !important;
    }

    .border-primary.border-lighten-4 {
        border: 1px solid #b6cdf8 !important;
    }

    .border-top-primary.border-top-lighten-4 {
        border-top: 1px solid #b6cdf8 !important;
    }

    .border-bottom-primary.border-bottom-lighten-4 {
        border-bottom: 1px solid #b6cdf8 !important;
    }

    .border-left-primary.border-left-lighten-4 {
        border-left: 1px solid #b6cdf8 !important;
    }

    .border-right-primary.border-right-lighten-4 {
        border-right: 1px solid #b6cdf8 !important;
    }

    .overlay-primary.overlay-lighten-4 {
        background: #b6cdf8;
        background: rgba(182, 205, 248, 0.6);
    }

    .primary.lighten-3 {
        color: #9fbdf5 !important;
    }

    .bg-primary.bg-lighten-3 {
        background-color: #9fbdf5 !important;
    }

    .btn-primary.btn-lighten-3 {
        border-color: #2c6de9 !important;
        background-color: #9fbdf5 !important;
    }

    .btn-primary.btn-lighten-3:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-lighten-3:focus, .btn-primary.btn-lighten-3:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-lighten-3 {
        border-color: #9fbdf5 !important;
        color: #9fbdf5 !important;
    }

    .btn-outline-primary.btn-outline-lighten-3:hover {
        background-color: #9fbdf5 !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #9fbdf5 !important;
    }

    .border-primary.border-lighten-3 {
        border: 1px solid #9fbdf5 !important;
    }

    .border-top-primary.border-top-lighten-3 {
        border-top: 1px solid #9fbdf5 !important;
    }

    .border-bottom-primary.border-bottom-lighten-3 {
        border-bottom: 1px solid #9fbdf5 !important;
    }

    .border-left-primary.border-left-lighten-3 {
        border-left: 1px solid #9fbdf5 !important;
    }

    .border-right-primary.border-right-lighten-3 {
        border-right: 1px solid #9fbdf5 !important;
    }

    .overlay-primary.overlay-lighten-3 {
        background: #9fbdf5;
        background: rgba(159, 189, 245, 0.6);
    }

    .primary.lighten-2 {
        color: #88adf3 !important;
    }

    .bg-primary.bg-lighten-2 {
        background-color: #88adf3 !important;
    }

    .btn-primary.btn-lighten-2 {
        border-color: #2c6de9 !important;
        background-color: #88adf3 !important;
    }

    .btn-primary.btn-lighten-2:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-lighten-2:focus, .btn-primary.btn-lighten-2:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-lighten-2 {
        border-color: #88adf3 !important;
        color: #88adf3 !important;
    }

    .btn-outline-primary.btn-outline-lighten-2:hover {
        background-color: #88adf3 !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #88adf3 !important;
    }

    .border-primary.border-lighten-2 {
        border: 1px solid #88adf3 !important;
    }

    .border-top-primary.border-top-lighten-2 {
        border-top: 1px solid #88adf3 !important;
    }

    .border-bottom-primary.border-bottom-lighten-2 {
        border-bottom: 1px solid #88adf3 !important;
    }

    .border-left-primary.border-left-lighten-2 {
        border-left: 1px solid #88adf3 !important;
    }

    .border-right-primary.border-right-lighten-2 {
        border-right: 1px solid #88adf3 !important;
    }

    .overlay-primary.overlay-lighten-2 {
        background: #88adf3;
        background: rgba(136, 173, 243, 0.6);
    }

    .primary.lighten-1 {
        color: #719df0 !important;
    }

    .bg-primary.bg-lighten-1 {
        background-color: #719df0 !important;
    }

    .btn-primary.btn-lighten-1 {
        border-color: #2c6de9 !important;
        background-color: #719df0 !important;
    }

    .btn-primary.btn-lighten-1:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-lighten-1:focus, .btn-primary.btn-lighten-1:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-lighten-1 {
        border-color: #719df0 !important;
        color: #719df0 !important;
    }

    .btn-outline-primary.btn-outline-lighten-1:hover {
        background-color: #719df0 !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #719df0 !important;
    }

    .border-primary.border-lighten-1 {
        border: 1px solid #719df0 !important;
    }

    .border-top-primary.border-top-lighten-1 {
        border-top: 1px solid #719df0 !important;
    }

    .border-bottom-primary.border-bottom-lighten-1 {
        border-bottom: 1px solid #719df0 !important;
    }

    .border-left-primary.border-left-lighten-1 {
        border-left: 1px solid #719df0 !important;
    }

    .border-right-primary.border-right-lighten-1 {
        border-right: 1px solid #719df0 !important;
    }

    .overlay-primary.overlay-lighten-1 {
        background: #719df0;
        background: rgba(113, 157, 240, 0.6);
    }

    /* primary Color Style */
    /* ----------------------- */
    /* Text color */
    /* ---------- */
    .primary {
        color: #5A8DEE !important;
    }

    /* text with light primary */
    .text-light-primary {
        color: rgba(90, 141, 238, 0.2) !important;
    }

    /* Background color */
    /* ---------------- */
    .bg-primary {
        background-color: #5A8DEE !important;
    }

    .bg-primary .card-header,
    .bg-primary .card-footer {
        background-color: transparent;
    }

    /* bg color lighten for rgba - opacity set */
    .bg-rgba-primary {
        background: rgba(90, 141, 238, 0.2) !important;
    }

    .bg-rgba-primary.alert {
        color: #5A8DEE;
    }

    .bg-rgba-primary.alert.alert-dismissible .close {
        color: #5A8DEE;
    }

    /* Alert primary */
    /* ---------------- */
    .alert.alert-primary {
        background: #5A8DEE !important;
        color: #fff !important;
        box-shadow: 0 3px 8px 0 rgba(90, 141, 238, 0.4);
        border: none;
    }

    /* Border primary */
    /* ---------------- */
    .border-primary {
        border: 1px solid #5A8DEE !important;
    }

    .border-primary .select2-selection__arrow b {
        border-color: #2c6de9 !important;
    }

    .border-primary.alert {
        color: #5A8DEE;
    }

    .border-primary.alert.alert-dismissible .close {
        color: #5A8DEE;
    }

    .border-top-primary {
        border-top: 1px solid #5A8DEE;
    }

    .border-bottom-primary {
        border-bottom: 1px solid #5A8DEE;
    }

    .border-left-primary {
        border-left: 1px solid #5A8DEE;
    }

    .border-right-primary {
        border-right: 1px solid #5A8DEE;
    }

    /* Navbar icon stroke color according to bg color */
    .header-navbar.bg-primary .navbar-nav .nav-item > a i {
        -webkit-text-stroke: 0.2px #5A8DEE !important;
    }

    /* Badges */
    /* ------ */
    .badge.badge-primary {
        background-color: #5A8DEE;
    }

    .badge.badge-light-primary {
        background-color: #E2ECFF;
        color: #5A8DEE !important;
    }

    .badge.bg-primary.badge-glow, .badge.border-primary.badge-glow, .badge.badge-primary.badge-glow {
        box-shadow: 0px 0px 10px #5A8DEE;
    }

    .badge-circle-primary {
        background-color: #5A8DEE;
    }

    .badge-circle-light-primary {
        background-color: #E2ECFF;
        color: #5A8DEE;
    }

    .overlay-primary {
        background: #5A8DEE;
        background: rgba(90, 141, 238, 0.6);
    }

    /* Basic buttons */
    /* ------------- */
    .btn-primary {
        /*border-color: #2c6de9 !important;
  background-color: #5A8DEE !important;*/
        border-color: #D2D2D4 !important;
        background-color: #525253 !important;
        color: #fff;
    }

    .btn-primary:hover, .btn-primary.hover {
        /*background-color: #719df0 !important;*/
        background-color: #525253 !important;
        color: #fff;
    }

    .btn-primary:hover.glow, .btn-primary.hover.glow {
        /*box-shadow: 0 4px 12px 0 rgba(90, 141, 238, 0.6) !important;*/
        box-shadow: 0 4px 12px 0 rgba(82, 82, 83, 0.6) !important;
    }

    .btn-primary:focus, .btn-primary:active, .btn-primary.active {
        /*background-color: #437dec !important;*/
        background-color: #525253 !important;
        color: #fff !important;
    }

    .btn-primary.glow {
        /*box-shadow: 0 2px 4px 0 rgba(90, 141, 238, 0.5) !important;

   */
        box-shadow: 0 2px 4px 0 rgba(210, 210, 212, 0.5) !important;
    }

    .btn-primary:disabled, .btn-primary.disabled {
        color: #fff !important;
    }

    .btn-light-primary {
        background-color: #E2ECFF;
        color: #5A8DEE !important;
    }

    .btn-light-primary:hover, .btn-light-primary.hover {
        /*background-color: #719df0 !important;*/
        background-color: #525253 !important;
        color: #fff !important;
    }

    .btn-light-primary:active, .btn-light-primary.active {
        background-color: #437dec !important;
        color: #fff !important;
    }

    /* Outline buttons */
    .btn-outline-primary {
        border: 1px solid #5A8DEE;
        background-color: transparent;
        color: #5A8DEE !important;
    }

    .btn-outline-primary:hover, .btn-outline-primary.hover {
        /*background-color: #719df0 !important;*/
        background-color: #525253 !important;
        color: #fff !important;
    }

    .btn-outline-primary:active, .btn-outline-primary.active {
        background-color: #437dec !important;
        color: #fff !important;
    }

    /* Dropdowns */
    /* --------- */
    .btn-primary ~ .dropdown-menu .dropdown-item.active, .btn-outline-primary ~ .dropdown-menu .dropdown-item.active {
        background-color: #5A8DEE;
        color: #fff;
    }

    .btn-primary ~ .dropdown-menu .dropdown-item.active:hover, .btn-outline-primary ~ .dropdown-menu .dropdown-item.active:hover {
        color: #fff;
    }

    .dropdown.dropdown-icon-wrapper .btn-primary ~ .dropdown-menu .dropdown-item:hover i, .dropdown.dropdown-icon-wrapper .btn-outline-primary ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-primary ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-outline-primary ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-primary ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-outline-primary ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-primary ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-outline-primary ~ .dropdown-menu .dropdown-item:hover i {
        color: #5A8DEE;
    }

    .dropdown.dropdown-icon-wrapper .btn-primary ~ .dropdown-menu .dropdown-item:active i, .dropdown.dropdown-icon-wrapper .btn-outline-primary ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-primary ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-outline-primary ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-primary ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-outline-primary ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-primary ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-outline-primary ~ .dropdown-menu .dropdown-item:active i {
        color: #fff;
    }

    /* Bullet primary */
    .bullet.bullet-primary {
        background-color: #5A8DEE;
    }

    /* For Pagination */
    /* -------------- */
    .pagination-primary .page-item.active .page-link, .pagination-primary .page-item.active .page-link:hover {
        background: #5A8DEE !important;
        color: #fff;
    }

    .pagination-primary .page-item .page-link:hover {
        background-color: #E2ECFF !important;
    }

    .pagination-primary .page-item.previous .page-link, .pagination-primary .page-item.next .page-link {
        color: #5A8DEE;
    }

    .pagination-primary .page-item.previous .page-link:hover, .pagination-primary .page-item.next .page-link:hover {
        background: #5A8DEE;
    }

    /* Progress Bars primary */
    /* ---------------------- */
    .progress-bar-primary .progress-bar {
        background-color: #5A8DEE;
        box-shadow: 0 2px 6px 0 rgba(90, 141, 238, 0.6);
    }

    /* Chips primary */
    /* ---------------- */
    .chip-primary {
        background-color: #5A8DEE !important;
    }

    .chip-primary .chip-body {
        color: #fff !important;
    }

    /* Divider primary */
    /* ---------------*/
    .divider.divider-primary .divider-text:before, .divider.divider-primary .divider-text:after {
        border-color: #5A8DEE !important;
    }

    /* timeline */
    .widget-timeline li.timeline-items.timeline-icon-primary:before {
        background: #5A8DEE !important;
    }

    /* Custom Checkbox & Radio - Colored */
    /* --------------------------------- */
    input[type="checkbox"].bg-primary + .custom-control-label:before, input[type="radio"].bg-primary + .custom-control-label:before {
        background-color: #5A8DEE !important;
        border-color: #2c6de9 !important;
    }

    .checkbox.checkbox-primary input:checked ~ label::before, .checkbox.radio-primary input:checked ~ label::before, .radio.checkbox-primary input:checked ~ label::before, .radio.radio-primary input:checked ~ label::before {
        background-color: #5A8DEE;
        border-color: #5A8DEE;
    }

    .checkbox.checkbox-primary input:checked ~ label::after, .checkbox.radio-primary input:checked ~ label::after, .radio.checkbox-primary input:checked ~ label::after, .radio.radio-primary input:checked ~ label::after {
        border-color: #fff;
    }

    .checkbox.checkbox-primary.checkbox-glow input:checked ~ label::before, .checkbox.checkbox-primary.radio-glow input:checked ~ label::before, .checkbox.radio-primary.checkbox-glow input:checked ~ label::before, .checkbox.radio-primary.radio-glow input:checked ~ label::before, .radio.checkbox-primary.checkbox-glow input:checked ~ label::before, .radio.checkbox-primary.radio-glow input:checked ~ label::before, .radio.radio-primary.checkbox-glow input:checked ~ label::before, .radio.radio-primary.radio-glow input:checked ~ label::before {
        box-shadow: 0 0 6px 0 rgba(90, 141, 238, 0.7);
    }

    .checkbox.checkbox-primary.checkbox-icon label i, .checkbox.radio-primary.checkbox-icon label i, .radio.checkbox-primary.checkbox-icon label i, .radio.radio-primary.checkbox-icon label i {
        color: #fff;
    }

    .checkbox.checkbox-primary label:after {
        transition: 250ms ease-in-out;
    }

    .radio.radio-primary input:checked ~ label::after {
        background-color: #fff;
        transition: all 0.15s cubic-bezier(0.35, 0.9, 0.4, 0.9);
    }

    /* Bootstrap Custom Switches */
    /* ------------------------- */
    .custom-switch-primary .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #5A8DEE !important;
        color: #fff;
        transition: all .2s ease-out;
    }

    .custom-switch-primary.custom-switch-glow .custom-control-input:not(:disabled):checked ~ .custom-control-label::before {
        box-shadow: 0 0 8px 0 rgba(90, 141, 238, 0.8) !important;
    }

    /* Touchspin Glow */
    /* -------------- */
    .input-group.touchspin-glow .bootstrap-touchspin-down.btn-primary, .input-group.touchspin-glow .bootstrap-touchspin-up.btn-primary {
        box-shadow: 0 0 8px 0 rgba(90, 141, 238, 0.8);
    }

    /* Scrumboard Application - kanban-item with coloured border */
    /* --------------------------------------------------------- */
    .kanban-container .kanban-board .kanban-item[data-border=primary]:before {
        background-color: #5A8DEE;
    }

    .edit-kanban-item select option.bg-color_name {
        background-color: #5A8DEE;
    }

    /* Select2 primary */
    /* ---------------*/
    select.select-light-primary ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice, select.select-light-primary ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice__remove {
        background-color: #E2ECFF !important;
        color: #5A8DEE !important;
    }

    .primary.darken-1 {
        color: #437dec !important;
    }

    .bg-primary.bg-darken-1 {
        background-color: #437dec !important;
    }

    .btn-primary.btn-darken-1 {
        border-color: #2c6de9 !important;
        background-color: #437dec !important;
    }

    .btn-primary.btn-darken-1:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-darken-1:focus, .btn-primary.btn-darken-1:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-darken-1 {
        border-color: #437dec !important;
        color: #437dec !important;
    }

    .btn-outline-primary.btn-outline-darken-1:hover {
        background-color: #437dec !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #437dec !important;
    }

    .border-primary.border-darken-1 {
        border: 1px solid #437dec !important;
    }

    .border-top-primary.border-top-darken-1 {
        border-top: 1px solid #437dec !important;
    }

    .border-bottom-primary.border-bottom-darken-1 {
        border-bottom: 1px solid #437dec !important;
    }

    .border-left-primary.border-left-darken-1 {
        border-left: 1px solid #437dec !important;
    }

    .border-right-primary.border-right-darken-1 {
        border-right: 1px solid #437dec !important;
    }

    .overlay-primary.overlay-darken-1 {
        background: #437dec;
        background: rgba(67, 125, 236, 0.6);
    }

    .primary.darken-2 {
        color: #2c6de9 !important;
    }

    .bg-primary.bg-darken-2 {
        background-color: #2c6de9 !important;
    }

    .btn-primary.btn-darken-2 {
        border-color: #2c6de9 !important;
        background-color: #2c6de9 !important;
    }

    .btn-primary.btn-darken-2:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-darken-2:focus, .btn-primary.btn-darken-2:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-darken-2 {
        border-color: #2c6de9 !important;
        color: #2c6de9 !important;
    }

    .btn-outline-primary.btn-outline-darken-2:hover {
        background-color: #2c6de9 !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2c6de9 !important;
    }

    .border-primary.border-darken-2 {
        border: 1px solid #2c6de9 !important;
    }

    .border-top-primary.border-top-darken-2 {
        border-top: 1px solid #2c6de9 !important;
    }

    .border-bottom-primary.border-bottom-darken-2 {
        border-bottom: 1px solid #2c6de9 !important;
    }

    .border-left-primary.border-left-darken-2 {
        border-left: 1px solid #2c6de9 !important;
    }

    .border-right-primary.border-right-darken-2 {
        border-right: 1px solid #2c6de9 !important;
    }

    .overlay-primary.overlay-darken-2 {
        background: #2c6de9;
        background: rgba(44, 109, 233, 0.6);
    }

    .primary.darken-3 {
        color: #175ee4 !important;
    }

    .bg-primary.bg-darken-3 {
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-darken-3 {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-darken-3:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-darken-3:focus, .btn-primary.btn-darken-3:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-darken-3 {
        border-color: #175ee4 !important;
        color: #175ee4 !important;
    }

    .btn-outline-primary.btn-outline-darken-3:hover {
        background-color: #175ee4 !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #175ee4 !important;
    }

    .border-primary.border-darken-3 {
        border: 1px solid #175ee4 !important;
    }

    .border-top-primary.border-top-darken-3 {
        border-top: 1px solid #175ee4 !important;
    }

    .border-bottom-primary.border-bottom-darken-3 {
        border-bottom: 1px solid #175ee4 !important;
    }

    .border-left-primary.border-left-darken-3 {
        border-left: 1px solid #175ee4 !important;
    }

    .border-right-primary.border-right-darken-3 {
        border-right: 1px solid #175ee4 !important;
    }

    .overlay-primary.overlay-darken-3 {
        background: #175ee4;
        background: rgba(23, 94, 228, 0.6);
    }

    .primary.darken-4 {
        color: #1554cd !important;
    }

    .bg-primary.bg-darken-4 {
        background-color: #1554cd !important;
    }

    .btn-primary.btn-darken-4 {
        border-color: #2c6de9 !important;
        background-color: #1554cd !important;
    }

    .btn-primary.btn-darken-4:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-darken-4:focus, .btn-primary.btn-darken-4:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-darken-4 {
        border-color: #1554cd !important;
        color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-darken-4:hover {
        background-color: #1554cd !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1554cd !important;
    }

    .border-primary.border-darken-4 {
        border: 1px solid #1554cd !important;
    }

    .border-top-primary.border-top-darken-4 {
        border-top: 1px solid #1554cd !important;
    }

    .border-bottom-primary.border-bottom-darken-4 {
        border-bottom: 1px solid #1554cd !important;
    }

    .border-left-primary.border-left-darken-4 {
        border-left: 1px solid #1554cd !important;
    }

    .border-right-primary.border-right-darken-4 {
        border-right: 1px solid #1554cd !important;
    }

    .overlay-primary.overlay-darken-4 {
        background: #1554cd;
        background: rgba(21, 84, 205, 0.6);
    }

    .primary.accent-1 {
        color: #BDFDFF !important;
    }

    .bg-primary.bg-accent-1 {
        background-color: #BDFDFF !important;
    }

    .btn-primary.btn-accent-1 {
        border-color: #2c6de9 !important;
        background-color: #BDFDFF !important;
    }

    .btn-primary.btn-accent-1:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-accent-1:focus, .btn-primary.btn-accent-1:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-accent-1 {
        border-color: #BDFDFF !important;
        color: #BDFDFF !important;
    }

    .btn-outline-primary.btn-outline-accent-1:hover {
        background-color: #BDFDFF !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #BDFDFF !important;
    }

    .border-primary.border-accent-1 {
        border: 1px solid #BDFDFF !important;
    }

    .border-top-primary.border-top-accent-1 {
        border-top: 1px solid #BDFDFF !important;
    }

    .border-bottom-primary.border-bottom-accent-1 {
        border-bottom: 1px solid #BDFDFF !important;
    }

    .border-left-primary.border-left-accent-1 {
        border-left: 1px solid #BDFDFF !important;
    }

    .border-right-primary.border-right-accent-1 {
        border-right: 1px solid #BDFDFF !important;
    }

    .overlay-primary.overlay-accent-1 {
        background: #BDFDFF;
        background: rgba(189, 253, 255, 0.6);
    }

    .primary.accent-2 {
        color: #8AFBFF !important;
    }

    .bg-primary.bg-accent-2 {
        background-color: #8AFBFF !important;
    }

    .btn-primary.btn-accent-2 {
        border-color: #2c6de9 !important;
        background-color: #8AFBFF !important;
    }

    .btn-primary.btn-accent-2:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-accent-2:focus, .btn-primary.btn-accent-2:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-accent-2 {
        border-color: #8AFBFF !important;
        color: #8AFBFF !important;
    }

    .btn-outline-primary.btn-outline-accent-2:hover {
        background-color: #8AFBFF !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #8AFBFF !important;
    }

    .border-primary.border-accent-2 {
        border: 1px solid #8AFBFF !important;
    }

    .border-top-primary.border-top-accent-2 {
        border-top: 1px solid #8AFBFF !important;
    }

    .border-bottom-primary.border-bottom-accent-2 {
        border-bottom: 1px solid #8AFBFF !important;
    }

    .border-left-primary.border-left-accent-2 {
        border-left: 1px solid #8AFBFF !important;
    }

    .border-right-primary.border-right-accent-2 {
        border-right: 1px solid #8AFBFF !important;
    }

    .overlay-primary.overlay-accent-2 {
        background: #8AFBFF;
        background: rgba(138, 251, 255, 0.6);
    }

    .primary.accent-3 {
        color: #57FAFF !important;
    }

    .bg-primary.bg-accent-3 {
        background-color: #57FAFF !important;
    }

    .btn-primary.btn-accent-3 {
        border-color: #2c6de9 !important;
        background-color: #57FAFF !important;
    }

    .btn-primary.btn-accent-3:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-accent-3:focus, .btn-primary.btn-accent-3:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-accent-3 {
        border-color: #57FAFF !important;
        color: #57FAFF !important;
    }

    .btn-outline-primary.btn-outline-accent-3:hover {
        background-color: #57FAFF !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #57FAFF !important;
    }

    .border-primary.border-accent-3 {
        border: 1px solid #57FAFF !important;
    }

    .border-top-primary.border-top-accent-3 {
        border-top: 1px solid #57FAFF !important;
    }

    .border-bottom-primary.border-bottom-accent-3 {
        border-bottom: 1px solid #57FAFF !important;
    }

    .border-left-primary.border-left-accent-3 {
        border-left: 1px solid #57FAFF !important;
    }

    .border-right-primary.border-right-accent-3 {
        border-right: 1px solid #57FAFF !important;
    }

    .overlay-primary.overlay-accent-3 {
        background: #57FAFF;
        background: rgba(87, 250, 255, 0.6);
    }

    .primary.accent-4 {
        color: #3DF9FF !important;
    }

    .bg-primary.bg-accent-4 {
        background-color: #3DF9FF !important;
    }

    .btn-primary.btn-accent-4 {
        border-color: #2c6de9 !important;
        background-color: #3DF9FF !important;
    }

    .btn-primary.btn-accent-4:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-accent-4:focus, .btn-primary.btn-accent-4:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-accent-4 {
        border-color: #3DF9FF !important;
        color: #3DF9FF !important;
    }

    .btn-outline-primary.btn-outline-accent-4:hover {
        background-color: #3DF9FF !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #3DF9FF !important;
    }

    .border-primary.border-accent-4 {
        border: 1px solid #3DF9FF !important;
    }

    .border-top-primary.border-top-accent-4 {
        border-top: 1px solid #3DF9FF !important;
    }

    .border-bottom-primary.border-bottom-accent-4 {
        border-bottom: 1px solid #3DF9FF !important;
    }

    .border-left-primary.border-left-accent-4 {
        border-left: 1px solid #3DF9FF !important;
    }

    .border-right-primary.border-right-accent-4 {
        border-right: 1px solid #3DF9FF !important;
    }

    .overlay-primary.overlay-accent-4 {
        background: #3DF9FF;
        background: rgba(61, 249, 255, 0.6);
    }

    .primary.light {
        color: #E2ECFF !important;
    }

    .bg-primary.bg-light {
        background-color: #E2ECFF !important;
    }

    .btn-primary.btn-light {
        border-color: #2c6de9 !important;
        background-color: #E2ECFF !important;
    }

    .btn-primary.btn-light:hover {
        border-color: #2c6de9 !important;
        background-color: #175ee4 !important;
    }

    .btn-primary.btn-light:focus, .btn-primary.btn-light:active {
        border-color: #175ee4 !important;
        background-color: #1554cd !important;
    }

    .btn-outline-primary.btn-outline-light {
        border-color: #E2ECFF !important;
        color: #E2ECFF !important;
    }

    .btn-outline-primary.btn-outline-light:hover {
        background-color: #E2ECFF !important;
    }

    input:focus ~ .bg-primary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E2ECFF !important;
    }

    .border-primary.border-light {
        border: 1px solid #E2ECFF !important;
    }

    .border-top-primary.border-top-light {
        border-top: 1px solid #E2ECFF !important;
    }

    .border-bottom-primary.border-bottom-light {
        border-bottom: 1px solid #E2ECFF !important;
    }

    .border-left-primary.border-left-light {
        border-left: 1px solid #E2ECFF !important;
    }

    .border-right-primary.border-right-light {
        border-right: 1px solid #E2ECFF !important;
    }

    .overlay-primary.overlay-light {
        background: #E2ECFF;
        background: rgba(226, 236, 255, 0.6);
    }

    .secondary.lighten-5 {
        color: #879fba !important;
    }

    .bg-secondary.bg-lighten-5 {
        background-color: #879fba !important;
    }

    .btn-secondary.btn-lighten-5 {
        border-color: #34465b !important;
        background-color: #879fba !important;
    }

    .btn-secondary.btn-lighten-5:hover {
        border-color: #34465b !important;
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-lighten-5:focus, .btn-secondary.btn-lighten-5:active {
        border-color: #2b3a4a !important;
        background-color: #222d3a !important;
    }

    .btn-outline-secondary.btn-outline-lighten-5 {
        border-color: #879fba !important;
        color: #879fba !important;
    }

    .btn-outline-secondary.btn-outline-lighten-5:hover {
        background-color: #879fba !important;
    }

    input:focus ~ .bg-secondary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #879fba !important;
    }

    .border-secondary.border-lighten-5 {
        border: 1px solid #879fba !important;
    }

    .border-top-secondary.border-top-lighten-5 {
        border-top: 1px solid #879fba !important;
    }

    .border-bottom-secondary.border-bottom-lighten-5 {
        border-bottom: 1px solid #879fba !important;
    }

    .border-left-secondary.border-left-lighten-5 {
        border-left: 1px solid #879fba !important;
    }

    .border-right-secondary.border-right-lighten-5 {
        border-right: 1px solid #879fba !important;
    }

    .overlay-secondary.overlay-lighten-5 {
        background: #879fba;
        background: rgba(135, 159, 186, 0.6);
    }

    .secondary.lighten-4 {
        color: #7792b1 !important;
    }

    .bg-secondary.bg-lighten-4 {
        background-color: #7792b1 !important;
    }

    .btn-secondary.btn-lighten-4 {
        border-color: #34465b !important;
        background-color: #7792b1 !important;
    }

    .btn-secondary.btn-lighten-4:hover {
        border-color: #34465b !important;
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-lighten-4:focus, .btn-secondary.btn-lighten-4:active {
        border-color: #2b3a4a !important;
        background-color: #222d3a !important;
    }

    .btn-outline-secondary.btn-outline-lighten-4 {
        border-color: #7792b1 !important;
        color: #7792b1 !important;
    }

    .btn-outline-secondary.btn-outline-lighten-4:hover {
        background-color: #7792b1 !important;
    }

    input:focus ~ .bg-secondary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #7792b1 !important;
    }

    .border-secondary.border-lighten-4 {
        border: 1px solid #7792b1 !important;
    }

    .border-top-secondary.border-top-lighten-4 {
        border-top: 1px solid #7792b1 !important;
    }

    .border-bottom-secondary.border-bottom-lighten-4 {
        border-bottom: 1px solid #7792b1 !important;
    }

    .border-left-secondary.border-left-lighten-4 {
        border-left: 1px solid #7792b1 !important;
    }

    .border-right-secondary.border-right-lighten-4 {
        border-right: 1px solid #7792b1 !important;
    }

    .overlay-secondary.overlay-lighten-4 {
        background: #7792b1;
        background: rgba(119, 146, 177, 0.6);
    }

    .secondary.lighten-3 {
        color: #6785a7 !important;
    }

    .bg-secondary.bg-lighten-3 {
        background-color: #6785a7 !important;
    }

    .btn-secondary.btn-lighten-3 {
        border-color: #34465b !important;
        background-color: #6785a7 !important;
    }

    .btn-secondary.btn-lighten-3:hover {
        border-color: #34465b !important;
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-lighten-3:focus, .btn-secondary.btn-lighten-3:active {
        border-color: #2b3a4a !important;
        background-color: #222d3a !important;
    }

    .btn-outline-secondary.btn-outline-lighten-3 {
        border-color: #6785a7 !important;
        color: #6785a7 !important;
    }

    .btn-outline-secondary.btn-outline-lighten-3:hover {
        background-color: #6785a7 !important;
    }

    input:focus ~ .bg-secondary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #6785a7 !important;
    }

    .border-secondary.border-lighten-3 {
        border: 1px solid #6785a7 !important;
    }

    .border-top-secondary.border-top-lighten-3 {
        border-top: 1px solid #6785a7 !important;
    }

    .border-bottom-secondary.border-bottom-lighten-3 {
        border-bottom: 1px solid #6785a7 !important;
    }

    .border-left-secondary.border-left-lighten-3 {
        border-left: 1px solid #6785a7 !important;
    }

    .border-right-secondary.border-right-lighten-3 {
        border-right: 1px solid #6785a7 !important;
    }

    .overlay-secondary.overlay-lighten-3 {
        background: #6785a7;
        background: rgba(103, 133, 167, 0.6);
    }

    .secondary.lighten-2 {
        color: #5a789b !important;
    }

    .bg-secondary.bg-lighten-2 {
        background-color: #5a789b !important;
    }

    .btn-secondary.btn-lighten-2 {
        border-color: #34465b !important;
        background-color: #5a789b !important;
    }

    .btn-secondary.btn-lighten-2:hover {
        border-color: #34465b !important;
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-lighten-2:focus, .btn-secondary.btn-lighten-2:active {
        border-color: #2b3a4a !important;
        background-color: #222d3a !important;
    }

    .btn-outline-secondary.btn-outline-lighten-2 {
        border-color: #5a789b !important;
        color: #5a789b !important;
    }

    .btn-outline-secondary.btn-outline-lighten-2:hover {
        background-color: #5a789b !important;
    }

    input:focus ~ .bg-secondary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #5a789b !important;
    }

    .border-secondary.border-lighten-2 {
        border: 1px solid #5a789b !important;
    }

    .border-top-secondary.border-top-lighten-2 {
        border-top: 1px solid #5a789b !important;
    }

    .border-bottom-secondary.border-bottom-lighten-2 {
        border-bottom: 1px solid #5a789b !important;
    }

    .border-left-secondary.border-left-lighten-2 {
        border-left: 1px solid #5a789b !important;
    }

    .border-right-secondary.border-right-lighten-2 {
        border-right: 1px solid #5a789b !important;
    }

    .overlay-secondary.overlay-lighten-2 {
        background: #5a789b;
        background: rgba(90, 120, 155, 0.6);
    }

    .secondary.lighten-1 {
        color: #506b8b !important;
    }

    .bg-secondary.bg-lighten-1 {
        background-color: #506b8b !important;
    }

    .btn-secondary.btn-lighten-1 {
        border-color: #34465b !important;
        background-color: #506b8b !important;
    }

    .btn-secondary.btn-lighten-1:hover {
        border-color: #34465b !important;
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-lighten-1:focus, .btn-secondary.btn-lighten-1:active {
        border-color: #2b3a4a !important;
        background-color: #222d3a !important;
    }

    .btn-outline-secondary.btn-outline-lighten-1 {
        border-color: #506b8b !important;
        color: #506b8b !important;
    }

    .btn-outline-secondary.btn-outline-lighten-1:hover {
        background-color: #506b8b !important;
    }

    input:focus ~ .bg-secondary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #506b8b !important;
    }

    .border-secondary.border-lighten-1 {
        border: 1px solid #506b8b !important;
    }

    .border-top-secondary.border-top-lighten-1 {
        border-top: 1px solid #506b8b !important;
    }

    .border-bottom-secondary.border-bottom-lighten-1 {
        border-bottom: 1px solid #506b8b !important;
    }

    .border-left-secondary.border-left-lighten-1 {
        border-left: 1px solid #506b8b !important;
    }

    .border-right-secondary.border-right-lighten-1 {
        border-right: 1px solid #506b8b !important;
    }

    .overlay-secondary.overlay-lighten-1 {
        background: #506b8b;
        background: rgba(80, 107, 139, 0.6);
    }

    /* secondary Color Style */
    /* ----------------------- */
    /* Text color */
    /* ---------- */
    .secondary {
        color: #475F7B !important;
    }

    /* text with light secondary */
    .text-light-secondary {
        color: rgba(71, 95, 123, 0.2) !important;
    }

    /* Background color */
    /* ---------------- */
    .bg-secondary {
        background-color: #475F7B !important;
    }

    .bg-secondary .card-header,
    .bg-secondary .card-footer {
        background-color: transparent;
    }

    /* bg color lighten for rgba - opacity set */
    .bg-rgba-secondary {
        background: rgba(71, 95, 123, 0.2) !important;
    }

    .bg-rgba-secondary.alert {
        color: #475F7B;
    }

    .bg-rgba-secondary.alert.alert-dismissible .close {
        color: #475F7B;
    }

    /* Alert secondary */
    /* ---------------- */
    .alert.alert-secondary {
        background: #475F7B !important;
        color: #fff !important;
        box-shadow: 0 3px 8px 0 rgba(71, 95, 123, 0.4);
        border: none;
    }

    /* Border secondary */
    /* ---------------- */
    .border-secondary {
        border: 1px solid #475F7B !important;
    }

    .border-secondary .select2-selection__arrow b {
        border-color: #34465b !important;
    }

    .border-secondary.alert {
        color: #475F7B;
    }

    .border-secondary.alert.alert-dismissible .close {
        color: #475F7B;
    }

    .border-top-secondary {
        border-top: 1px solid #475F7B;
    }

    .border-bottom-secondary {
        border-bottom: 1px solid #475F7B;
    }

    .border-left-secondary {
        border-left: 1px solid #475F7B;
    }

    .border-right-secondary {
        border-right: 1px solid #475F7B;
    }

    /* Navbar icon stroke color according to bg color */
    .header-navbar.bg-secondary .navbar-nav .nav-item > a i {
        -webkit-text-stroke: 0.2px #475F7B !important;
    }

    /* Badges */
    /* ------ */
    .badge.badge-secondary {
        background-color: #475F7B;
    }

    .badge.badge-light-secondary {
        background-color: #E6EAEE;
        color: #475F7B !important;
    }

    .badge.bg-secondary.badge-glow, .badge.border-secondary.badge-glow, .badge.badge-secondary.badge-glow {
        box-shadow: 0px 0px 10px #475F7B;
    }

    .badge-circle-secondary {
        background-color: #475F7B;
    }

    .badge-circle-light-secondary {
        background-color: #E6EAEE;
        color: #475F7B;
    }

    .overlay-secondary {
        background: #475F7B;
        background: rgba(71, 95, 123, 0.6);
    }

    /* Basic buttons */
    /* ------------- */
    .btn-secondary {
        border-color: #34465b !important;
        background-color: #475F7B !important;
        color: #fff;
    }

    .btn-secondary:hover, .btn-secondary.hover {
        background-color: #506b8b !important;
        color: #fff;
    }

    .btn-secondary:hover.glow, .btn-secondary.hover.glow {
        box-shadow: 0 4px 12px 0 rgba(71, 95, 123, 0.6) !important;
    }

    .btn-secondary:focus, .btn-secondary:active, .btn-secondary.active {
        background-color: #3e536b !important;
        color: #fff !important;
    }

    .btn-secondary.glow {
        box-shadow: 0 2px 4px 0 rgba(71, 95, 123, 0.5) !important;
    }

    .btn-secondary:disabled, .btn-secondary.disabled {
        color: #fff !important;
    }

    .btn-light-secondary {
        background-color: #E6EAEE;
        color: #475F7B !important;
    }

    .btn-light-secondary:hover, .btn-light-secondary.hover {
        background-color: #506b8b !important;
        color: #fff !important;
    }

    .btn-light-secondary:active, .btn-light-secondary.active {
        background-color: #3e536b !important;
        color: #fff !important;
    }

    /* Outline buttons */
    .btn-outline-secondary {
        border: 1px solid #475F7B;
        background-color: transparent;
        color: #475F7B !important;
    }

    .btn-outline-secondary:hover, .btn-outline-secondary.hover {
        background-color: #506b8b !important;
        color: #fff !important;
    }

    .btn-outline-secondary:active, .btn-outline-secondary.active {
        background-color: #3e536b !important;
        color: #fff !important;
    }

    /* Dropdowns */
    /* --------- */
    .btn-secondary ~ .dropdown-menu .dropdown-item.active, .btn-outline-secondary ~ .dropdown-menu .dropdown-item.active {
        background-color: #475F7B;
        color: #fff;
    }

    .btn-secondary ~ .dropdown-menu .dropdown-item.active:hover, .btn-outline-secondary ~ .dropdown-menu .dropdown-item.active:hover {
        color: #fff;
    }

    .dropdown.dropdown-icon-wrapper .btn-secondary ~ .dropdown-menu .dropdown-item:hover i, .dropdown.dropdown-icon-wrapper .btn-outline-secondary ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-secondary ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-outline-secondary ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-secondary ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-outline-secondary ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-secondary ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-outline-secondary ~ .dropdown-menu .dropdown-item:hover i {
        color: #475F7B;
    }

    .dropdown.dropdown-icon-wrapper .btn-secondary ~ .dropdown-menu .dropdown-item:active i, .dropdown.dropdown-icon-wrapper .btn-outline-secondary ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-secondary ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-outline-secondary ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-secondary ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-outline-secondary ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-secondary ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-outline-secondary ~ .dropdown-menu .dropdown-item:active i {
        color: #fff;
    }

    /* Bullet secondary */
    .bullet.bullet-secondary {
        background-color: #475F7B;
    }

    /* For Pagination */
    /* -------------- */
    .pagination-secondary .page-item.active .page-link, .pagination-secondary .page-item.active .page-link:hover {
        background: #475F7B !important;
        color: #fff;
    }

    .pagination-secondary .page-item .page-link:hover {
        background-color: #E6EAEE !important;
    }

    .pagination-secondary .page-item.previous .page-link, .pagination-secondary .page-item.next .page-link {
        color: #475F7B;
    }

    .pagination-secondary .page-item.previous .page-link:hover, .pagination-secondary .page-item.next .page-link:hover {
        background: #475F7B;
    }

    /* Progress Bars secondary */
    /* ---------------------- */
    .progress-bar-secondary .progress-bar {
        background-color: #475F7B;
        box-shadow: 0 2px 6px 0 rgba(71, 95, 123, 0.6);
    }

    /* Chips secondary */
    /* ---------------- */
    .chip-secondary {
        background-color: #475F7B !important;
    }

    .chip-secondary .chip-body {
        color: #fff !important;
    }

    /* Divider secondary */
    /* ---------------*/
    .divider.divider-secondary .divider-text:before, .divider.divider-secondary .divider-text:after {
        border-color: #475F7B !important;
    }

    /* timeline */
    .widget-timeline li.timeline-items.timeline-icon-secondary:before {
        background: #475F7B !important;
    }

    /* Custom Checkbox & Radio - Colored */
    /* --------------------------------- */
    input[type="checkbox"].bg-secondary + .custom-control-label:before, input[type="radio"].bg-secondary + .custom-control-label:before {
        background-color: #475F7B !important;
        border-color: #34465b !important;
    }

    .checkbox.checkbox-secondary input:checked ~ label::before, .checkbox.radio-secondary input:checked ~ label::before, .radio.checkbox-secondary input:checked ~ label::before, .radio.radio-secondary input:checked ~ label::before {
        background-color: #475F7B;
        border-color: #475F7B;
    }

    .checkbox.checkbox-secondary input:checked ~ label::after, .checkbox.radio-secondary input:checked ~ label::after, .radio.checkbox-secondary input:checked ~ label::after, .radio.radio-secondary input:checked ~ label::after {
        border-color: #fff;
    }

    .checkbox.checkbox-secondary.checkbox-glow input:checked ~ label::before, .checkbox.checkbox-secondary.radio-glow input:checked ~ label::before, .checkbox.radio-secondary.checkbox-glow input:checked ~ label::before, .checkbox.radio-secondary.radio-glow input:checked ~ label::before, .radio.checkbox-secondary.checkbox-glow input:checked ~ label::before, .radio.checkbox-secondary.radio-glow input:checked ~ label::before, .radio.radio-secondary.checkbox-glow input:checked ~ label::before, .radio.radio-secondary.radio-glow input:checked ~ label::before {
        box-shadow: 0 0 6px 0 rgba(71, 95, 123, 0.7);
    }

    .checkbox.checkbox-secondary.checkbox-icon label i, .checkbox.radio-secondary.checkbox-icon label i, .radio.checkbox-secondary.checkbox-icon label i, .radio.radio-secondary.checkbox-icon label i {
        color: #fff;
    }

    .checkbox.checkbox-secondary label:after {
        transition: 250ms ease-in-out;
    }

    .radio.radio-secondary input:checked ~ label::after {
        background-color: #fff;
        transition: all 0.15s cubic-bezier(0.35, 0.9, 0.4, 0.9);
    }

    /* Bootstrap Custom Switches */
    /* ------------------------- */
    .custom-switch-secondary .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #475F7B !important;
        color: #fff;
        transition: all .2s ease-out;
    }

    .custom-switch-secondary.custom-switch-glow .custom-control-input:not(:disabled):checked ~ .custom-control-label::before {
        box-shadow: 0 0 8px 0 rgba(71, 95, 123, 0.8) !important;
    }

    /* Touchspin Glow */
    /* -------------- */
    .input-group.touchspin-glow .bootstrap-touchspin-down.btn-secondary, .input-group.touchspin-glow .bootstrap-touchspin-up.btn-secondary {
        box-shadow: 0 0 8px 0 rgba(71, 95, 123, 0.8);
    }

    /* Scrumboard Application - kanban-item with coloured border */
    /* --------------------------------------------------------- */
    .kanban-container .kanban-board .kanban-item[data-border=secondary]:before {
        background-color: #475F7B;
    }

    .edit-kanban-item select option.bg-color_name {
        background-color: #475F7B;
    }

    /* Select2 secondary */
    /* ---------------*/
    select.select-light-secondary ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice, select.select-light-secondary ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice__remove {
        background-color: #E6EAEE !important;
        color: #475F7B !important;
    }

    .secondary.darken-1 {
        color: #3e536b !important;
    }

    .bg-secondary.bg-darken-1 {
        background-color: #3e536b !important;
    }

    .btn-secondary.btn-darken-1 {
        border-color: #34465b !important;
        background-color: #3e536b !important;
    }

    .btn-secondary.btn-darken-1:hover {
        border-color: #34465b !important;
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-darken-1:focus, .btn-secondary.btn-darken-1:active {
        border-color: #2b3a4a !important;
        background-color: #222d3a !important;
    }

    .btn-outline-secondary.btn-outline-darken-1 {
        border-color: #3e536b !important;
        color: #3e536b !important;
    }

    .btn-outline-secondary.btn-outline-darken-1:hover {
        background-color: #3e536b !important;
    }

    input:focus ~ .bg-secondary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #3e536b !important;
    }

    .border-secondary.border-darken-1 {
        border: 1px solid #3e536b !important;
    }

    .border-top-secondary.border-top-darken-1 {
        border-top: 1px solid #3e536b !important;
    }

    .border-bottom-secondary.border-bottom-darken-1 {
        border-bottom: 1px solid #3e536b !important;
    }

    .border-left-secondary.border-left-darken-1 {
        border-left: 1px solid #3e536b !important;
    }

    .border-right-secondary.border-right-darken-1 {
        border-right: 1px solid #3e536b !important;
    }

    .overlay-secondary.overlay-darken-1 {
        background: #3e536b;
        background: rgba(62, 83, 107, 0.6);
    }

    .secondary.darken-2 {
        color: #34465b !important;
    }

    .bg-secondary.bg-darken-2 {
        background-color: #34465b !important;
    }

    .btn-secondary.btn-darken-2 {
        border-color: #34465b !important;
        background-color: #34465b !important;
    }

    .btn-secondary.btn-darken-2:hover {
        border-color: #34465b !important;
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-darken-2:focus, .btn-secondary.btn-darken-2:active {
        border-color: #2b3a4a !important;
        background-color: #222d3a !important;
    }

    .btn-outline-secondary.btn-outline-darken-2 {
        border-color: #34465b !important;
        color: #34465b !important;
    }

    .btn-outline-secondary.btn-outline-darken-2:hover {
        background-color: #34465b !important;
    }

    input:focus ~ .bg-secondary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #34465b !important;
    }

    .border-secondary.border-darken-2 {
        border: 1px solid #34465b !important;
    }

    .border-top-secondary.border-top-darken-2 {
        border-top: 1px solid #34465b !important;
    }

    .border-bottom-secondary.border-bottom-darken-2 {
        border-bottom: 1px solid #34465b !important;
    }

    .border-left-secondary.border-left-darken-2 {
        border-left: 1px solid #34465b !important;
    }

    .border-right-secondary.border-right-darken-2 {
        border-right: 1px solid #34465b !important;
    }

    .overlay-secondary.overlay-darken-2 {
        background: #34465b;
        background: rgba(52, 70, 91, 0.6);
    }

    .secondary.darken-3 {
        color: #2b3a4a !important;
    }

    .bg-secondary.bg-darken-3 {
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-darken-3 {
        border-color: #34465b !important;
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-darken-3:hover {
        border-color: #34465b !important;
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-darken-3:focus, .btn-secondary.btn-darken-3:active {
        border-color: #2b3a4a !important;
        background-color: #222d3a !important;
    }

    .btn-outline-secondary.btn-outline-darken-3 {
        border-color: #2b3a4a !important;
        color: #2b3a4a !important;
    }

    .btn-outline-secondary.btn-outline-darken-3:hover {
        background-color: #2b3a4a !important;
    }

    input:focus ~ .bg-secondary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2b3a4a !important;
    }

    .border-secondary.border-darken-3 {
        border: 1px solid #2b3a4a !important;
    }

    .border-top-secondary.border-top-darken-3 {
        border-top: 1px solid #2b3a4a !important;
    }

    .border-bottom-secondary.border-bottom-darken-3 {
        border-bottom: 1px solid #2b3a4a !important;
    }

    .border-left-secondary.border-left-darken-3 {
        border-left: 1px solid #2b3a4a !important;
    }

    .border-right-secondary.border-right-darken-3 {
        border-right: 1px solid #2b3a4a !important;
    }

    .overlay-secondary.overlay-darken-3 {
        background: #2b3a4a;
        background: rgba(43, 58, 74, 0.6);
    }

    .secondary.darken-4 {
        color: #222d3a !important;
    }

    .bg-secondary.bg-darken-4 {
        background-color: #222d3a !important;
    }

    .btn-secondary.btn-darken-4 {
        border-color: #34465b !important;
        background-color: #222d3a !important;
    }

    .btn-secondary.btn-darken-4:hover {
        border-color: #34465b !important;
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-darken-4:focus, .btn-secondary.btn-darken-4:active {
        border-color: #2b3a4a !important;
        background-color: #222d3a !important;
    }

    .btn-outline-secondary.btn-outline-darken-4 {
        border-color: #222d3a !important;
        color: #222d3a !important;
    }

    .btn-outline-secondary.btn-outline-darken-4:hover {
        background-color: #222d3a !important;
    }

    input:focus ~ .bg-secondary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #222d3a !important;
    }

    .border-secondary.border-darken-4 {
        border: 1px solid #222d3a !important;
    }

    .border-top-secondary.border-top-darken-4 {
        border-top: 1px solid #222d3a !important;
    }

    .border-bottom-secondary.border-bottom-darken-4 {
        border-bottom: 1px solid #222d3a !important;
    }

    .border-left-secondary.border-left-darken-4 {
        border-left: 1px solid #222d3a !important;
    }

    .border-right-secondary.border-right-darken-4 {
        border-right: 1px solid #222d3a !important;
    }

    .overlay-secondary.overlay-darken-4 {
        background: #222d3a;
        background: rgba(34, 45, 58, 0.6);
    }

    .secondary.light {
        color: #E6EAEE !important;
    }

    .bg-secondary.bg-light {
        background-color: #E6EAEE !important;
    }

    .btn-secondary.btn-light {
        border-color: #34465b !important;
        background-color: #E6EAEE !important;
    }

    .btn-secondary.btn-light:hover {
        border-color: #34465b !important;
        background-color: #2b3a4a !important;
    }

    .btn-secondary.btn-light:focus, .btn-secondary.btn-light:active {
        border-color: #2b3a4a !important;
        background-color: #222d3a !important;
    }

    .btn-outline-secondary.btn-outline-light {
        border-color: #E6EAEE !important;
        color: #E6EAEE !important;
    }

    .btn-outline-secondary.btn-outline-light:hover {
        background-color: #E6EAEE !important;
    }

    input:focus ~ .bg-secondary {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E6EAEE !important;
    }

    .border-secondary.border-light {
        border: 1px solid #E6EAEE !important;
    }

    .border-top-secondary.border-top-light {
        border-top: 1px solid #E6EAEE !important;
    }

    .border-bottom-secondary.border-bottom-light {
        border-bottom: 1px solid #E6EAEE !important;
    }

    .border-left-secondary.border-left-light {
        border-left: 1px solid #E6EAEE !important;
    }

    .border-right-secondary.border-right-light {
        border-right: 1px solid #E6EAEE !important;
    }

    .overlay-secondary.overlay-light {
        background: #E6EAEE;
        background: rgba(230, 234, 238, 0.6);
    }

    .success.lighten-5 {
        color: #a4eec9 !important;
    }

    .bg-success.bg-lighten-5 {
        background-color: #a4eec9 !important;
    }

    .btn-success.btn-lighten-5 {
        border-color: #23bd70 !important;
        background-color: #a4eec9 !important;
    }

    .btn-success.btn-lighten-5:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-lighten-5:focus, .btn-success.btn-lighten-5:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-lighten-5 {
        border-color: #a4eec9 !important;
        color: #a4eec9 !important;
    }

    .btn-outline-success.btn-outline-lighten-5:hover {
        background-color: #a4eec9 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #a4eec9 !important;
    }

    .border-success.border-lighten-5 {
        border: 1px solid #a4eec9 !important;
    }

    .border-top-success.border-top-lighten-5 {
        border-top: 1px solid #a4eec9 !important;
    }

    .border-bottom-success.border-bottom-lighten-5 {
        border-bottom: 1px solid #a4eec9 !important;
    }

    .border-left-success.border-left-lighten-5 {
        border-left: 1px solid #a4eec9 !important;
    }

    .border-right-success.border-right-lighten-5 {
        border-right: 1px solid #a4eec9 !important;
    }

    .overlay-success.overlay-lighten-5 {
        background: #a4eec9;
        background: rgba(164, 238, 201, 0.6);
    }

    .success.lighten-4 {
        color: #8feabd !important;
    }

    .bg-success.bg-lighten-4 {
        background-color: #8feabd !important;
    }

    .btn-success.btn-lighten-4 {
        border-color: #23bd70 !important;
        background-color: #8feabd !important;
    }

    .btn-success.btn-lighten-4:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-lighten-4:focus, .btn-success.btn-lighten-4:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-lighten-4 {
        border-color: #8feabd !important;
        color: #8feabd !important;
    }

    .btn-outline-success.btn-outline-lighten-4:hover {
        background-color: #8feabd !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #8feabd !important;
    }

    .border-success.border-lighten-4 {
        border: 1px solid #8feabd !important;
    }

    .border-top-success.border-top-lighten-4 {
        border-top: 1px solid #8feabd !important;
    }

    .border-bottom-success.border-bottom-lighten-4 {
        border-bottom: 1px solid #8feabd !important;
    }

    .border-left-success.border-left-lighten-4 {
        border-left: 1px solid #8feabd !important;
    }

    .border-right-success.border-right-lighten-4 {
        border-right: 1px solid #8feabd !important;
    }

    .overlay-success.overlay-lighten-4 {
        background: #8feabd;
        background: rgba(143, 234, 189, 0.6);
    }

    .success.lighten-3 {
        color: #79e6b0 !important;
    }

    .bg-success.bg-lighten-3 {
        background-color: #79e6b0 !important;
    }

    .btn-success.btn-lighten-3 {
        border-color: #23bd70 !important;
        background-color: #79e6b0 !important;
    }

    .btn-success.btn-lighten-3:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-lighten-3:focus, .btn-success.btn-lighten-3:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-lighten-3 {
        border-color: #79e6b0 !important;
        color: #79e6b0 !important;
    }

    .btn-outline-success.btn-outline-lighten-3:hover {
        background-color: #79e6b0 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #79e6b0 !important;
    }

    .border-success.border-lighten-3 {
        border: 1px solid #79e6b0 !important;
    }

    .border-top-success.border-top-lighten-3 {
        border-top: 1px solid #79e6b0 !important;
    }

    .border-bottom-success.border-bottom-lighten-3 {
        border-bottom: 1px solid #79e6b0 !important;
    }

    .border-left-success.border-left-lighten-3 {
        border-left: 1px solid #79e6b0 !important;
    }

    .border-right-success.border-right-lighten-3 {
        border-right: 1px solid #79e6b0 !important;
    }

    .overlay-success.overlay-lighten-3 {
        background: #79e6b0;
        background: rgba(121, 230, 176, 0.6);
    }

    .success.lighten-2 {
        color: #64e2a3 !important;
    }

    .bg-success.bg-lighten-2 {
        background-color: #64e2a3 !important;
    }

    .btn-success.btn-lighten-2 {
        border-color: #23bd70 !important;
        background-color: #64e2a3 !important;
    }

    .btn-success.btn-lighten-2:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-lighten-2:focus, .btn-success.btn-lighten-2:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-lighten-2 {
        border-color: #64e2a3 !important;
        color: #64e2a3 !important;
    }

    .btn-outline-success.btn-outline-lighten-2:hover {
        background-color: #64e2a3 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #64e2a3 !important;
    }

    .border-success.border-lighten-2 {
        border: 1px solid #64e2a3 !important;
    }

    .border-top-success.border-top-lighten-2 {
        border-top: 1px solid #64e2a3 !important;
    }

    .border-bottom-success.border-bottom-lighten-2 {
        border-bottom: 1px solid #64e2a3 !important;
    }

    .border-left-success.border-left-lighten-2 {
        border-left: 1px solid #64e2a3 !important;
    }

    .border-right-success.border-right-lighten-2 {
        border-right: 1px solid #64e2a3 !important;
    }

    .overlay-success.overlay-lighten-2 {
        background: #64e2a3;
        background: rgba(100, 226, 163, 0.6);
    }

    .success.lighten-1 {
        color: #4ede97 !important;
    }

    .bg-success.bg-lighten-1 {
        background-color: #4ede97 !important;
    }

    .btn-success.btn-lighten-1 {
        border-color: #23bd70 !important;
        background-color: #4ede97 !important;
    }

    .btn-success.btn-lighten-1:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-lighten-1:focus, .btn-success.btn-lighten-1:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-lighten-1 {
        border-color: #4ede97 !important;
        color: #4ede97 !important;
    }

    .btn-outline-success.btn-outline-lighten-1:hover {
        background-color: #4ede97 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #4ede97 !important;
    }

    .border-success.border-lighten-1 {
        border: 1px solid #4ede97 !important;
    }

    .border-top-success.border-top-lighten-1 {
        border-top: 1px solid #4ede97 !important;
    }

    .border-bottom-success.border-bottom-lighten-1 {
        border-bottom: 1px solid #4ede97 !important;
    }

    .border-left-success.border-left-lighten-1 {
        border-left: 1px solid #4ede97 !important;
    }

    .border-right-success.border-right-lighten-1 {
        border-right: 1px solid #4ede97 !important;
    }

    .overlay-success.overlay-lighten-1 {
        background: #4ede97;
        background: rgba(78, 222, 151, 0.6);
    }

    /* success Color Style */
    /* ----------------------- */
    /* Text color */
    /* ---------- */
    .success {
        color: #39DA8A !important;
    }

    /* text with light success */
    .text-light-success {
        color: rgba(57, 218, 138, 0.2) !important;
    }

    /* Background color */
    /* ---------------- */
    .bg-success {
        background-color: #39DA8A !important;
    }

    .bg-success .card-header,
    .bg-success .card-footer {
        background-color: transparent;
    }

    /* bg color lighten for rgba - opacity set */
    .bg-rgba-success {
        background: rgba(57, 218, 138, 0.2) !important;
    }

    .bg-rgba-success.alert {
        color: #39DA8A;
    }

    .bg-rgba-success.alert.alert-dismissible .close {
        color: #39DA8A;
    }

    /* Alert success */
    /* ---------------- */
    .alert.alert-success {
        background: #39DA8A !important;
        color: #fff !important;
        box-shadow: 0 3px 8px 0 rgba(57, 218, 138, 0.4);
        border: none;
    }

    /* Border success */
    /* ---------------- */
    .border-success {
        border: 1px solid #39DA8A !important;
    }

    .border-success .select2-selection__arrow b {
        border-color: #23bd70 !important;
    }

    .border-success.alert {
        color: #39DA8A;
    }

    .border-success.alert.alert-dismissible .close {
        color: #39DA8A;
    }

    .border-top-success {
        border-top: 1px solid #39DA8A;
    }

    .border-bottom-success {
        border-bottom: 1px solid #39DA8A;
    }

    .border-left-success {
        border-left: 1px solid #39DA8A;
    }

    .border-right-success {
        border-right: 1px solid #39DA8A;
    }

    /* Navbar icon stroke color according to bg color */
    .header-navbar.bg-success .navbar-nav .nav-item > a i {
        -webkit-text-stroke: 0.2px #39DA8A !important;
    }

    /* Badges */
    /* ------ */
    .badge.badge-success {
        background-color: #39DA8A;
    }

    .badge.badge-light-success {
        background-color: #D2FFE8;
        color: #39DA8A !important;
    }

    .badge.bg-success.badge-glow, .badge.border-success.badge-glow, .badge.badge-success.badge-glow {
        box-shadow: 0px 0px 10px #39DA8A;
    }

    .badge-circle-success {
        background-color: #39DA8A;
    }

    .badge-circle-light-success {
        background-color: #D2FFE8;
        color: #39DA8A;
    }

    .overlay-success {
        background: #39DA8A;
        background: rgba(57, 218, 138, 0.6);
    }

    /* Basic buttons */
    /* ------------- */
    .btn-success {
        border-color: #23bd70 !important;
        background-color: #39DA8A !important;
        color: #fff;
    }

    .btn-success:hover, .btn-success.hover {
        background-color: #4ede97 !important;
        color: #fff;
    }

    .btn-success:hover.glow, .btn-success.hover.glow {
        box-shadow: 0 4px 12px 0 rgba(57, 218, 138, 0.6) !important;
    }

    .btn-success:focus, .btn-success:active, .btn-success.active {
        background-color: #27d27d !important;
        color: #fff !important;
    }

    .btn-success.glow {
        box-shadow: 0 2px 4px 0 rgba(57, 218, 138, 0.5) !important;
    }

    .btn-success:disabled, .btn-success.disabled {
        color: #fff !important;
    }

    .btn-light-success {
        background-color: #D2FFE8;
        color: #39DA8A !important;
    }

    .btn-light-success:hover, .btn-light-success.hover {
        background-color: #4ede97 !important;
        color: #fff !important;
    }

    .btn-light-success:active, .btn-light-success.active {
        background-color: #27d27d !important;
        color: #fff !important;
    }

    /* Outline buttons */
    .btn-outline-success {
        border: 1px solid #39DA8A;
        background-color: transparent;
        color: #39DA8A !important;
    }

    .btn-outline-success:hover, .btn-outline-success.hover {
        background-color: #4ede97 !important;
        color: #fff !important;
    }

    .btn-outline-success:active, .btn-outline-success.active {
        background-color: #27d27d !important;
        color: #fff !important;
    }

    /* Dropdowns */
    /* --------- */
    .btn-success ~ .dropdown-menu .dropdown-item.active, .btn-outline-success ~ .dropdown-menu .dropdown-item.active {
        background-color: #39DA8A;
        color: #fff;
    }

    .btn-success ~ .dropdown-menu .dropdown-item.active:hover, .btn-outline-success ~ .dropdown-menu .dropdown-item.active:hover {
        color: #fff;
    }

    .dropdown.dropdown-icon-wrapper .btn-success ~ .dropdown-menu .dropdown-item:hover i, .dropdown.dropdown-icon-wrapper .btn-outline-success ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-success ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-outline-success ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-success ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-outline-success ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-success ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-outline-success ~ .dropdown-menu .dropdown-item:hover i {
        color: #39DA8A;
    }

    .dropdown.dropdown-icon-wrapper .btn-success ~ .dropdown-menu .dropdown-item:active i, .dropdown.dropdown-icon-wrapper .btn-outline-success ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-success ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-outline-success ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-success ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-outline-success ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-success ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-outline-success ~ .dropdown-menu .dropdown-item:active i {
        color: #fff;
    }

    /* Bullet success */
    .bullet.bullet-success {
        background-color: #39DA8A;
    }

    /* For Pagination */
    /* -------------- */
    .pagination-success .page-item.active .page-link, .pagination-success .page-item.active .page-link:hover {
        background: #39DA8A !important;
        color: #fff;
    }

    .pagination-success .page-item .page-link:hover {
        background-color: #D2FFE8 !important;
    }

    .pagination-success .page-item.previous .page-link, .pagination-success .page-item.next .page-link {
        color: #39DA8A;
    }

    .pagination-success .page-item.previous .page-link:hover, .pagination-success .page-item.next .page-link:hover {
        background: #39DA8A;
    }

    /* Progress Bars success */
    /* ---------------------- */
    .progress-bar-success .progress-bar {
        background-color: #39DA8A;
        box-shadow: 0 2px 6px 0 rgba(57, 218, 138, 0.6);
    }

    /* Chips success */
    /* ---------------- */
    .chip-success {
        background-color: #39DA8A !important;
    }

    .chip-success .chip-body {
        color: #fff !important;
    }

    /* Divider success */
    /* ---------------*/
    .divider.divider-success .divider-text:before, .divider.divider-success .divider-text:after {
        border-color: #39DA8A !important;
    }

    /* timeline */
    .widget-timeline li.timeline-items.timeline-icon-success:before {
        background: #39DA8A !important;
    }

    /* Custom Checkbox & Radio - Colored */
    /* --------------------------------- */
    input[type="checkbox"].bg-success + .custom-control-label:before, input[type="radio"].bg-success + .custom-control-label:before {
        background-color: #39DA8A !important;
        border-color: #23bd70 !important;
    }

    .checkbox.checkbox-success input:checked ~ label::before, .checkbox.radio-success input:checked ~ label::before, .radio.checkbox-success input:checked ~ label::before, .radio.radio-success input:checked ~ label::before {
        background-color: #39DA8A;
        border-color: #39DA8A;
    }

    .checkbox.checkbox-success input:checked ~ label::after, .checkbox.radio-success input:checked ~ label::after, .radio.checkbox-success input:checked ~ label::after, .radio.radio-success input:checked ~ label::after {
        border-color: #fff;
    }

    .checkbox.checkbox-success.checkbox-glow input:checked ~ label::before, .checkbox.checkbox-success.radio-glow input:checked ~ label::before, .checkbox.radio-success.checkbox-glow input:checked ~ label::before, .checkbox.radio-success.radio-glow input:checked ~ label::before, .radio.checkbox-success.checkbox-glow input:checked ~ label::before, .radio.checkbox-success.radio-glow input:checked ~ label::before, .radio.radio-success.checkbox-glow input:checked ~ label::before, .radio.radio-success.radio-glow input:checked ~ label::before {
        box-shadow: 0 0 6px 0 rgba(57, 218, 138, 0.7);
    }

    .checkbox.checkbox-success.checkbox-icon label i, .checkbox.radio-success.checkbox-icon label i, .radio.checkbox-success.checkbox-icon label i, .radio.radio-success.checkbox-icon label i {
        color: #fff;
    }

    .checkbox.checkbox-success label:after {
        transition: 250ms ease-in-out;
    }

    .radio.radio-success input:checked ~ label::after {
        background-color: #fff;
        transition: all 0.15s cubic-bezier(0.35, 0.9, 0.4, 0.9);
    }

    /* Bootstrap Custom Switches */
    /* ------------------------- */
    .custom-switch-success .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #39DA8A !important;
        color: #fff;
        transition: all .2s ease-out;
    }

    .custom-switch-success.custom-switch-glow .custom-control-input:not(:disabled):checked ~ .custom-control-label::before {
        box-shadow: 0 0 8px 0 rgba(57, 218, 138, 0.8) !important;
    }

    /* Touchspin Glow */
    /* -------------- */
    .input-group.touchspin-glow .bootstrap-touchspin-down.btn-success, .input-group.touchspin-glow .bootstrap-touchspin-up.btn-success {
        box-shadow: 0 0 8px 0 rgba(57, 218, 138, 0.8);
    }

    /* Scrumboard Application - kanban-item with coloured border */
    /* --------------------------------------------------------- */
    .kanban-container .kanban-board .kanban-item[data-border=success]:before {
        background-color: #39DA8A;
    }

    .edit-kanban-item select option.bg-color_name {
        background-color: #39DA8A;
    }

    /* Select2 success */
    /* ---------------*/
    select.select-light-success ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice, select.select-light-success ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice__remove {
        background-color: #D2FFE8 !important;
        color: #39DA8A !important;
    }

    .success.darken-1 {
        color: #27d27d !important;
    }

    .bg-success.bg-darken-1 {
        background-color: #27d27d !important;
    }

    .btn-success.btn-darken-1 {
        border-color: #23bd70 !important;
        background-color: #27d27d !important;
    }

    .btn-success.btn-darken-1:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-darken-1:focus, .btn-success.btn-darken-1:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-darken-1 {
        border-color: #27d27d !important;
        color: #27d27d !important;
    }

    .btn-outline-success.btn-outline-darken-1:hover {
        background-color: #27d27d !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #27d27d !important;
    }

    .border-success.border-darken-1 {
        border: 1px solid #27d27d !important;
    }

    .border-top-success.border-top-darken-1 {
        border-top: 1px solid #27d27d !important;
    }

    .border-bottom-success.border-bottom-darken-1 {
        border-bottom: 1px solid #27d27d !important;
    }

    .border-left-success.border-left-darken-1 {
        border-left: 1px solid #27d27d !important;
    }

    .border-right-success.border-right-darken-1 {
        border-right: 1px solid #27d27d !important;
    }

    .overlay-success.overlay-darken-1 {
        background: #27d27d;
        background: rgba(39, 210, 125, 0.6);
    }

    .success.darken-2 {
        color: #23bd70 !important;
    }

    .bg-success.bg-darken-2 {
        background-color: #23bd70 !important;
    }

    .btn-success.btn-darken-2 {
        border-color: #23bd70 !important;
        background-color: #23bd70 !important;
    }

    .btn-success.btn-darken-2:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-darken-2:focus, .btn-success.btn-darken-2:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-darken-2 {
        border-color: #23bd70 !important;
        color: #23bd70 !important;
    }

    .btn-outline-success.btn-outline-darken-2:hover {
        background-color: #23bd70 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #23bd70 !important;
    }

    .border-success.border-darken-2 {
        border: 1px solid #23bd70 !important;
    }

    .border-top-success.border-top-darken-2 {
        border-top: 1px solid #23bd70 !important;
    }

    .border-bottom-success.border-bottom-darken-2 {
        border-bottom: 1px solid #23bd70 !important;
    }

    .border-left-success.border-left-darken-2 {
        border-left: 1px solid #23bd70 !important;
    }

    .border-right-success.border-right-darken-2 {
        border-right: 1px solid #23bd70 !important;
    }

    .overlay-success.overlay-darken-2 {
        background: #23bd70;
        background: rgba(35, 189, 112, 0.6);
    }

    .success.darken-3 {
        color: #1fa764 !important;
    }

    .bg-success.bg-darken-3 {
        background-color: #1fa764 !important;
    }

    .btn-success.btn-darken-3 {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-darken-3:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-darken-3:focus, .btn-success.btn-darken-3:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-darken-3 {
        border-color: #1fa764 !important;
        color: #1fa764 !important;
    }

    .btn-outline-success.btn-outline-darken-3:hover {
        background-color: #1fa764 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1fa764 !important;
    }

    .border-success.border-darken-3 {
        border: 1px solid #1fa764 !important;
    }

    .border-top-success.border-top-darken-3 {
        border-top: 1px solid #1fa764 !important;
    }

    .border-bottom-success.border-bottom-darken-3 {
        border-bottom: 1px solid #1fa764 !important;
    }

    .border-left-success.border-left-darken-3 {
        border-left: 1px solid #1fa764 !important;
    }

    .border-right-success.border-right-darken-3 {
        border-right: 1px solid #1fa764 !important;
    }

    .overlay-success.overlay-darken-3 {
        background: #1fa764;
        background: rgba(31, 167, 100, 0.6);
    }

    .success.darken-4 {
        color: #1b9257 !important;
    }

    .bg-success.bg-darken-4 {
        background-color: #1b9257 !important;
    }

    .btn-success.btn-darken-4 {
        border-color: #23bd70 !important;
        background-color: #1b9257 !important;
    }

    .btn-success.btn-darken-4:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-darken-4:focus, .btn-success.btn-darken-4:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-darken-4 {
        border-color: #1b9257 !important;
        color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-darken-4:hover {
        background-color: #1b9257 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1b9257 !important;
    }

    .border-success.border-darken-4 {
        border: 1px solid #1b9257 !important;
    }

    .border-top-success.border-top-darken-4 {
        border-top: 1px solid #1b9257 !important;
    }

    .border-bottom-success.border-bottom-darken-4 {
        border-bottom: 1px solid #1b9257 !important;
    }

    .border-left-success.border-left-darken-4 {
        border-left: 1px solid #1b9257 !important;
    }

    .border-right-success.border-right-darken-4 {
        border-right: 1px solid #1b9257 !important;
    }

    .overlay-success.overlay-darken-4 {
        background: #1b9257;
        background: rgba(27, 146, 87, 0.6);
    }

    .success.accent-1 {
        color: #E1FFF1 !important;
    }

    .bg-success.bg-accent-1 {
        background-color: #E1FFF1 !important;
    }

    .btn-success.btn-accent-1 {
        border-color: #23bd70 !important;
        background-color: #E1FFF1 !important;
    }

    .btn-success.btn-accent-1:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-accent-1:focus, .btn-success.btn-accent-1:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-accent-1 {
        border-color: #E1FFF1 !important;
        color: #E1FFF1 !important;
    }

    .btn-outline-success.btn-outline-accent-1:hover {
        background-color: #E1FFF1 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E1FFF1 !important;
    }

    .border-success.border-accent-1 {
        border: 1px solid #E1FFF1 !important;
    }

    .border-top-success.border-top-accent-1 {
        border-top: 1px solid #E1FFF1 !important;
    }

    .border-bottom-success.border-bottom-accent-1 {
        border-bottom: 1px solid #E1FFF1 !important;
    }

    .border-left-success.border-left-accent-1 {
        border-left: 1px solid #E1FFF1 !important;
    }

    .border-right-success.border-right-accent-1 {
        border-right: 1px solid #E1FFF1 !important;
    }

    .overlay-success.overlay-accent-1 {
        background: #E1FFF1;
        background: rgba(225, 255, 241, 0.6);
    }

    .success.accent-2 {
        color: #AEFFD9 !important;
    }

    .bg-success.bg-accent-2 {
        background-color: #AEFFD9 !important;
    }

    .btn-success.btn-accent-2 {
        border-color: #23bd70 !important;
        background-color: #AEFFD9 !important;
    }

    .btn-success.btn-accent-2:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-accent-2:focus, .btn-success.btn-accent-2:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-accent-2 {
        border-color: #AEFFD9 !important;
        color: #AEFFD9 !important;
    }

    .btn-outline-success.btn-outline-accent-2:hover {
        background-color: #AEFFD9 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #AEFFD9 !important;
    }

    .border-success.border-accent-2 {
        border: 1px solid #AEFFD9 !important;
    }

    .border-top-success.border-top-accent-2 {
        border-top: 1px solid #AEFFD9 !important;
    }

    .border-bottom-success.border-bottom-accent-2 {
        border-bottom: 1px solid #AEFFD9 !important;
    }

    .border-left-success.border-left-accent-2 {
        border-left: 1px solid #AEFFD9 !important;
    }

    .border-right-success.border-right-accent-2 {
        border-right: 1px solid #AEFFD9 !important;
    }

    .overlay-success.overlay-accent-2 {
        background: #AEFFD9;
        background: rgba(174, 255, 217, 0.6);
    }

    .success.accent-3 {
        color: #7BFFC1 !important;
    }

    .bg-success.bg-accent-3 {
        background-color: #7BFFC1 !important;
    }

    .btn-success.btn-accent-3 {
        border-color: #23bd70 !important;
        background-color: #7BFFC1 !important;
    }

    .btn-success.btn-accent-3:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-accent-3:focus, .btn-success.btn-accent-3:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-accent-3 {
        border-color: #7BFFC1 !important;
        color: #7BFFC1 !important;
    }

    .btn-outline-success.btn-outline-accent-3:hover {
        background-color: #7BFFC1 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #7BFFC1 !important;
    }

    .border-success.border-accent-3 {
        border: 1px solid #7BFFC1 !important;
    }

    .border-top-success.border-top-accent-3 {
        border-top: 1px solid #7BFFC1 !important;
    }

    .border-bottom-success.border-bottom-accent-3 {
        border-bottom: 1px solid #7BFFC1 !important;
    }

    .border-left-success.border-left-accent-3 {
        border-left: 1px solid #7BFFC1 !important;
    }

    .border-right-success.border-right-accent-3 {
        border-right: 1px solid #7BFFC1 !important;
    }

    .overlay-success.overlay-accent-3 {
        background: #7BFFC1;
        background: rgba(123, 255, 193, 0.6);
    }

    .success.accent-4 {
        color: #62FFB5 !important;
    }

    .bg-success.bg-accent-4 {
        background-color: #62FFB5 !important;
    }

    .btn-success.btn-accent-4 {
        border-color: #23bd70 !important;
        background-color: #62FFB5 !important;
    }

    .btn-success.btn-accent-4:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-accent-4:focus, .btn-success.btn-accent-4:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-accent-4 {
        border-color: #62FFB5 !important;
        color: #62FFB5 !important;
    }

    .btn-outline-success.btn-outline-accent-4:hover {
        background-color: #62FFB5 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #62FFB5 !important;
    }

    .border-success.border-accent-4 {
        border: 1px solid #62FFB5 !important;
    }

    .border-top-success.border-top-accent-4 {
        border-top: 1px solid #62FFB5 !important;
    }

    .border-bottom-success.border-bottom-accent-4 {
        border-bottom: 1px solid #62FFB5 !important;
    }

    .border-left-success.border-left-accent-4 {
        border-left: 1px solid #62FFB5 !important;
    }

    .border-right-success.border-right-accent-4 {
        border-right: 1px solid #62FFB5 !important;
    }

    .overlay-success.overlay-accent-4 {
        background: #62FFB5;
        background: rgba(98, 255, 181, 0.6);
    }

    .success.light {
        color: #D2FFE8 !important;
    }

    .bg-success.bg-light {
        background-color: #D2FFE8 !important;
    }

    .btn-success.btn-light {
        border-color: #23bd70 !important;
        background-color: #D2FFE8 !important;
    }

    .btn-success.btn-light:hover {
        border-color: #23bd70 !important;
        background-color: #1fa764 !important;
    }

    .btn-success.btn-light:focus, .btn-success.btn-light:active {
        border-color: #1fa764 !important;
        background-color: #1b9257 !important;
    }

    .btn-outline-success.btn-outline-light {
        border-color: #D2FFE8 !important;
        color: #D2FFE8 !important;
    }

    .btn-outline-success.btn-outline-light:hover {
        background-color: #D2FFE8 !important;
    }

    input:focus ~ .bg-success {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #D2FFE8 !important;
    }

    .border-success.border-light {
        border: 1px solid #D2FFE8 !important;
    }

    .border-top-success.border-top-light {
        border-top: 1px solid #D2FFE8 !important;
    }

    .border-bottom-success.border-bottom-light {
        border-bottom: 1px solid #D2FFE8 !important;
    }

    .border-left-success.border-left-light {
        border-left: 1px solid #D2FFE8 !important;
    }

    .border-right-success.border-right-light {
        border-right: 1px solid #D2FFE8 !important;
    }

    .overlay-success.overlay-light {
        background: #D2FFE8;
        background: rgba(210, 255, 232, 0.6);
    }

    .info.lighten-5 {
        color: #5ef5ff !important;
    }

    .bg-info.bg-lighten-5 {
        background-color: #5ef5ff !important;
    }

    .btn-info.btn-lighten-5 {
        border-color: #009faa !important;
        background-color: #5ef5ff !important;
    }

    .btn-info.btn-lighten-5:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-lighten-5:focus, .btn-info.btn-lighten-5:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-lighten-5 {
        border-color: #5ef5ff !important;
        color: #5ef5ff !important;
    }

    .btn-outline-info.btn-outline-lighten-5:hover {
        background-color: #5ef5ff !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #5ef5ff !important;
    }

    .border-info.border-lighten-5 {
        border: 1px solid #5ef5ff !important;
    }

    .border-top-info.border-top-lighten-5 {
        border-top: 1px solid #5ef5ff !important;
    }

    .border-bottom-info.border-bottom-lighten-5 {
        border-bottom: 1px solid #5ef5ff !important;
    }

    .border-left-info.border-left-lighten-5 {
        border-left: 1px solid #5ef5ff !important;
    }

    .border-right-info.border-right-lighten-5 {
        border-right: 1px solid #5ef5ff !important;
    }

    .overlay-info.overlay-lighten-5 {
        background: #5ef5ff;
        background: rgba(94, 245, 255, 0.6);
    }

    .info.lighten-4 {
        color: #44f3ff !important;
    }

    .bg-info.bg-lighten-4 {
        background-color: #44f3ff !important;
    }

    .btn-info.btn-lighten-4 {
        border-color: #009faa !important;
        background-color: #44f3ff !important;
    }

    .btn-info.btn-lighten-4:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-lighten-4:focus, .btn-info.btn-lighten-4:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-lighten-4 {
        border-color: #44f3ff !important;
        color: #44f3ff !important;
    }

    .btn-outline-info.btn-outline-lighten-4:hover {
        background-color: #44f3ff !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #44f3ff !important;
    }

    .border-info.border-lighten-4 {
        border: 1px solid #44f3ff !important;
    }

    .border-top-info.border-top-lighten-4 {
        border-top: 1px solid #44f3ff !important;
    }

    .border-bottom-info.border-bottom-lighten-4 {
        border-bottom: 1px solid #44f3ff !important;
    }

    .border-left-info.border-left-lighten-4 {
        border-left: 1px solid #44f3ff !important;
    }

    .border-right-info.border-right-lighten-4 {
        border-right: 1px solid #44f3ff !important;
    }

    .overlay-info.overlay-lighten-4 {
        background: #44f3ff;
        background: rgba(68, 243, 255, 0.6);
    }

    .info.lighten-3 {
        color: #2bf2ff !important;
    }

    .bg-info.bg-lighten-3 {
        background-color: #2bf2ff !important;
    }

    .btn-info.btn-lighten-3 {
        border-color: #009faa !important;
        background-color: #2bf2ff !important;
    }

    .btn-info.btn-lighten-3:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-lighten-3:focus, .btn-info.btn-lighten-3:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-lighten-3 {
        border-color: #2bf2ff !important;
        color: #2bf2ff !important;
    }

    .btn-outline-info.btn-outline-lighten-3:hover {
        background-color: #2bf2ff !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2bf2ff !important;
    }

    .border-info.border-lighten-3 {
        border: 1px solid #2bf2ff !important;
    }

    .border-top-info.border-top-lighten-3 {
        border-top: 1px solid #2bf2ff !important;
    }

    .border-bottom-info.border-bottom-lighten-3 {
        border-bottom: 1px solid #2bf2ff !important;
    }

    .border-left-info.border-left-lighten-3 {
        border-left: 1px solid #2bf2ff !important;
    }

    .border-right-info.border-right-lighten-3 {
        border-right: 1px solid #2bf2ff !important;
    }

    .overlay-info.overlay-lighten-3 {
        background: #2bf2ff;
        background: rgba(43, 242, 255, 0.6);
    }

    .info.lighten-2 {
        color: #11f0ff !important;
    }

    .bg-info.bg-lighten-2 {
        background-color: #11f0ff !important;
    }

    .btn-info.btn-lighten-2 {
        border-color: #009faa !important;
        background-color: #11f0ff !important;
    }

    .btn-info.btn-lighten-2:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-lighten-2:focus, .btn-info.btn-lighten-2:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-lighten-2 {
        border-color: #11f0ff !important;
        color: #11f0ff !important;
    }

    .btn-outline-info.btn-outline-lighten-2:hover {
        background-color: #11f0ff !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #11f0ff !important;
    }

    .border-info.border-lighten-2 {
        border: 1px solid #11f0ff !important;
    }

    .border-top-info.border-top-lighten-2 {
        border-top: 1px solid #11f0ff !important;
    }

    .border-bottom-info.border-bottom-lighten-2 {
        border-bottom: 1px solid #11f0ff !important;
    }

    .border-left-info.border-left-lighten-2 {
        border-left: 1px solid #11f0ff !important;
    }

    .border-right-info.border-right-lighten-2 {
        border-right: 1px solid #11f0ff !important;
    }

    .overlay-info.overlay-lighten-2 {
        background: #11f0ff;
        background: rgba(17, 240, 255, 0.6);
    }

    .info.lighten-1 {
        color: #00e7f7 !important;
    }

    .bg-info.bg-lighten-1 {
        background-color: #00e7f7 !important;
    }

    .btn-info.btn-lighten-1 {
        border-color: #009faa !important;
        background-color: #00e7f7 !important;
    }

    .btn-info.btn-lighten-1:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-lighten-1:focus, .btn-info.btn-lighten-1:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-lighten-1 {
        border-color: #00e7f7 !important;
        color: #00e7f7 !important;
    }

    .btn-outline-info.btn-outline-lighten-1:hover {
        background-color: #00e7f7 !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00e7f7 !important;
    }

    .border-info.border-lighten-1 {
        border: 1px solid #00e7f7 !important;
    }

    .border-top-info.border-top-lighten-1 {
        border-top: 1px solid #00e7f7 !important;
    }

    .border-bottom-info.border-bottom-lighten-1 {
        border-bottom: 1px solid #00e7f7 !important;
    }

    .border-left-info.border-left-lighten-1 {
        border-left: 1px solid #00e7f7 !important;
    }

    .border-right-info.border-right-lighten-1 {
        border-right: 1px solid #00e7f7 !important;
    }

    .overlay-info.overlay-lighten-1 {
        background: #00e7f7;
        background: rgba(0, 231, 247, 0.6);
    }

    /* info Color Style */
    /* ----------------------- */
    /* Text color */
    /* ---------- */
    .info {
        color: #00CFDD !important;
    }

    /* text with light info */
    .text-light-info {
        color: rgba(0, 207, 221, 0.2) !important;
    }

    /* Background color */
    /* ---------------- */
    .bg-info {
        background-color: #00CFDD !important;
    }

    .bg-info .card-header,
    .bg-info .card-footer {
        background-color: transparent;
    }

    /* bg color lighten for rgba - opacity set */
    .bg-rgba-info {
        background: rgba(0, 207, 221, 0.2) !important;
    }

    .bg-rgba-info.alert {
        color: #00CFDD;
    }

    .bg-rgba-info.alert.alert-dismissible .close {
        color: #00CFDD;
    }

    /* Alert info */
    /* ---------------- */
    .alert.alert-info {
        background: #00CFDD !important;
        color: #fff !important;
        box-shadow: 0 3px 8px 0 rgba(0, 207, 221, 0.4);
        border: none;
    }

    /* Border info */
    /* ---------------- */
    .border-info {
        border: 1px solid #00CFDD !important;
    }

    .border-info .select2-selection__arrow b {
        border-color: #009faa !important;
    }

    .border-info.alert {
        color: #00CFDD;
    }

    .border-info.alert.alert-dismissible .close {
        color: #00CFDD;
    }

    .border-top-info {
        border-top: 1px solid #00CFDD;
    }

    .border-bottom-info {
        border-bottom: 1px solid #00CFDD;
    }

    .border-left-info {
        border-left: 1px solid #00CFDD;
    }

    .border-right-info {
        border-right: 1px solid #00CFDD;
    }

    /* Navbar icon stroke color according to bg color */
    .header-navbar.bg-info .navbar-nav .nav-item > a i {
        -webkit-text-stroke: 0.2px #00CFDD !important;
    }

    /* Badges */
    /* ------ */
    .badge.badge-info {
        background-color: #00CFDD;
    }

    .badge.badge-light-info {
        background-color: #CCF5F8;
        color: #00CFDD !important;
    }

    .badge.bg-info.badge-glow, .badge.border-info.badge-glow, .badge.badge-info.badge-glow {
        box-shadow: 0px 0px 10px #00CFDD;
    }

    .badge-circle-info {
        background-color: #00CFDD;
    }

    .badge-circle-light-info {
        background-color: #CCF5F8;
        color: #00CFDD;
    }

    .overlay-info {
        background: #00CFDD;
        background: rgba(0, 207, 221, 0.6);
    }

    /* Basic buttons */
    /* ------------- */
    .btn-info {
        border-color: #009faa !important;
        background-color: #00CFDD !important;
        color: #fff;
    }

    .btn-info:hover, .btn-info.hover {
        background-color: #00e7f7 !important;
        color: #fff;
    }

    .btn-info:hover.glow, .btn-info.hover.glow {
        box-shadow: 0 4px 12px 0 rgba(0, 207, 221, 0.6) !important;
    }

    .btn-info:focus, .btn-info:active, .btn-info.active {
        background-color: #00b7c4 !important;
        color: #fff !important;
    }

    .btn-info.glow {
        box-shadow: 0 2px 4px 0 rgba(0, 207, 221, 0.5) !important;
    }

    .btn-info:disabled, .btn-info.disabled {
        color: #fff !important;
    }

    .btn-light-info {
        background-color: #CCF5F8;
        color: #00CFDD !important;
    }

    .btn-light-info:hover, .btn-light-info.hover {
        background-color: #00e7f7 !important;
        color: #fff !important;
    }

    .btn-light-info:active, .btn-light-info.active {
        background-color: #00b7c4 !important;
        color: #fff !important;
    }

    /* Outline buttons */
    .btn-outline-info {
        border: 1px solid #00CFDD;
        background-color: transparent;
        color: #00CFDD !important;
    }

    .btn-outline-info:hover, .btn-outline-info.hover {
        background-color: #00e7f7 !important;
        color: #fff !important;
    }

    .btn-outline-info:active, .btn-outline-info.active {
        background-color: #00b7c4 !important;
        color: #fff !important;
    }

    /* Dropdowns */
    /* --------- */
    .btn-info ~ .dropdown-menu .dropdown-item.active, .btn-outline-info ~ .dropdown-menu .dropdown-item.active {
        background-color: #00CFDD;
        color: #fff;
    }

    .btn-info ~ .dropdown-menu .dropdown-item.active:hover, .btn-outline-info ~ .dropdown-menu .dropdown-item.active:hover {
        color: #fff;
    }

    .dropdown.dropdown-icon-wrapper .btn-info ~ .dropdown-menu .dropdown-item:hover i, .dropdown.dropdown-icon-wrapper .btn-outline-info ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-info ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-outline-info ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-info ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-outline-info ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-info ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-outline-info ~ .dropdown-menu .dropdown-item:hover i {
        color: #00CFDD;
    }

    .dropdown.dropdown-icon-wrapper .btn-info ~ .dropdown-menu .dropdown-item:active i, .dropdown.dropdown-icon-wrapper .btn-outline-info ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-info ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-outline-info ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-info ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-outline-info ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-info ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-outline-info ~ .dropdown-menu .dropdown-item:active i {
        color: #fff;
    }

    /* Bullet info */
    .bullet.bullet-info {
        background-color: #00CFDD;
    }

    /* For Pagination */
    /* -------------- */
    .pagination-info .page-item.active .page-link, .pagination-info .page-item.active .page-link:hover {
        background: #00CFDD !important;
        color: #fff;
    }

    .pagination-info .page-item .page-link:hover {
        background-color: #CCF5F8 !important;
    }

    .pagination-info .page-item.previous .page-link, .pagination-info .page-item.next .page-link {
        color: #00CFDD;
    }

    .pagination-info .page-item.previous .page-link:hover, .pagination-info .page-item.next .page-link:hover {
        background: #00CFDD;
    }

    /* Progress Bars info */
    /* ---------------------- */
    .progress-bar-info .progress-bar {
        background-color: #00CFDD;
        box-shadow: 0 2px 6px 0 rgba(0, 207, 221, 0.6);
    }

    /* Chips info */
    /* ---------------- */
    .chip-info {
        background-color: #00CFDD !important;
    }

    .chip-info .chip-body {
        color: #fff !important;
    }

    /* Divider info */
    /* ---------------*/
    .divider.divider-info .divider-text:before, .divider.divider-info .divider-text:after {
        border-color: #00CFDD !important;
    }

    /* timeline */
    .widget-timeline li.timeline-items.timeline-icon-info:before {
        background: #00CFDD !important;
    }

    /* Custom Checkbox & Radio - Colored */
    /* --------------------------------- */
    input[type="checkbox"].bg-info + .custom-control-label:before, input[type="radio"].bg-info + .custom-control-label:before {
        background-color: #00CFDD !important;
        border-color: #009faa !important;
    }

    .checkbox.checkbox-info input:checked ~ label::before, .checkbox.radio-info input:checked ~ label::before, .radio.checkbox-info input:checked ~ label::before, .radio.radio-info input:checked ~ label::before {
        background-color: #00CFDD;
        border-color: #00CFDD;
    }

    .checkbox.checkbox-info input:checked ~ label::after, .checkbox.radio-info input:checked ~ label::after, .radio.checkbox-info input:checked ~ label::after, .radio.radio-info input:checked ~ label::after {
        border-color: #fff;
    }

    .checkbox.checkbox-info.checkbox-glow input:checked ~ label::before, .checkbox.checkbox-info.radio-glow input:checked ~ label::before, .checkbox.radio-info.checkbox-glow input:checked ~ label::before, .checkbox.radio-info.radio-glow input:checked ~ label::before, .radio.checkbox-info.checkbox-glow input:checked ~ label::before, .radio.checkbox-info.radio-glow input:checked ~ label::before, .radio.radio-info.checkbox-glow input:checked ~ label::before, .radio.radio-info.radio-glow input:checked ~ label::before {
        box-shadow: 0 0 6px 0 rgba(0, 207, 221, 0.7);
    }

    .checkbox.checkbox-info.checkbox-icon label i, .checkbox.radio-info.checkbox-icon label i, .radio.checkbox-info.checkbox-icon label i, .radio.radio-info.checkbox-icon label i {
        color: #fff;
    }

    .checkbox.checkbox-info label:after {
        transition: 250ms ease-in-out;
    }

    .radio.radio-info input:checked ~ label::after {
        background-color: #fff;
        transition: all 0.15s cubic-bezier(0.35, 0.9, 0.4, 0.9);
    }

    /* Bootstrap Custom Switches */
    /* ------------------------- */
    .custom-switch-info .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #00CFDD !important;
        color: #fff;
        transition: all .2s ease-out;
    }

    .custom-switch-info.custom-switch-glow .custom-control-input:not(:disabled):checked ~ .custom-control-label::before {
        box-shadow: 0 0 8px 0 rgba(0, 207, 221, 0.8) !important;
    }

    /* Touchspin Glow */
    /* -------------- */
    .input-group.touchspin-glow .bootstrap-touchspin-down.btn-info, .input-group.touchspin-glow .bootstrap-touchspin-up.btn-info {
        box-shadow: 0 0 8px 0 rgba(0, 207, 221, 0.8);
    }

    /* Scrumboard Application - kanban-item with coloured border */
    /* --------------------------------------------------------- */
    .kanban-container .kanban-board .kanban-item[data-border=info]:before {
        background-color: #00CFDD;
    }

    .edit-kanban-item select option.bg-color_name {
        background-color: #00CFDD;
    }

    /* Select2 info */
    /* ---------------*/
    select.select-light-info ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice, select.select-light-info ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice__remove {
        background-color: #CCF5F8 !important;
        color: #00CFDD !important;
    }

    .info.darken-1 {
        color: #00b7c4 !important;
    }

    .bg-info.bg-darken-1 {
        background-color: #00b7c4 !important;
    }

    .btn-info.btn-darken-1 {
        border-color: #009faa !important;
        background-color: #00b7c4 !important;
    }

    .btn-info.btn-darken-1:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-darken-1:focus, .btn-info.btn-darken-1:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-darken-1 {
        border-color: #00b7c4 !important;
        color: #00b7c4 !important;
    }

    .btn-outline-info.btn-outline-darken-1:hover {
        background-color: #00b7c4 !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00b7c4 !important;
    }

    .border-info.border-darken-1 {
        border: 1px solid #00b7c4 !important;
    }

    .border-top-info.border-top-darken-1 {
        border-top: 1px solid #00b7c4 !important;
    }

    .border-bottom-info.border-bottom-darken-1 {
        border-bottom: 1px solid #00b7c4 !important;
    }

    .border-left-info.border-left-darken-1 {
        border-left: 1px solid #00b7c4 !important;
    }

    .border-right-info.border-right-darken-1 {
        border-right: 1px solid #00b7c4 !important;
    }

    .overlay-info.overlay-darken-1 {
        background: #00b7c4;
        background: rgba(0, 183, 196, 0.6);
    }

    .info.darken-2 {
        color: #009faa !important;
    }

    .bg-info.bg-darken-2 {
        background-color: #009faa !important;
    }

    .btn-info.btn-darken-2 {
        border-color: #009faa !important;
        background-color: #009faa !important;
    }

    .btn-info.btn-darken-2:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-darken-2:focus, .btn-info.btn-darken-2:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-darken-2 {
        border-color: #009faa !important;
        color: #009faa !important;
    }

    .btn-outline-info.btn-outline-darken-2:hover {
        background-color: #009faa !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #009faa !important;
    }

    .border-info.border-darken-2 {
        border: 1px solid #009faa !important;
    }

    .border-top-info.border-top-darken-2 {
        border-top: 1px solid #009faa !important;
    }

    .border-bottom-info.border-bottom-darken-2 {
        border-bottom: 1px solid #009faa !important;
    }

    .border-left-info.border-left-darken-2 {
        border-left: 1px solid #009faa !important;
    }

    .border-right-info.border-right-darken-2 {
        border-right: 1px solid #009faa !important;
    }

    .overlay-info.overlay-darken-2 {
        background: #009faa;
        background: rgba(0, 159, 170, 0.6);
    }

    .info.darken-3 {
        color: #008791 !important;
    }

    .bg-info.bg-darken-3 {
        background-color: #008791 !important;
    }

    .btn-info.btn-darken-3 {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-darken-3:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-darken-3:focus, .btn-info.btn-darken-3:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-darken-3 {
        border-color: #008791 !important;
        color: #008791 !important;
    }

    .btn-outline-info.btn-outline-darken-3:hover {
        background-color: #008791 !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #008791 !important;
    }

    .border-info.border-darken-3 {
        border: 1px solid #008791 !important;
    }

    .border-top-info.border-top-darken-3 {
        border-top: 1px solid #008791 !important;
    }

    .border-bottom-info.border-bottom-darken-3 {
        border-bottom: 1px solid #008791 !important;
    }

    .border-left-info.border-left-darken-3 {
        border-left: 1px solid #008791 !important;
    }

    .border-right-info.border-right-darken-3 {
        border-right: 1px solid #008791 !important;
    }

    .overlay-info.overlay-darken-3 {
        background: #008791;
        background: rgba(0, 135, 145, 0.6);
    }

    .info.darken-4 {
        color: #006f77 !important;
    }

    .bg-info.bg-darken-4 {
        background-color: #006f77 !important;
    }

    .btn-info.btn-darken-4 {
        border-color: #009faa !important;
        background-color: #006f77 !important;
    }

    .btn-info.btn-darken-4:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-darken-4:focus, .btn-info.btn-darken-4:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-darken-4 {
        border-color: #006f77 !important;
        color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-darken-4:hover {
        background-color: #006f77 !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #006f77 !important;
    }

    .border-info.border-darken-4 {
        border: 1px solid #006f77 !important;
    }

    .border-top-info.border-top-darken-4 {
        border-top: 1px solid #006f77 !important;
    }

    .border-bottom-info.border-bottom-darken-4 {
        border-bottom: 1px solid #006f77 !important;
    }

    .border-left-info.border-left-darken-4 {
        border-left: 1px solid #006f77 !important;
    }

    .border-right-info.border-right-darken-4 {
        border-right: 1px solid #006f77 !important;
    }

    .overlay-info.overlay-darken-4 {
        background: #006f77;
        background: rgba(0, 111, 119, 0.6);
    }

    .info.accent-1 {
        color: #FEFFFF !important;
    }

    .bg-info.bg-accent-1 {
        background-color: #FEFFFF !important;
    }

    .btn-info.btn-accent-1 {
        border-color: #009faa !important;
        background-color: #FEFFFF !important;
    }

    .btn-info.btn-accent-1:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-accent-1:focus, .btn-info.btn-accent-1:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-accent-1 {
        border-color: #FEFFFF !important;
        color: #FEFFFF !important;
    }

    .btn-outline-info.btn-outline-accent-1:hover {
        background-color: #FEFFFF !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FEFFFF !important;
    }

    .border-info.border-accent-1 {
        border: 1px solid #FEFFFF !important;
    }

    .border-top-info.border-top-accent-1 {
        border-top: 1px solid #FEFFFF !important;
    }

    .border-bottom-info.border-bottom-accent-1 {
        border-bottom: 1px solid #FEFFFF !important;
    }

    .border-left-info.border-left-accent-1 {
        border-left: 1px solid #FEFFFF !important;
    }

    .border-right-info.border-right-accent-1 {
        border-right: 1px solid #FEFFFF !important;
    }

    .overlay-info.overlay-accent-1 {
        background: #FEFFFF;
        background: rgba(254, 255, 255, 0.6);
    }

    .info.accent-2 {
        color: #CBF5FF !important;
    }

    .bg-info.bg-accent-2 {
        background-color: #CBF5FF !important;
    }

    .btn-info.btn-accent-2 {
        border-color: #009faa !important;
        background-color: #CBF5FF !important;
    }

    .btn-info.btn-accent-2:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-accent-2:focus, .btn-info.btn-accent-2:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-accent-2 {
        border-color: #CBF5FF !important;
        color: #CBF5FF !important;
    }

    .btn-outline-info.btn-outline-accent-2:hover {
        background-color: #CBF5FF !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #CBF5FF !important;
    }

    .border-info.border-accent-2 {
        border: 1px solid #CBF5FF !important;
    }

    .border-top-info.border-top-accent-2 {
        border-top: 1px solid #CBF5FF !important;
    }

    .border-bottom-info.border-bottom-accent-2 {
        border-bottom: 1px solid #CBF5FF !important;
    }

    .border-left-info.border-left-accent-2 {
        border-left: 1px solid #CBF5FF !important;
    }

    .border-right-info.border-right-accent-2 {
        border-right: 1px solid #CBF5FF !important;
    }

    .overlay-info.overlay-accent-2 {
        background: #CBF5FF;
        background: rgba(203, 245, 255, 0.6);
    }

    .info.accent-3 {
        color: #98ECFF !important;
    }

    .bg-info.bg-accent-3 {
        background-color: #98ECFF !important;
    }

    .btn-info.btn-accent-3 {
        border-color: #009faa !important;
        background-color: #98ECFF !important;
    }

    .btn-info.btn-accent-3:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-accent-3:focus, .btn-info.btn-accent-3:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-accent-3 {
        border-color: #98ECFF !important;
        color: #98ECFF !important;
    }

    .btn-outline-info.btn-outline-accent-3:hover {
        background-color: #98ECFF !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #98ECFF !important;
    }

    .border-info.border-accent-3 {
        border: 1px solid #98ECFF !important;
    }

    .border-top-info.border-top-accent-3 {
        border-top: 1px solid #98ECFF !important;
    }

    .border-bottom-info.border-bottom-accent-3 {
        border-bottom: 1px solid #98ECFF !important;
    }

    .border-left-info.border-left-accent-3 {
        border-left: 1px solid #98ECFF !important;
    }

    .border-right-info.border-right-accent-3 {
        border-right: 1px solid #98ECFF !important;
    }

    .overlay-info.overlay-accent-3 {
        background: #98ECFF;
        background: rgba(152, 236, 255, 0.6);
    }

    .info.accent-4 {
        color: #7FE7FF !important;
    }

    .bg-info.bg-accent-4 {
        background-color: #7FE7FF !important;
    }

    .btn-info.btn-accent-4 {
        border-color: #009faa !important;
        background-color: #7FE7FF !important;
    }

    .btn-info.btn-accent-4:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-accent-4:focus, .btn-info.btn-accent-4:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-accent-4 {
        border-color: #7FE7FF !important;
        color: #7FE7FF !important;
    }

    .btn-outline-info.btn-outline-accent-4:hover {
        background-color: #7FE7FF !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #7FE7FF !important;
    }

    .border-info.border-accent-4 {
        border: 1px solid #7FE7FF !important;
    }

    .border-top-info.border-top-accent-4 {
        border-top: 1px solid #7FE7FF !important;
    }

    .border-bottom-info.border-bottom-accent-4 {
        border-bottom: 1px solid #7FE7FF !important;
    }

    .border-left-info.border-left-accent-4 {
        border-left: 1px solid #7FE7FF !important;
    }

    .border-right-info.border-right-accent-4 {
        border-right: 1px solid #7FE7FF !important;
    }

    .overlay-info.overlay-accent-4 {
        background: #7FE7FF;
        background: rgba(127, 231, 255, 0.6);
    }

    .info.light {
        color: #CCF5F8 !important;
    }

    .bg-info.bg-light {
        background-color: #CCF5F8 !important;
    }

    .btn-info.btn-light {
        border-color: #009faa !important;
        background-color: #CCF5F8 !important;
    }

    .btn-info.btn-light:hover {
        border-color: #009faa !important;
        background-color: #008791 !important;
    }

    .btn-info.btn-light:focus, .btn-info.btn-light:active {
        border-color: #008791 !important;
        background-color: #006f77 !important;
    }

    .btn-outline-info.btn-outline-light {
        border-color: #CCF5F8 !important;
        color: #CCF5F8 !important;
    }

    .btn-outline-info.btn-outline-light:hover {
        background-color: #CCF5F8 !important;
    }

    input:focus ~ .bg-info {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #CCF5F8 !important;
    }

    .border-info.border-light {
        border: 1px solid #CCF5F8 !important;
    }

    .border-top-info.border-top-light {
        border-top: 1px solid #CCF5F8 !important;
    }

    .border-bottom-info.border-bottom-light {
        border-bottom: 1px solid #CCF5F8 !important;
    }

    .border-left-info.border-left-light {
        border-left: 1px solid #CCF5F8 !important;
    }

    .border-right-info.border-right-light {
        border-right: 1px solid #CCF5F8 !important;
    }

    .overlay-info.overlay-light {
        background: #CCF5F8;
        background: rgba(204, 245, 248, 0.6);
    }

    .warning.lighten-5 {
        color: #fee3bf !important;
    }

    .bg-warning.bg-lighten-5 {
        background-color: #fee3bf !important;
    }

    .btn-warning.btn-lighten-5 {
        border-color: #fc960f !important;
        background-color: #fee3bf !important;
    }

    .btn-warning.btn-lighten-5:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-lighten-5:focus, .btn-warning.btn-lighten-5:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-lighten-5 {
        border-color: #fee3bf !important;
        color: #fee3bf !important;
    }

    .btn-outline-warning.btn-outline-lighten-5:hover {
        background-color: #fee3bf !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fee3bf !important;
    }

    .border-warning.border-lighten-5 {
        border: 1px solid #fee3bf !important;
    }

    .border-top-warning.border-top-lighten-5 {
        border-top: 1px solid #fee3bf !important;
    }

    .border-bottom-warning.border-bottom-lighten-5 {
        border-bottom: 1px solid #fee3bf !important;
    }

    .border-left-warning.border-left-lighten-5 {
        border-left: 1px solid #fee3bf !important;
    }

    .border-right-warning.border-right-lighten-5 {
        border-right: 1px solid #fee3bf !important;
    }

    .overlay-warning.overlay-lighten-5 {
        background: #fee3bf;
        background: rgba(254, 227, 191, 0.6);
    }

    .warning.lighten-4 {
        color: #fed8a6 !important;
    }

    .bg-warning.bg-lighten-4 {
        background-color: #fed8a6 !important;
    }

    .btn-warning.btn-lighten-4 {
        border-color: #fc960f !important;
        background-color: #fed8a6 !important;
    }

    .btn-warning.btn-lighten-4:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-lighten-4:focus, .btn-warning.btn-lighten-4:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-lighten-4 {
        border-color: #fed8a6 !important;
        color: #fed8a6 !important;
    }

    .btn-outline-warning.btn-outline-lighten-4:hover {
        background-color: #fed8a6 !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fed8a6 !important;
    }

    .border-warning.border-lighten-4 {
        border: 1px solid #fed8a6 !important;
    }

    .border-top-warning.border-top-lighten-4 {
        border-top: 1px solid #fed8a6 !important;
    }

    .border-bottom-warning.border-bottom-lighten-4 {
        border-bottom: 1px solid #fed8a6 !important;
    }

    .border-left-warning.border-left-lighten-4 {
        border-left: 1px solid #fed8a6 !important;
    }

    .border-right-warning.border-right-lighten-4 {
        border-right: 1px solid #fed8a6 !important;
    }

    .overlay-warning.overlay-lighten-4 {
        background: #fed8a6;
        background: rgba(254, 216, 166, 0.6);
    }

    .warning.lighten-3 {
        color: #fecd8d !important;
    }

    .bg-warning.bg-lighten-3 {
        background-color: #fecd8d !important;
    }

    .btn-warning.btn-lighten-3 {
        border-color: #fc960f !important;
        background-color: #fecd8d !important;
    }

    .btn-warning.btn-lighten-3:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-lighten-3:focus, .btn-warning.btn-lighten-3:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-lighten-3 {
        border-color: #fecd8d !important;
        color: #fecd8d !important;
    }

    .btn-outline-warning.btn-outline-lighten-3:hover {
        background-color: #fecd8d !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fecd8d !important;
    }

    .border-warning.border-lighten-3 {
        border: 1px solid #fecd8d !important;
    }

    .border-top-warning.border-top-lighten-3 {
        border-top: 1px solid #fecd8d !important;
    }

    .border-bottom-warning.border-bottom-lighten-3 {
        border-bottom: 1px solid #fecd8d !important;
    }

    .border-left-warning.border-left-lighten-3 {
        border-left: 1px solid #fecd8d !important;
    }

    .border-right-warning.border-right-lighten-3 {
        border-right: 1px solid #fecd8d !important;
    }

    .overlay-warning.overlay-lighten-3 {
        background: #fecd8d;
        background: rgba(254, 205, 141, 0.6);
    }

    .warning.lighten-2 {
        color: #fec273 !important;
    }

    .bg-warning.bg-lighten-2 {
        background-color: #fec273 !important;
    }

    .btn-warning.btn-lighten-2 {
        border-color: #fc960f !important;
        background-color: #fec273 !important;
    }

    .btn-warning.btn-lighten-2:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-lighten-2:focus, .btn-warning.btn-lighten-2:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-lighten-2 {
        border-color: #fec273 !important;
        color: #fec273 !important;
    }

    .btn-outline-warning.btn-outline-lighten-2:hover {
        background-color: #fec273 !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fec273 !important;
    }

    .border-warning.border-lighten-2 {
        border: 1px solid #fec273 !important;
    }

    .border-top-warning.border-top-lighten-2 {
        border-top: 1px solid #fec273 !important;
    }

    .border-bottom-warning.border-bottom-lighten-2 {
        border-bottom: 1px solid #fec273 !important;
    }

    .border-left-warning.border-left-lighten-2 {
        border-left: 1px solid #fec273 !important;
    }

    .border-right-warning.border-right-lighten-2 {
        border-right: 1px solid #fec273 !important;
    }

    .overlay-warning.overlay-lighten-2 {
        background: #fec273;
        background: rgba(254, 194, 115, 0.6);
    }

    .warning.lighten-1 {
        color: #fdb75a !important;
    }

    .bg-warning.bg-lighten-1 {
        background-color: #fdb75a !important;
    }

    .btn-warning.btn-lighten-1 {
        border-color: #fc960f !important;
        background-color: #fdb75a !important;
    }

    .btn-warning.btn-lighten-1:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-lighten-1:focus, .btn-warning.btn-lighten-1:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-lighten-1 {
        border-color: #fdb75a !important;
        color: #fdb75a !important;
    }

    .btn-outline-warning.btn-outline-lighten-1:hover {
        background-color: #fdb75a !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fdb75a !important;
    }

    .border-warning.border-lighten-1 {
        border: 1px solid #fdb75a !important;
    }

    .border-top-warning.border-top-lighten-1 {
        border-top: 1px solid #fdb75a !important;
    }

    .border-bottom-warning.border-bottom-lighten-1 {
        border-bottom: 1px solid #fdb75a !important;
    }

    .border-left-warning.border-left-lighten-1 {
        border-left: 1px solid #fdb75a !important;
    }

    .border-right-warning.border-right-lighten-1 {
        border-right: 1px solid #fdb75a !important;
    }

    .overlay-warning.overlay-lighten-1 {
        background: #fdb75a;
        background: rgba(253, 183, 90, 0.6);
    }

    /* warning Color Style */
    /* ----------------------- */
    /* Text color */
    /* ---------- */
    .warning {
        color: #FDAC41 !important;
    }

    /* text with light warning */
    .text-light-warning {
        color: rgba(253, 172, 65, 0.2) !important;
    }

    /* Background color */
    /* ---------------- */
    .bg-warning {
        background-color: #FDAC41 !important;
    }

    .bg-warning .card-header,
    .bg-warning .card-footer {
        background-color: transparent;
    }

    /* bg color lighten for rgba - opacity set */
    .bg-rgba-warning {
        background: rgba(253, 172, 65, 0.2) !important;
    }

    .bg-rgba-warning.alert {
        color: #FDAC41;
    }

    .bg-rgba-warning.alert.alert-dismissible .close {
        color: #FDAC41;
    }

    /* Alert warning */
    /* ---------------- */
    .alert.alert-warning {
        background: #FDAC41 !important;
        color: #fff !important;
        box-shadow: 0 3px 8px 0 rgba(253, 172, 65, 0.4);
        border: none;
    }

    /* Border warning */
    /* ---------------- */
    .border-warning {
        border: 1px solid #FDAC41 !important;
    }

    .border-warning .select2-selection__arrow b {
        border-color: #fc960f !important;
    }

    .border-warning.alert {
        color: #FDAC41;
    }

    .border-warning.alert.alert-dismissible .close {
        color: #FDAC41;
    }

    .border-top-warning {
        border-top: 1px solid #FDAC41;
    }

    .border-bottom-warning {
        border-bottom: 1px solid #FDAC41;
    }

    .border-left-warning {
        border-left: 1px solid #FDAC41;
    }

    .border-right-warning {
        border-right: 1px solid #FDAC41;
    }

    /* Navbar icon stroke color according to bg color */
    .header-navbar.bg-warning .navbar-nav .nav-item > a i {
        -webkit-text-stroke: 0.2px #FDAC41 !important;
    }

    /* Badges */
    /* ------ */
    .badge.badge-warning {
        background-color: #FDAC41;
    }

    .badge.badge-light-warning {
        background-color: #FFEED9;
        color: #FDAC41 !important;
    }

    .badge.bg-warning.badge-glow, .badge.border-warning.badge-glow, .badge.badge-warning.badge-glow {
        box-shadow: 0px 0px 10px #FDAC41;
    }

    .badge-circle-warning {
        background-color: #FDAC41;
    }

    .badge-circle-light-warning {
        background-color: #FFEED9;
        color: #FDAC41;
    }

    .overlay-warning {
        background: #FDAC41;
        background: rgba(253, 172, 65, 0.6);
    }

    /* Basic buttons */
    /* ------------- */
    .btn-warning {
        border-color: #fc960f !important;
        background-color: #FDAC41 !important;
        color: #fff;
    }

    .btn-warning:hover, .btn-warning.hover {
        background-color: #fdb75a !important;
        color: #fff;
    }

    .btn-warning:hover.glow, .btn-warning.hover.glow {
        box-shadow: 0 4px 12px 0 rgba(253, 172, 65, 0.6) !important;
    }

    .btn-warning:focus, .btn-warning:active, .btn-warning.active {
        background-color: #fda128 !important;
        color: #fff !important;
    }

    .btn-warning.glow {
        box-shadow: 0 2px 4px 0 rgba(253, 172, 65, 0.5) !important;
    }

    .btn-warning:disabled, .btn-warning.disabled {
        color: #fff !important;
    }

    .btn-light-warning {
        background-color: #FFEED9;
        color: #FDAC41 !important;
    }

    .btn-light-warning:hover, .btn-light-warning.hover {
        background-color: #fdb75a !important;
        color: #fff !important;
    }

    .btn-light-warning:active, .btn-light-warning.active {
        background-color: #fda128 !important;
        color: #fff !important;
    }

    /* Outline buttons */
    .btn-outline-warning {
        border: 1px solid #FDAC41;
        background-color: transparent;
        color: #FDAC41 !important;
    }

    .btn-outline-warning:hover, .btn-outline-warning.hover {
        background-color: #fdb75a !important;
        color: #fff !important;
    }

    .btn-outline-warning:active, .btn-outline-warning.active {
        background-color: #fda128 !important;
        color: #fff !important;
    }

    /* Dropdowns */
    /* --------- */
    .btn-warning ~ .dropdown-menu .dropdown-item.active, .btn-outline-warning ~ .dropdown-menu .dropdown-item.active {
        background-color: #FDAC41;
        color: #fff;
    }

    .btn-warning ~ .dropdown-menu .dropdown-item.active:hover, .btn-outline-warning ~ .dropdown-menu .dropdown-item.active:hover {
        color: #fff;
    }

    .dropdown.dropdown-icon-wrapper .btn-warning ~ .dropdown-menu .dropdown-item:hover i, .dropdown.dropdown-icon-wrapper .btn-outline-warning ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-warning ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-outline-warning ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-warning ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-outline-warning ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-warning ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-outline-warning ~ .dropdown-menu .dropdown-item:hover i {
        color: #FDAC41;
    }

    .dropdown.dropdown-icon-wrapper .btn-warning ~ .dropdown-menu .dropdown-item:active i, .dropdown.dropdown-icon-wrapper .btn-outline-warning ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-warning ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-outline-warning ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-warning ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-outline-warning ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-warning ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-outline-warning ~ .dropdown-menu .dropdown-item:active i {
        color: #fff;
    }

    /* Bullet warning */
    .bullet.bullet-warning {
        background-color: #FDAC41;
    }

    /* For Pagination */
    /* -------------- */
    .pagination-warning .page-item.active .page-link, .pagination-warning .page-item.active .page-link:hover {
        background: #FDAC41 !important;
        color: #fff;
    }

    .pagination-warning .page-item .page-link:hover {
        background-color: #FFEED9 !important;
    }

    .pagination-warning .page-item.previous .page-link, .pagination-warning .page-item.next .page-link {
        color: #FDAC41;
    }

    .pagination-warning .page-item.previous .page-link:hover, .pagination-warning .page-item.next .page-link:hover {
        background: #FDAC41;
    }

    /* Progress Bars warning */
    /* ---------------------- */
    .progress-bar-warning .progress-bar {
        background-color: #FDAC41;
        box-shadow: 0 2px 6px 0 rgba(253, 172, 65, 0.6);
    }

    /* Chips warning */
    /* ---------------- */
    .chip-warning {
        background-color: #FDAC41 !important;
    }

    .chip-warning .chip-body {
        color: #fff !important;
    }

    /* Divider warning */
    /* ---------------*/
    .divider.divider-warning .divider-text:before, .divider.divider-warning .divider-text:after {
        border-color: #FDAC41 !important;
    }

    /* timeline */
    .widget-timeline li.timeline-items.timeline-icon-warning:before {
        background: #FDAC41 !important;
    }

    /* Custom Checkbox & Radio - Colored */
    /* --------------------------------- */
    input[type="checkbox"].bg-warning + .custom-control-label:before, input[type="radio"].bg-warning + .custom-control-label:before {
        background-color: #FDAC41 !important;
        border-color: #fc960f !important;
    }

    .checkbox.checkbox-warning input:checked ~ label::before, .checkbox.radio-warning input:checked ~ label::before, .radio.checkbox-warning input:checked ~ label::before, .radio.radio-warning input:checked ~ label::before {
        background-color: #FDAC41;
        border-color: #FDAC41;
    }

    .checkbox.checkbox-warning input:checked ~ label::after, .checkbox.radio-warning input:checked ~ label::after, .radio.checkbox-warning input:checked ~ label::after, .radio.radio-warning input:checked ~ label::after {
        border-color: #fff;
    }

    .checkbox.checkbox-warning.checkbox-glow input:checked ~ label::before, .checkbox.checkbox-warning.radio-glow input:checked ~ label::before, .checkbox.radio-warning.checkbox-glow input:checked ~ label::before, .checkbox.radio-warning.radio-glow input:checked ~ label::before, .radio.checkbox-warning.checkbox-glow input:checked ~ label::before, .radio.checkbox-warning.radio-glow input:checked ~ label::before, .radio.radio-warning.checkbox-glow input:checked ~ label::before, .radio.radio-warning.radio-glow input:checked ~ label::before {
        box-shadow: 0 0 6px 0 rgba(253, 172, 65, 0.7);
    }

    .checkbox.checkbox-warning.checkbox-icon label i, .checkbox.radio-warning.checkbox-icon label i, .radio.checkbox-warning.checkbox-icon label i, .radio.radio-warning.checkbox-icon label i {
        color: #fff;
    }

    .checkbox.checkbox-warning label:after {
        transition: 250ms ease-in-out;
    }

    .radio.radio-warning input:checked ~ label::after {
        background-color: #fff;
        transition: all 0.15s cubic-bezier(0.35, 0.9, 0.4, 0.9);
    }

    /* Bootstrap Custom Switches */
    /* ------------------------- */
    .custom-switch-warning .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #FDAC41 !important;
        color: #fff;
        transition: all .2s ease-out;
    }

    .custom-switch-warning.custom-switch-glow .custom-control-input:not(:disabled):checked ~ .custom-control-label::before {
        box-shadow: 0 0 8px 0 rgba(253, 172, 65, 0.8) !important;
    }

    /* Touchspin Glow */
    /* -------------- */
    .input-group.touchspin-glow .bootstrap-touchspin-down.btn-warning, .input-group.touchspin-glow .bootstrap-touchspin-up.btn-warning {
        box-shadow: 0 0 8px 0 rgba(253, 172, 65, 0.8);
    }

    /* Scrumboard Application - kanban-item with coloured border */
    /* --------------------------------------------------------- */
    .kanban-container .kanban-board .kanban-item[data-border=warning]:before {
        background-color: #FDAC41;
    }

    .edit-kanban-item select option.bg-color_name {
        background-color: #FDAC41;
    }

    /* Select2 warning */
    /* ---------------*/
    select.select-light-warning ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice, select.select-light-warning ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice__remove {
        background-color: #FFEED9 !important;
        color: #FDAC41 !important;
    }

    .warning.darken-1 {
        color: #fda128 !important;
    }

    .bg-warning.bg-darken-1 {
        background-color: #fda128 !important;
    }

    .btn-warning.btn-darken-1 {
        border-color: #fc960f !important;
        background-color: #fda128 !important;
    }

    .btn-warning.btn-darken-1:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-darken-1:focus, .btn-warning.btn-darken-1:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-darken-1 {
        border-color: #fda128 !important;
        color: #fda128 !important;
    }

    .btn-outline-warning.btn-outline-darken-1:hover {
        background-color: #fda128 !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fda128 !important;
    }

    .border-warning.border-darken-1 {
        border: 1px solid #fda128 !important;
    }

    .border-top-warning.border-top-darken-1 {
        border-top: 1px solid #fda128 !important;
    }

    .border-bottom-warning.border-bottom-darken-1 {
        border-bottom: 1px solid #fda128 !important;
    }

    .border-left-warning.border-left-darken-1 {
        border-left: 1px solid #fda128 !important;
    }

    .border-right-warning.border-right-darken-1 {
        border-right: 1px solid #fda128 !important;
    }

    .overlay-warning.overlay-darken-1 {
        background: #fda128;
        background: rgba(253, 161, 40, 0.6);
    }

    .warning.darken-2 {
        color: #fc960f !important;
    }

    .bg-warning.bg-darken-2 {
        background-color: #fc960f !important;
    }

    .btn-warning.btn-darken-2 {
        border-color: #fc960f !important;
        background-color: #fc960f !important;
    }

    .btn-warning.btn-darken-2:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-darken-2:focus, .btn-warning.btn-darken-2:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-darken-2 {
        border-color: #fc960f !important;
        color: #fc960f !important;
    }

    .btn-outline-warning.btn-outline-darken-2:hover {
        background-color: #fc960f !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fc960f !important;
    }

    .border-warning.border-darken-2 {
        border: 1px solid #fc960f !important;
    }

    .border-top-warning.border-top-darken-2 {
        border-top: 1px solid #fc960f !important;
    }

    .border-bottom-warning.border-bottom-darken-2 {
        border-bottom: 1px solid #fc960f !important;
    }

    .border-left-warning.border-left-darken-2 {
        border-left: 1px solid #fc960f !important;
    }

    .border-right-warning.border-right-darken-2 {
        border-right: 1px solid #fc960f !important;
    }

    .overlay-warning.overlay-darken-2 {
        background: #fc960f;
        background: rgba(252, 150, 15, 0.6);
    }

    .warning.darken-3 {
        color: #ef8903 !important;
    }

    .bg-warning.bg-darken-3 {
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-darken-3 {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-darken-3:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-darken-3:focus, .btn-warning.btn-darken-3:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-darken-3 {
        border-color: #ef8903 !important;
        color: #ef8903 !important;
    }

    .btn-outline-warning.btn-outline-darken-3:hover {
        background-color: #ef8903 !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ef8903 !important;
    }

    .border-warning.border-darken-3 {
        border: 1px solid #ef8903 !important;
    }

    .border-top-warning.border-top-darken-3 {
        border-top: 1px solid #ef8903 !important;
    }

    .border-bottom-warning.border-bottom-darken-3 {
        border-bottom: 1px solid #ef8903 !important;
    }

    .border-left-warning.border-left-darken-3 {
        border-left: 1px solid #ef8903 !important;
    }

    .border-right-warning.border-right-darken-3 {
        border-right: 1px solid #ef8903 !important;
    }

    .overlay-warning.overlay-darken-3 {
        background: #ef8903;
        background: rgba(239, 137, 3, 0.6);
    }

    .warning.darken-4 {
        color: #d67b02 !important;
    }

    .bg-warning.bg-darken-4 {
        background-color: #d67b02 !important;
    }

    .btn-warning.btn-darken-4 {
        border-color: #fc960f !important;
        background-color: #d67b02 !important;
    }

    .btn-warning.btn-darken-4:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-darken-4:focus, .btn-warning.btn-darken-4:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-darken-4 {
        border-color: #d67b02 !important;
        color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-darken-4:hover {
        background-color: #d67b02 !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #d67b02 !important;
    }

    .border-warning.border-darken-4 {
        border: 1px solid #d67b02 !important;
    }

    .border-top-warning.border-top-darken-4 {
        border-top: 1px solid #d67b02 !important;
    }

    .border-bottom-warning.border-bottom-darken-4 {
        border-bottom: 1px solid #d67b02 !important;
    }

    .border-left-warning.border-left-darken-4 {
        border-left: 1px solid #d67b02 !important;
    }

    .border-right-warning.border-right-darken-4 {
        border-right: 1px solid #d67b02 !important;
    }

    .overlay-warning.overlay-darken-4 {
        background: #d67b02;
        background: rgba(214, 123, 2, 0.6);
    }

    .warning.accent-1 {
        color: #FFF5EF !important;
    }

    .bg-warning.bg-accent-1 {
        background-color: #FFF5EF !important;
    }

    .btn-warning.btn-accent-1 {
        border-color: #fc960f !important;
        background-color: #FFF5EF !important;
    }

    .btn-warning.btn-accent-1:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-accent-1:focus, .btn-warning.btn-accent-1:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-accent-1 {
        border-color: #FFF5EF !important;
        color: #FFF5EF !important;
    }

    .btn-outline-warning.btn-outline-accent-1:hover {
        background-color: #FFF5EF !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFF5EF !important;
    }

    .border-warning.border-accent-1 {
        border: 1px solid #FFF5EF !important;
    }

    .border-top-warning.border-top-accent-1 {
        border-top: 1px solid #FFF5EF !important;
    }

    .border-bottom-warning.border-bottom-accent-1 {
        border-bottom: 1px solid #FFF5EF !important;
    }

    .border-left-warning.border-left-accent-1 {
        border-left: 1px solid #FFF5EF !important;
    }

    .border-right-warning.border-right-accent-1 {
        border-right: 1px solid #FFF5EF !important;
    }

    .overlay-warning.overlay-accent-1 {
        background: #FFF5EF;
        background: rgba(255, 245, 239, 0.6);
    }

    .warning.accent-2 {
        color: #FFE5D8 !important;
    }

    .bg-warning.bg-accent-2 {
        background-color: #FFE5D8 !important;
    }

    .btn-warning.btn-accent-2 {
        border-color: #fc960f !important;
        background-color: #FFE5D8 !important;
    }

    .btn-warning.btn-accent-2:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-accent-2:focus, .btn-warning.btn-accent-2:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-accent-2 {
        border-color: #FFE5D8 !important;
        color: #FFE5D8 !important;
    }

    .btn-outline-warning.btn-outline-accent-2:hover {
        background-color: #FFE5D8 !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFE5D8 !important;
    }

    .border-warning.border-accent-2 {
        border: 1px solid #FFE5D8 !important;
    }

    .border-top-warning.border-top-accent-2 {
        border-top: 1px solid #FFE5D8 !important;
    }

    .border-bottom-warning.border-bottom-accent-2 {
        border-bottom: 1px solid #FFE5D8 !important;
    }

    .border-left-warning.border-left-accent-2 {
        border-left: 1px solid #FFE5D8 !important;
    }

    .border-right-warning.border-right-accent-2 {
        border-right: 1px solid #FFE5D8 !important;
    }

    .overlay-warning.overlay-accent-2 {
        background: #FFE5D8;
        background: rgba(255, 229, 216, 0.6);
    }

    .warning.accent-3 {
        color: #FFF6F3 !important;
    }

    .bg-warning.bg-accent-3 {
        background-color: #FFF6F3 !important;
    }

    .btn-warning.btn-accent-3 {
        border-color: #fc960f !important;
        background-color: #FFF6F3 !important;
    }

    .btn-warning.btn-accent-3:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-accent-3:focus, .btn-warning.btn-accent-3:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-accent-3 {
        border-color: #FFF6F3 !important;
        color: #FFF6F3 !important;
    }

    .btn-outline-warning.btn-outline-accent-3:hover {
        background-color: #FFF6F3 !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFF6F3 !important;
    }

    .border-warning.border-accent-3 {
        border: 1px solid #FFF6F3 !important;
    }

    .border-top-warning.border-top-accent-3 {
        border-top: 1px solid #FFF6F3 !important;
    }

    .border-bottom-warning.border-bottom-accent-3 {
        border-bottom: 1px solid #FFF6F3 !important;
    }

    .border-left-warning.border-left-accent-3 {
        border-left: 1px solid #FFF6F3 !important;
    }

    .border-right-warning.border-right-accent-3 {
        border-right: 1px solid #FFF6F3 !important;
    }

    .overlay-warning.overlay-accent-3 {
        background: #FFF6F3;
        background: rgba(255, 246, 243, 0.6);
    }

    .warning.accent-4 {
        color: #FFE3DA !important;
    }

    .bg-warning.bg-accent-4 {
        background-color: #FFE3DA !important;
    }

    .btn-warning.btn-accent-4 {
        border-color: #fc960f !important;
        background-color: #FFE3DA !important;
    }

    .btn-warning.btn-accent-4:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-accent-4:focus, .btn-warning.btn-accent-4:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-accent-4 {
        border-color: #FFE3DA !important;
        color: #FFE3DA !important;
    }

    .btn-outline-warning.btn-outline-accent-4:hover {
        background-color: #FFE3DA !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFE3DA !important;
    }

    .border-warning.border-accent-4 {
        border: 1px solid #FFE3DA !important;
    }

    .border-top-warning.border-top-accent-4 {
        border-top: 1px solid #FFE3DA !important;
    }

    .border-bottom-warning.border-bottom-accent-4 {
        border-bottom: 1px solid #FFE3DA !important;
    }

    .border-left-warning.border-left-accent-4 {
        border-left: 1px solid #FFE3DA !important;
    }

    .border-right-warning.border-right-accent-4 {
        border-right: 1px solid #FFE3DA !important;
    }

    .overlay-warning.overlay-accent-4 {
        background: #FFE3DA;
        background: rgba(255, 227, 218, 0.6);
    }

    .warning.light {
        color: #FFEED9 !important;
    }

    .bg-warning.bg-light {
        background-color: #FFEED9 !important;
    }

    .btn-warning.btn-light {
        border-color: #fc960f !important;
        background-color: #FFEED9 !important;
    }

    .btn-warning.btn-light:hover {
        border-color: #fc960f !important;
        background-color: #ef8903 !important;
    }

    .btn-warning.btn-light:focus, .btn-warning.btn-light:active {
        border-color: #ef8903 !important;
        background-color: #d67b02 !important;
    }

    .btn-outline-warning.btn-outline-light {
        border-color: #FFEED9 !important;
        color: #FFEED9 !important;
    }

    .btn-outline-warning.btn-outline-light:hover {
        background-color: #FFEED9 !important;
    }

    input:focus ~ .bg-warning {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFEED9 !important;
    }

    .border-warning.border-light {
        border: 1px solid #FFEED9 !important;
    }

    .border-top-warning.border-top-light {
        border-top: 1px solid #FFEED9 !important;
    }

    .border-bottom-warning.border-bottom-light {
        border-bottom: 1px solid #FFEED9 !important;
    }

    .border-left-warning.border-left-light {
        border-left: 1px solid #FFEED9 !important;
    }

    .border-right-warning.border-right-light {
        border-right: 1px solid #FFEED9 !important;
    }

    .overlay-warning.overlay-light {
        background: #FFEED9;
        background: rgba(255, 238, 217, 0.6);
    }

    .danger.lighten-5 {
        color: #ffdbdb !important;
    }

    .bg-danger.bg-lighten-5 {
        background-color: #ffdbdb !important;
    }

    .btn-danger.btn-lighten-5 {
        border-color: #ff2829 !important;
        background-color: #ffdbdb !important;
    }

    .btn-danger.btn-lighten-5:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-lighten-5:focus, .btn-danger.btn-lighten-5:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-lighten-5 {
        border-color: #ffdbdb !important;
        color: #ffdbdb !important;
    }

    .btn-outline-danger.btn-outline-lighten-5:hover {
        background-color: #ffdbdb !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffdbdb !important;
    }

    .border-danger.border-lighten-5 {
        border: 1px solid #ffdbdb !important;
    }

    .border-top-danger.border-top-lighten-5 {
        border-top: 1px solid #ffdbdb !important;
    }

    .border-bottom-danger.border-bottom-lighten-5 {
        border-bottom: 1px solid #ffdbdb !important;
    }

    .border-left-danger.border-left-lighten-5 {
        border-left: 1px solid #ffdbdb !important;
    }

    .border-right-danger.border-right-lighten-5 {
        border-right: 1px solid #ffdbdb !important;
    }

    .overlay-danger.overlay-lighten-5 {
        background: #ffdbdb;
        background: rgba(255, 219, 219, 0.6);
    }

    .danger.lighten-4 {
        color: #ffc1c1 !important;
    }

    .bg-danger.bg-lighten-4 {
        background-color: #ffc1c1 !important;
    }

    .btn-danger.btn-lighten-4 {
        border-color: #ff2829 !important;
        background-color: #ffc1c1 !important;
    }

    .btn-danger.btn-lighten-4:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-lighten-4:focus, .btn-danger.btn-lighten-4:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-lighten-4 {
        border-color: #ffc1c1 !important;
        color: #ffc1c1 !important;
    }

    .btn-outline-danger.btn-outline-lighten-4:hover {
        background-color: #ffc1c1 !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffc1c1 !important;
    }

    .border-danger.border-lighten-4 {
        border: 1px solid #ffc1c1 !important;
    }

    .border-top-danger.border-top-lighten-4 {
        border-top: 1px solid #ffc1c1 !important;
    }

    .border-bottom-danger.border-bottom-lighten-4 {
        border-bottom: 1px solid #ffc1c1 !important;
    }

    .border-left-danger.border-left-lighten-4 {
        border-left: 1px solid #ffc1c1 !important;
    }

    .border-right-danger.border-right-lighten-4 {
        border-right: 1px solid #ffc1c1 !important;
    }

    .overlay-danger.overlay-lighten-4 {
        background: #ffc1c1;
        background: rgba(255, 193, 193, 0.6);
    }

    .danger.lighten-3 {
        color: #ffa8a8 !important;
    }

    .bg-danger.bg-lighten-3 {
        background-color: #ffa8a8 !important;
    }

    .btn-danger.btn-lighten-3 {
        border-color: #ff2829 !important;
        background-color: #ffa8a8 !important;
    }

    .btn-danger.btn-lighten-3:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-lighten-3:focus, .btn-danger.btn-lighten-3:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-lighten-3 {
        border-color: #ffa8a8 !important;
        color: #ffa8a8 !important;
    }

    .btn-outline-danger.btn-outline-lighten-3:hover {
        background-color: #ffa8a8 !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffa8a8 !important;
    }

    .border-danger.border-lighten-3 {
        border: 1px solid #ffa8a8 !important;
    }

    .border-top-danger.border-top-lighten-3 {
        border-top: 1px solid #ffa8a8 !important;
    }

    .border-bottom-danger.border-bottom-lighten-3 {
        border-bottom: 1px solid #ffa8a8 !important;
    }

    .border-left-danger.border-left-lighten-3 {
        border-left: 1px solid #ffa8a8 !important;
    }

    .border-right-danger.border-right-lighten-3 {
        border-right: 1px solid #ffa8a8 !important;
    }

    .overlay-danger.overlay-lighten-3 {
        background: #ffa8a8;
        background: rgba(255, 168, 168, 0.6);
    }

    .danger.lighten-2 {
        color: #ff8e8f !important;
    }

    .bg-danger.bg-lighten-2 {
        background-color: #ff8e8f !important;
    }

    .btn-danger.btn-lighten-2 {
        border-color: #ff2829 !important;
        background-color: #ff8e8f !important;
    }

    .btn-danger.btn-lighten-2:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-lighten-2:focus, .btn-danger.btn-lighten-2:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-lighten-2 {
        border-color: #ff8e8f !important;
        color: #ff8e8f !important;
    }

    .btn-outline-danger.btn-outline-lighten-2:hover {
        background-color: #ff8e8f !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff8e8f !important;
    }

    .border-danger.border-lighten-2 {
        border: 1px solid #ff8e8f !important;
    }

    .border-top-danger.border-top-lighten-2 {
        border-top: 1px solid #ff8e8f !important;
    }

    .border-bottom-danger.border-bottom-lighten-2 {
        border-bottom: 1px solid #ff8e8f !important;
    }

    .border-left-danger.border-left-lighten-2 {
        border-left: 1px solid #ff8e8f !important;
    }

    .border-right-danger.border-right-lighten-2 {
        border-right: 1px solid #ff8e8f !important;
    }

    .overlay-danger.overlay-lighten-2 {
        background: #ff8e8f;
        background: rgba(255, 142, 143, 0.6);
    }

    .danger.lighten-1 {
        color: #ff7575 !important;
    }

    .bg-danger.bg-lighten-1 {
        background-color: #ff7575 !important;
    }

    .btn-danger.btn-lighten-1 {
        border-color: #ff2829 !important;
        background-color: #ff7575 !important;
    }

    .btn-danger.btn-lighten-1:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-lighten-1:focus, .btn-danger.btn-lighten-1:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-lighten-1 {
        border-color: #ff7575 !important;
        color: #ff7575 !important;
    }

    .btn-outline-danger.btn-outline-lighten-1:hover {
        background-color: #ff7575 !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff7575 !important;
    }

    .border-danger.border-lighten-1 {
        border: 1px solid #ff7575 !important;
    }

    .border-top-danger.border-top-lighten-1 {
        border-top: 1px solid #ff7575 !important;
    }

    .border-bottom-danger.border-bottom-lighten-1 {
        border-bottom: 1px solid #ff7575 !important;
    }

    .border-left-danger.border-left-lighten-1 {
        border-left: 1px solid #ff7575 !important;
    }

    .border-right-danger.border-right-lighten-1 {
        border-right: 1px solid #ff7575 !important;
    }

    .overlay-danger.overlay-lighten-1 {
        background: #ff7575;
        background: rgba(255, 117, 117, 0.6);
    }

    /* danger Color Style */
    /* ----------------------- */
    /* Text color */
    /* ---------- */
    .danger {
        color: #FF5B5C !important;
    }

    /* text with light danger */
    .text-light-danger {
        color: rgba(255, 91, 92, 0.2) !important;
    }

    /* Background color */
    /* ---------------- */
    .bg-danger {
        background-color: #FF5B5C !important;
    }

    .bg-danger .card-header,
    .bg-danger .card-footer {
        background-color: transparent;
    }

    /* bg color lighten for rgba - opacity set */
    .bg-rgba-danger {
        background: rgba(255, 91, 92, 0.2) !important;
    }

    .bg-rgba-danger.alert {
        color: #FF5B5C;
    }

    .bg-rgba-danger.alert.alert-dismissible .close {
        color: #FF5B5C;
    }

    /* Alert danger */
    /* ---------------- */
    .alert.alert-danger {
        background: #FF5B5C !important;
        color: #fff !important;
        box-shadow: 0 3px 8px 0 rgba(255, 91, 92, 0.4);
        border: none;
    }

    /* Border danger */
    /* ---------------- */
    .border-danger {
        border: 1px solid #FF5B5C !important;
    }

    .border-danger .select2-selection__arrow b {
        border-color: #ff2829 !important;
    }

    .border-danger.alert {
        color: #FF5B5C;
    }

    .border-danger.alert.alert-dismissible .close {
        color: #FF5B5C;
    }

    .border-top-danger {
        border-top: 1px solid #FF5B5C;
    }

    .border-bottom-danger {
        border-bottom: 1px solid #FF5B5C;
    }

    .border-left-danger {
        border-left: 1px solid #FF5B5C;
    }

    .border-right-danger {
        border-right: 1px solid #FF5B5C;
    }

    /* Navbar icon stroke color according to bg color */
    .header-navbar.bg-danger .navbar-nav .nav-item > a i {
        -webkit-text-stroke: 0.2px #FF5B5C !important;
    }

    /* Badges */
    /* ------ */
    .badge.badge-danger {
        background-color: #FF5B5C;
    }

    .badge.badge-light-danger {
        background-color: #FFDEDE;
        color: #FF5B5C !important;
    }

    .badge.bg-danger.badge-glow, .badge.border-danger.badge-glow, .badge.badge-danger.badge-glow {
        box-shadow: 0px 0px 10px #FF5B5C;
    }

    .badge-circle-danger {
        background-color: #FF5B5C;
    }

    .badge-circle-light-danger {
        background-color: #FFDEDE;
        color: #FF5B5C;
    }

    .overlay-danger {
        background: #FF5B5C;
        background: rgba(255, 91, 92, 0.6);
    }

    /* Basic buttons */
    /* ------------- */
    .btn-danger {
        border-color: #ff2829 !important;
        background-color: #FF5B5C !important;
        color: #fff;
    }

    .btn-danger:hover, .btn-danger.hover {
        background-color: #ff7575 !important;
        color: #fff;
    }

    .btn-danger:hover.glow, .btn-danger.hover.glow {
        box-shadow: 0 4px 12px 0 rgba(255, 91, 92, 0.6) !important;
    }

    .btn-danger:focus, .btn-danger:active, .btn-danger.active {
        background-color: #ff4243 !important;
        color: #fff !important;
    }

    .btn-danger.glow {
        box-shadow: 0 2px 4px 0 rgba(255, 91, 92, 0.5) !important;
    }

    .btn-danger:disabled, .btn-danger.disabled {
        color: #fff !important;
    }

    .btn-light-danger {
        background-color: #FFDEDE;
        color: #FF5B5C !important;
    }

    .btn-light-danger:hover, .btn-light-danger.hover {
        background-color: #ff7575 !important;
        color: #fff !important;
    }

    .btn-light-danger:active, .btn-light-danger.active {
        background-color: #ff4243 !important;
        color: #fff !important;
    }

    /* Outline buttons */
    .btn-outline-danger {
        border: 1px solid #FF5B5C;
        background-color: transparent;
        color: #FF5B5C !important;
    }

    .btn-outline-danger:hover, .btn-outline-danger.hover {
        background-color: #ff7575 !important;
        color: #fff !important;
    }

    .btn-outline-danger:active, .btn-outline-danger.active {
        background-color: #ff4243 !important;
        color: #fff !important;
    }

    /* Dropdowns */
    /* --------- */
    .btn-danger ~ .dropdown-menu .dropdown-item.active, .btn-outline-danger ~ .dropdown-menu .dropdown-item.active {
        background-color: #FF5B5C;
        color: #fff;
    }

    .btn-danger ~ .dropdown-menu .dropdown-item.active:hover, .btn-outline-danger ~ .dropdown-menu .dropdown-item.active:hover {
        color: #fff;
    }

    .dropdown.dropdown-icon-wrapper .btn-danger ~ .dropdown-menu .dropdown-item:hover i, .dropdown.dropdown-icon-wrapper .btn-outline-danger ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-danger ~ .dropdown-menu .dropdown-item:hover i,
    .dropup.dropdown-icon-wrapper .btn-outline-danger ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-danger ~ .dropdown-menu .dropdown-item:hover i,
    .dropright.dropdown-icon-wrapper .btn-outline-danger ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-danger ~ .dropdown-menu .dropdown-item:hover i,
    .dropleft.dropdown-icon-wrapper .btn-outline-danger ~ .dropdown-menu .dropdown-item:hover i {
        color: #FF5B5C;
    }

    .dropdown.dropdown-icon-wrapper .btn-danger ~ .dropdown-menu .dropdown-item:active i, .dropdown.dropdown-icon-wrapper .btn-outline-danger ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-danger ~ .dropdown-menu .dropdown-item:active i,
    .dropup.dropdown-icon-wrapper .btn-outline-danger ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-danger ~ .dropdown-menu .dropdown-item:active i,
    .dropright.dropdown-icon-wrapper .btn-outline-danger ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-danger ~ .dropdown-menu .dropdown-item:active i,
    .dropleft.dropdown-icon-wrapper .btn-outline-danger ~ .dropdown-menu .dropdown-item:active i {
        color: #fff;
    }

    /* Bullet danger */
    .bullet.bullet-danger {
        background-color: #FF5B5C;
    }

    /* For Pagination */
    /* -------------- */
    .pagination-danger .page-item.active .page-link, .pagination-danger .page-item.active .page-link:hover {
        background: #FF5B5C !important;
        color: #fff;
    }

    .pagination-danger .page-item .page-link:hover {
        background-color: #FFDEDE !important;
    }

    .pagination-danger .page-item.previous .page-link, .pagination-danger .page-item.next .page-link {
        color: #FF5B5C;
    }

    .pagination-danger .page-item.previous .page-link:hover, .pagination-danger .page-item.next .page-link:hover {
        background: #FF5B5C;
    }

    /* Progress Bars danger */
    /* ---------------------- */
    .progress-bar-danger .progress-bar {
        background-color: #FF5B5C;
        box-shadow: 0 2px 6px 0 rgba(255, 91, 92, 0.6);
    }

    /* Chips danger */
    /* ---------------- */
    .chip-danger {
        background-color: #FF5B5C !important;
    }

    .chip-danger .chip-body {
        color: #fff !important;
    }

    /* Divider danger */
    /* ---------------*/
    .divider.divider-danger .divider-text:before, .divider.divider-danger .divider-text:after {
        border-color: #FF5B5C !important;
    }

    /* timeline */
    .widget-timeline li.timeline-items.timeline-icon-danger:before {
        background: #FF5B5C !important;
    }

    /* Custom Checkbox & Radio - Colored */
    /* --------------------------------- */
    input[type="checkbox"].bg-danger + .custom-control-label:before, input[type="radio"].bg-danger + .custom-control-label:before {
        background-color: #FF5B5C !important;
        border-color: #ff2829 !important;
    }

    .checkbox.checkbox-danger input:checked ~ label::before, .checkbox.radio-danger input:checked ~ label::before, .radio.checkbox-danger input:checked ~ label::before, .radio.radio-danger input:checked ~ label::before {
        background-color: #FF5B5C;
        border-color: #FF5B5C;
    }

    .checkbox.checkbox-danger input:checked ~ label::after, .checkbox.radio-danger input:checked ~ label::after, .radio.checkbox-danger input:checked ~ label::after, .radio.radio-danger input:checked ~ label::after {
        border-color: #fff;
    }

    .checkbox.checkbox-danger.checkbox-glow input:checked ~ label::before, .checkbox.checkbox-danger.radio-glow input:checked ~ label::before, .checkbox.radio-danger.checkbox-glow input:checked ~ label::before, .checkbox.radio-danger.radio-glow input:checked ~ label::before, .radio.checkbox-danger.checkbox-glow input:checked ~ label::before, .radio.checkbox-danger.radio-glow input:checked ~ label::before, .radio.radio-danger.checkbox-glow input:checked ~ label::before, .radio.radio-danger.radio-glow input:checked ~ label::before {
        box-shadow: 0 0 6px 0 rgba(255, 91, 92, 0.7);
    }

    .checkbox.checkbox-danger.checkbox-icon label i, .checkbox.radio-danger.checkbox-icon label i, .radio.checkbox-danger.checkbox-icon label i, .radio.radio-danger.checkbox-icon label i {
        color: #fff;
    }

    .checkbox.checkbox-danger label:after {
        transition: 250ms ease-in-out;
    }

    .radio.radio-danger input:checked ~ label::after {
        background-color: #fff;
        transition: all 0.15s cubic-bezier(0.35, 0.9, 0.4, 0.9);
    }

    /* Bootstrap Custom Switches */
    /* ------------------------- */
    .custom-switch-danger .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #FF5B5C !important;
        color: #fff;
        transition: all .2s ease-out;
    }

    .custom-switch-danger.custom-switch-glow .custom-control-input:not(:disabled):checked ~ .custom-control-label::before {
        box-shadow: 0 0 8px 0 rgba(255, 91, 92, 0.8) !important;
    }

    /* Touchspin Glow */
    /* -------------- */
    .input-group.touchspin-glow .bootstrap-touchspin-down.btn-danger, .input-group.touchspin-glow .bootstrap-touchspin-up.btn-danger {
        box-shadow: 0 0 8px 0 rgba(255, 91, 92, 0.8);
    }

    /* Scrumboard Application - kanban-item with coloured border */
    /* --------------------------------------------------------- */
    .kanban-container .kanban-board .kanban-item[data-border=danger]:before {
        background-color: #FF5B5C;
    }

    .edit-kanban-item select option.bg-color_name {
        background-color: #FF5B5C;
    }

    /* Select2 danger */
    /* ---------------*/
    select.select-light-danger ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice, select.select-light-danger ~ .select2-container .select2-selection--multiple .select2-selection__rendered .select2-selection__choice__remove {
        background-color: #FFDEDE !important;
        color: #FF5B5C !important;
    }

    .danger.darken-1 {
        color: #ff4243 !important;
    }

    .bg-danger.bg-darken-1 {
        background-color: #ff4243 !important;
    }

    .btn-danger.btn-darken-1 {
        border-color: #ff2829 !important;
        background-color: #ff4243 !important;
    }

    .btn-danger.btn-darken-1:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-darken-1:focus, .btn-danger.btn-darken-1:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-darken-1 {
        border-color: #ff4243 !important;
        color: #ff4243 !important;
    }

    .btn-outline-danger.btn-outline-darken-1:hover {
        background-color: #ff4243 !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff4243 !important;
    }

    .border-danger.border-darken-1 {
        border: 1px solid #ff4243 !important;
    }

    .border-top-danger.border-top-darken-1 {
        border-top: 1px solid #ff4243 !important;
    }

    .border-bottom-danger.border-bottom-darken-1 {
        border-bottom: 1px solid #ff4243 !important;
    }

    .border-left-danger.border-left-darken-1 {
        border-left: 1px solid #ff4243 !important;
    }

    .border-right-danger.border-right-darken-1 {
        border-right: 1px solid #ff4243 !important;
    }

    .overlay-danger.overlay-darken-1 {
        background: #ff4243;
        background: rgba(255, 66, 67, 0.6);
    }

    .danger.darken-2 {
        color: #ff2829 !important;
    }

    .bg-danger.bg-darken-2 {
        background-color: #ff2829 !important;
    }

    .btn-danger.btn-darken-2 {
        border-color: #ff2829 !important;
        background-color: #ff2829 !important;
    }

    .btn-danger.btn-darken-2:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-darken-2:focus, .btn-danger.btn-darken-2:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-darken-2 {
        border-color: #ff2829 !important;
        color: #ff2829 !important;
    }

    .btn-outline-danger.btn-outline-darken-2:hover {
        background-color: #ff2829 !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff2829 !important;
    }

    .border-danger.border-darken-2 {
        border: 1px solid #ff2829 !important;
    }

    .border-top-danger.border-top-darken-2 {
        border-top: 1px solid #ff2829 !important;
    }

    .border-bottom-danger.border-bottom-darken-2 {
        border-bottom: 1px solid #ff2829 !important;
    }

    .border-left-danger.border-left-darken-2 {
        border-left: 1px solid #ff2829 !important;
    }

    .border-right-danger.border-right-darken-2 {
        border-right: 1px solid #ff2829 !important;
    }

    .overlay-danger.overlay-darken-2 {
        background: #ff2829;
        background: rgba(255, 40, 41, 0.6);
    }

    .danger.darken-3 {
        color: #ff0f10 !important;
    }

    .bg-danger.bg-darken-3 {
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-darken-3 {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-darken-3:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-darken-3:focus, .btn-danger.btn-darken-3:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-darken-3 {
        border-color: #ff0f10 !important;
        color: #ff0f10 !important;
    }

    .btn-outline-danger.btn-outline-darken-3:hover {
        background-color: #ff0f10 !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff0f10 !important;
    }

    .border-danger.border-darken-3 {
        border: 1px solid #ff0f10 !important;
    }

    .border-top-danger.border-top-darken-3 {
        border-top: 1px solid #ff0f10 !important;
    }

    .border-bottom-danger.border-bottom-darken-3 {
        border-bottom: 1px solid #ff0f10 !important;
    }

    .border-left-danger.border-left-darken-3 {
        border-left: 1px solid #ff0f10 !important;
    }

    .border-right-danger.border-right-darken-3 {
        border-right: 1px solid #ff0f10 !important;
    }

    .overlay-danger.overlay-darken-3 {
        background: #ff0f10;
        background: rgba(255, 15, 16, 0.6);
    }

    .danger.darken-4 {
        color: #f40001 !important;
    }

    .bg-danger.bg-darken-4 {
        background-color: #f40001 !important;
    }

    .btn-danger.btn-darken-4 {
        border-color: #ff2829 !important;
        background-color: #f40001 !important;
    }

    .btn-danger.btn-darken-4:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-darken-4:focus, .btn-danger.btn-darken-4:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-darken-4 {
        border-color: #f40001 !important;
        color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-darken-4:hover {
        background-color: #f40001 !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #f40001 !important;
    }

    .border-danger.border-darken-4 {
        border: 1px solid #f40001 !important;
    }

    .border-top-danger.border-top-darken-4 {
        border-top: 1px solid #f40001 !important;
    }

    .border-bottom-danger.border-bottom-darken-4 {
        border-bottom: 1px solid #f40001 !important;
    }

    .border-left-danger.border-left-darken-4 {
        border-left: 1px solid #f40001 !important;
    }

    .border-right-danger.border-right-darken-4 {
        border-right: 1px solid #f40001 !important;
    }

    .overlay-danger.overlay-darken-4 {
        background: #f40001;
        background: rgba(244, 0, 1, 0.6);
    }

    .danger.accent-1 {
        color: #FFEEF1 !important;
    }

    .bg-danger.bg-accent-1 {
        background-color: #FFEEF1 !important;
    }

    .btn-danger.btn-accent-1 {
        border-color: #ff2829 !important;
        background-color: #FFEEF1 !important;
    }

    .btn-danger.btn-accent-1:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-accent-1:focus, .btn-danger.btn-accent-1:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-accent-1 {
        border-color: #FFEEF1 !important;
        color: #FFEEF1 !important;
    }

    .btn-outline-danger.btn-outline-accent-1:hover {
        background-color: #FFEEF1 !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFEEF1 !important;
    }

    .border-danger.border-accent-1 {
        border: 1px solid #FFEEF1 !important;
    }

    .border-top-danger.border-top-accent-1 {
        border-top: 1px solid #FFEEF1 !important;
    }

    .border-bottom-danger.border-bottom-accent-1 {
        border-bottom: 1px solid #FFEEF1 !important;
    }

    .border-left-danger.border-left-accent-1 {
        border-left: 1px solid #FFEEF1 !important;
    }

    .border-right-danger.border-right-accent-1 {
        border-right: 1px solid #FFEEF1 !important;
    }

    .overlay-danger.overlay-accent-1 {
        background: #FFEEF1;
        background: rgba(255, 238, 241, 0.6);
    }

    .danger.accent-2 {
        color: #FFD6DB !important;
    }

    .bg-danger.bg-accent-2 {
        background-color: #FFD6DB !important;
    }

    .btn-danger.btn-accent-2 {
        border-color: #ff2829 !important;
        background-color: #FFD6DB !important;
    }

    .btn-danger.btn-accent-2:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-accent-2:focus, .btn-danger.btn-accent-2:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-accent-2 {
        border-color: #FFD6DB !important;
        color: #FFD6DB !important;
    }

    .btn-outline-danger.btn-outline-accent-2:hover {
        background-color: #FFD6DB !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFD6DB !important;
    }

    .border-danger.border-accent-2 {
        border: 1px solid #FFD6DB !important;
    }

    .border-top-danger.border-top-accent-2 {
        border-top: 1px solid #FFD6DB !important;
    }

    .border-bottom-danger.border-bottom-accent-2 {
        border-bottom: 1px solid #FFD6DB !important;
    }

    .border-left-danger.border-left-accent-2 {
        border-left: 1px solid #FFD6DB !important;
    }

    .border-right-danger.border-right-accent-2 {
        border-right: 1px solid #FFD6DB !important;
    }

    .overlay-danger.overlay-accent-2 {
        background: #FFD6DB;
        background: rgba(255, 214, 219, 0.6);
    }

    .danger.accent-3 {
        color: #FFECEE !important;
    }

    .bg-danger.bg-accent-3 {
        background-color: #FFECEE !important;
    }

    .btn-danger.btn-accent-3 {
        border-color: #ff2829 !important;
        background-color: #FFECEE !important;
    }

    .btn-danger.btn-accent-3:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-accent-3:focus, .btn-danger.btn-accent-3:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-accent-3 {
        border-color: #FFECEE !important;
        color: #FFECEE !important;
    }

    .btn-outline-danger.btn-outline-accent-3:hover {
        background-color: #FFECEE !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFECEE !important;
    }

    .border-danger.border-accent-3 {
        border: 1px solid #FFECEE !important;
    }

    .border-top-danger.border-top-accent-3 {
        border-top: 1px solid #FFECEE !important;
    }

    .border-bottom-danger.border-bottom-accent-3 {
        border-bottom: 1px solid #FFECEE !important;
    }

    .border-left-danger.border-left-accent-3 {
        border-left: 1px solid #FFECEE !important;
    }

    .border-right-danger.border-right-accent-3 {
        border-right: 1px solid #FFECEE !important;
    }

    .overlay-danger.overlay-accent-3 {
        background: #FFECEE;
        background: rgba(255, 236, 238, 0.6);
    }

    .danger.accent-4 {
        color: #FFD3D7 !important;
    }

    .bg-danger.bg-accent-4 {
        background-color: #FFD3D7 !important;
    }

    .btn-danger.btn-accent-4 {
        border-color: #ff2829 !important;
        background-color: #FFD3D7 !important;
    }

    .btn-danger.btn-accent-4:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-accent-4:focus, .btn-danger.btn-accent-4:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-accent-4 {
        border-color: #FFD3D7 !important;
        color: #FFD3D7 !important;
    }

    .btn-outline-danger.btn-outline-accent-4:hover {
        background-color: #FFD3D7 !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFD3D7 !important;
    }

    .border-danger.border-accent-4 {
        border: 1px solid #FFD3D7 !important;
    }

    .border-top-danger.border-top-accent-4 {
        border-top: 1px solid #FFD3D7 !important;
    }

    .border-bottom-danger.border-bottom-accent-4 {
        border-bottom: 1px solid #FFD3D7 !important;
    }

    .border-left-danger.border-left-accent-4 {
        border-left: 1px solid #FFD3D7 !important;
    }

    .border-right-danger.border-right-accent-4 {
        border-right: 1px solid #FFD3D7 !important;
    }

    .overlay-danger.overlay-accent-4 {
        background: #FFD3D7;
        background: rgba(255, 211, 215, 0.6);
    }

    .danger.light {
        color: #FFDEDE !important;
    }

    .bg-danger.bg-light {
        background-color: #FFDEDE !important;
    }

    .btn-danger.btn-light {
        border-color: #ff2829 !important;
        background-color: #FFDEDE !important;
    }

    .btn-danger.btn-light:hover {
        border-color: #ff2829 !important;
        background-color: #ff0f10 !important;
    }

    .btn-danger.btn-light:focus, .btn-danger.btn-light:active {
        border-color: #ff0f10 !important;
        background-color: #f40001 !important;
    }

    .btn-outline-danger.btn-outline-light {
        border-color: #FFDEDE !important;
        color: #FFDEDE !important;
    }

    .btn-outline-danger.btn-outline-light:hover {
        background-color: #FFDEDE !important;
    }

    input:focus ~ .bg-danger {
        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFDEDE !important;
    }

    .border-danger.border-light {
        border: 1px solid #FFDEDE !important;
    }

    .border-top-danger.border-top-light {
        border-top: 1px solid #FFDEDE !important;
    }

    .border-bottom-danger.border-bottom-light {
        border-bottom: 1px solid #FFDEDE !important;
    }

    .border-left-danger.border-left-light {
        border-left: 1px solid #FFDEDE !important;
    }

    .border-right-danger.border-right-light {
        border-right: 1px solid #FFDEDE !important;
    }

    .overlay-danger.overlay-light {
        background: #FFDEDE;
        background: rgba(255, 222, 222, 0.6);
    }

</style>
