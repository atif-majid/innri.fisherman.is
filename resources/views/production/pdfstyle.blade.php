<style>
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
    b,
    strong {
        font-weight: bolder;
    }
    img {
        vertical-align: middle;
        border-style: none;
    }
    table {
        border-collapse: collapse;
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
    input[type="radio"],
    input[type="checkbox"] {
        box-sizing: border-box;
        padding: 0;
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
    .col-12 {
        flex: 0 0 100%;
        max-width: 100%;
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
   .table-bordered {
        border: 1px solid #DFE3E7;
    }
    .table-bordered th,
    .table-bordered td {
        border: 1px solid #DFE3E7;
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
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive > .table-bordered {
        border: 0;
    }
    .text-nowrap {
        white-space: nowrap !important;
    }
    strong{
        font-size: 1.1rem;
    }
    .page-break {
        page-break-after: always;
    }
</style>
