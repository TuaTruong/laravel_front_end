<style>
    a{
        text-decoration: none;
        color: #585656;
    }
    ul {
        list-style-type: none;
        margin: 0px;
        padding: 0px;
    }


    .dropdown-menu {
        border: none;
        left: 7rem !important;
        transform: translateX(-50%) !important;
        margin-top: 40px !important;
    }

    .modal-header>form {
        width: 100%;
        border: 2px solid #f33a2f !important;
    }

    @media (max-width: 1024px) {
        .modal-dialog {
            width: 100vw;
            height: 100%;
            border: none;
            margin: 0px;
        }

        .modal-content {
            width: 100vw;
            height: 100%;
            border: none;
            border-radius: 0px;
        }
    }
</style>
<div class="position-absolute" style="top:0px;width:100%;z-index:1;">
    <header class="main-header position-relative" style="color:#585656;background-color: transparent;">
        <div class="d-none d-lg-flex align-items-center justify-content-center text-center p-2 text-white"
            style="background-color: #f33a2f">
            <div>
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
            </div>
            <div class="ml-1">
                Let's go to Europe! Tickets are now available for <a href="https://laracon.eu"
                    class="underline text-white">Laracon EU</a>.
            </div>
        </div>


        <div class="mx-auto py-4 py-lg-6" style="max-width: 1536px; width:100%;">
            <div class="mx-auto px-2 px-sm-5 d-flex align-items-center justify-content-between" style="max-width:1280px;">
                <div>
                    <a href="/" class="d-inline-flex align-items-center">
                        <img src="{{ asset('img/logomark.svg') }}" alt="" width="48" height="50">
                        <img class="ms-3 d-sm-block" src="{{ asset('img/logo.svg') }}" width="114" height="29"
                            alt="">
                    </a>
                </div>

                <ul class="position-relative d-none d-lg-flex align-items-center justify-content-center gap-4 gap-xl-5">
                    <li><a href="https://forge.laravel.com" style="color: inherit">Forge</a>
                    </li>
                    <li><a href="https://vapor.laravel.com" style="color: inherit">Vapor</a>
                    </li>
                    <li class="position-relative">
                        <button class="d-flex align-items-center justify-content-center bg-white" style="border: none;"
                            data-bs-toggle="dropdown"="">
                            Ecosystem
                            <span class="ms-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>

                        <div class="position-absolute z-2 dropdown-menu" style="">
                            <div class="shadow-lg" style="width: 56rem; padding:15px">
                                <ul class="row row-cols-3" style="padding:0px 5px;">
                                    @for ($i = 0; $i < 15; $i++)
                                        <li class="col py-4">
                                            <a href="https://laravel.com/docs/10.x/starter-kits#laravel-breeze"
                                                class="d-flex text-decoration-none gap-2">
                                                <div class="position-relative d-flex align-items-center justify-content-center"
                                                    style="width: 3rem;height:3rem;flex-shrink:0">
                                                    <span class="position-absolute"
                                                        style="width: 100%; height:100%; background-color:#f5cc6a;border-radius: 0.5rem;"></span>
                                                    <img src="https://laravel.com/img/ecosystem/breeze.min.svg"
                                                        alt="" width="28" height="28" style="z-index: 1;">
                                                </div>
                                                <div>
                                                    <div style="color:#585656;">Breeze</div>
                                                    <span
                                                        style="font-size: .75rem; line-height:1rem; color:rgb(138,136,136)">Lightweight
                                                        starter kit scaffolding for new applications with Blade or
                                                        Inertia.</span>
                                                </div>
                                            </a>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="https://laravel-news.com"  style="color: inherit">News</a>
                    </li>
                    <li><a href="https://partners.laravel.com"
                            style="color: inherit">Partners</a></li>
                    <li><a href="https://laravel.bigcartel.com/"
                            style="color: inherit">Shop</a></li>
                </ul>

                <div class="d-flex align-items-center justify-content-end">
                    <button id="docsearch" class="bg-white" style="border: none;" type="button" class="btn btn-primary"
                        data-bs-toggle="modal" data-bs-target="#searchModal">
                        <svg width="20" height="20" class="DocSearch-Search-Icon" viewBox="0 0 20 20"
                            style="padding: 1px">
                            <path
                                d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z"
                                stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <a href="https://laravel.com/docs/10.x"
                        class="d-none d-lg-inline-flex ms-3 style-button" >
                        <span
                            class="text-center fw-bold bg-white border" style="padding: 8px 16px;">
                            Documentation
                        </span>
                    </a>

                    <button class="bg-white ms-2 d-inline-flex d-lg-none align-items-center justify-content-center"
                        style="border:none; width:40px; height:40px; padding:8px;">
                        <svg x-show="! navIsOpen" class="w-6" viewBox="0 0 28 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg" style="">
                            <line y1="1" x2="28" y2="1" stroke="currentColor" stroke-width="2">
                            </line>
                            <line y1="11" x2="28" y2="11" stroke="currentColor" stroke-width="2">
                            </line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="modal fade" id="searchModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <form action="" class="p-2 border me-2">
                    <svg width="20" height="20" class="DocSearch-Search-Icon me-2" viewBox="0 0 20 20"
                        style="color: #f33a2f; stroke-width:2">
                        <path
                            d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z"
                            stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <input class="DocSearch-Input" aria-autocomplete="both" aria-labelledby="docsearch-label"
                        id="docsearch-input" autocomplete="off" autocorrect="off" autocapitalize="off"
                        enterkeyhint="search" spellcheck="false" autofocus="true" placeholder="Search docs"
                        maxlength="64" type="search" style="outline: none; border:none; width:75%">

                </form>
                <button class="btn" data-bs-dismiss="modal"
                    style="color:#f33a2f; border:none; background-color:inherit">Cancel</button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center"
                style="padding: 50px 0px; cursor:pointer">
                <span>No recent search</span>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-between p-2">
                <ul class="guide d-none d-lg-inline-block">
                    <li class="d-inline me-2">
                        <svg width="15" height="15" aria-label="Enter key" role="img">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.2">
                                <path d="M12 3.53088v3c0 1-1 2-2 2H4M7 11.53088l-3-3 3-3"></path>
                            </g>
                        </svg>
                        <span>to select</span>
                    </li>
                    <li class="d-inline me-2">
                        <svg width="15" height="15" aria-label="Arrow down" role="img">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.2">
                                <path d="M7.5 3.5v8M10.5 8.5l-3 3-3-3"></path>
                            </g>
                        </svg>
                        <svg width="15" height="15" aria-label="Arrow up" role="img">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.2">
                                <path d="M7.5 11.5v-8M10.5 6.5l-3-3-3 3"></path>
                            </g>
                        </svg>
                        <span>to navigate</span>
                    </li>
                    <li class="d-inline">
                        <svg width="15" height="15" aria-label="Escape key" role="img">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.2">
                                <path
                                    d="M13.6167 8.936c-.1065.3583-.6883.962-1.4875.962-.7993 0-1.653-.9165-1.653-2.1258v-.5678c0-1.2548.7896-2.1016 1.653-2.1016.8634 0 1.3601.4778 1.4875 1.0724M9 6c-.1352-.4735-.7506-.9219-1.46-.8972-.7092.0246-1.344.57-1.344 1.2166s.4198.8812 1.3445.9805C8.465 7.3992 8.968 7.9337 9 8.5c.032.5663-.454 1.398-1.4595 1.398C6.6593 9.898 6 9 5.963 8.4851m-1.4748.5368c-.2635.5941-.8099.876-1.5443.876s-1.7073-.6248-1.7073-2.204v-.4603c0-1.0416.721-2.131 1.7073-2.131.9864 0 1.6425 1.031 1.5443 2.2492h-2.956">
                                </path>
                            </g>
                        </svg>
                        <span>to close</span>
                    </li>
                </ul>
                <div class="d-inline-block" style="margin-left: auto;">
                    <a href="#" >
                        <span>Search by</span>
                        <svg width="77" height="19" aria-label="Algolia" role="img" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2196.2 500">
                            <defs>
                                <style>
                                    .cls-1,
                                    .cls-2 {
                                        fill: #003dff;
                                    }

                                    .cls-2 {
                                        fill-rule: evenodd;
                                    }
                                </style>
                            </defs>
                            <path class="cls-2"
                                d="M1070.38,275.3V5.91c0-3.63-3.24-6.39-6.82-5.83l-50.46,7.94c-2.87,.45-4.99,2.93-4.99,5.84l.17,273.22c0,12.92,0,92.7,95.97,95.49,3.33,.1,6.09-2.58,6.09-5.91v-40.78c0-2.96-2.19-5.51-5.12-5.84-34.85-4.01-34.85-47.57-34.85-54.72Z">
                            </path>
                            <rect class="cls-1" x="1845.88" y="104.73" width="62.58" height="277.9" rx="5.9"
                                ry="5.9"></rect>
                            <path class="cls-2"
                                d="M1851.78,71.38h50.77c3.26,0,5.9-2.64,5.9-5.9V5.9c0-3.62-3.24-6.39-6.82-5.83l-50.77,7.95c-2.87,.45-4.99,2.92-4.99,5.83v51.62c0,3.26,2.64,5.9,5.9,5.9Z">
                            </path>
                            <path class="cls-2"
                                d="M1764.03,275.3V5.91c0-3.63-3.24-6.39-6.82-5.83l-50.46,7.94c-2.87,.45-4.99,2.93-4.99,5.84l.17,273.22c0,12.92,0,92.7,95.97,95.49,3.33,.1,6.09-2.58,6.09-5.91v-40.78c0-2.96-2.19-5.51-5.12-5.84-34.85-4.01-34.85-47.57-34.85-54.72Z">
                            </path>
                            <path class="cls-2"
                                d="M1631.95,142.72c-11.14-12.25-24.83-21.65-40.78-28.31-15.92-6.53-33.26-9.85-52.07-9.85-18.78,0-36.15,3.17-51.92,9.85-15.59,6.66-29.29,16.05-40.76,28.31-11.47,12.23-20.38,26.87-26.76,44.03-6.38,17.17-9.24,37.37-9.24,58.36,0,20.99,3.19,36.87,9.55,54.21,6.38,17.32,15.14,32.11,26.45,44.36,11.29,12.23,24.83,21.62,40.6,28.46,15.77,6.83,40.12,10.33,52.4,10.48,12.25,0,36.78-3.82,52.7-10.48,15.92-6.68,29.46-16.23,40.78-28.46,11.29-12.25,20.05-27.04,26.25-44.36,6.22-17.34,9.24-33.22,9.24-54.21,0-20.99-3.34-41.19-10.03-58.36-6.38-17.17-15.14-31.8-26.43-44.03Zm-44.43,163.75c-11.47,15.75-27.56,23.7-48.09,23.7-20.55,0-36.63-7.8-48.1-23.7-11.47-15.75-17.21-34.01-17.21-61.2,0-26.89,5.59-49.14,17.06-64.87,11.45-15.75,27.54-23.52,48.07-23.52,20.55,0,36.63,7.78,48.09,23.52,11.47,15.57,17.36,37.98,17.36,64.87,0,27.19-5.72,45.3-17.19,61.2Z">
                            </path>
                            <path class="cls-2"
                                d="M894.42,104.73h-49.33c-48.36,0-90.91,25.48-115.75,64.1-14.52,22.58-22.99,49.63-22.99,78.73,0,44.89,20.13,84.92,51.59,111.1,2.93,2.6,6.05,4.98,9.31,7.14,12.86,8.49,28.11,13.47,44.52,13.47,1.23,0,2.46-.03,3.68-.09,.36-.02,.71-.05,1.07-.07,.87-.05,1.75-.11,2.62-.2,.34-.03,.68-.08,1.02-.12,.91-.1,1.82-.21,2.73-.34,.21-.03,.42-.07,.63-.1,32.89-5.07,61.56-30.82,70.9-62.81v57.83c0,3.26,2.64,5.9,5.9,5.9h50.42c3.26,0,5.9-2.64,5.9-5.9V110.63c0-3.26-2.64-5.9-5.9-5.9h-56.32Zm0,206.92c-12.2,10.16-27.97,13.98-44.84,15.12-.16,.01-.33,.03-.49,.04-1.12,.07-2.24,.1-3.36,.1-42.24,0-77.12-35.89-77.12-79.37,0-10.25,1.96-20.01,5.42-28.98,11.22-29.12,38.77-49.74,71.06-49.74h49.33v142.83Z">
                            </path>
                            <path class="cls-2"
                                d="M2133.97,104.73h-49.33c-48.36,0-90.91,25.48-115.75,64.1-14.52,22.58-22.99,49.63-22.99,78.73,0,44.89,20.13,84.92,51.59,111.1,2.93,2.6,6.05,4.98,9.31,7.14,12.86,8.49,28.11,13.47,44.52,13.47,1.23,0,2.46-.03,3.68-.09,.36-.02,.71-.05,1.07-.07,.87-.05,1.75-.11,2.62-.2,.34-.03,.68-.08,1.02-.12,.91-.1,1.82-.21,2.73-.34,.21-.03,.42-.07,.63-.1,32.89-5.07,61.56-30.82,70.9-62.81v57.83c0,3.26,2.64,5.9,5.9,5.9h50.42c3.26,0,5.9-2.64,5.9-5.9V110.63c0-3.26-2.64-5.9-5.9-5.9h-56.32Zm0,206.92c-12.2,10.16-27.97,13.98-44.84,15.12-.16,.01-.33,.03-.49,.04-1.12,.07-2.24,.1-3.36,.1-42.24,0-77.12-35.89-77.12-79.37,0-10.25,1.96-20.01,5.42-28.98,11.22-29.12,38.77-49.74,71.06-49.74h49.33v142.83Z">
                            </path>
                            <path class="cls-2"
                                d="M1314.05,104.73h-49.33c-48.36,0-90.91,25.48-115.75,64.1-11.79,18.34-19.6,39.64-22.11,62.59-.58,5.3-.88,10.68-.88,16.14s.31,11.15,.93,16.59c4.28,38.09,23.14,71.61,50.66,94.52,2.93,2.6,6.05,4.98,9.31,7.14,12.86,8.49,28.11,13.47,44.52,13.47h0c17.99,0,34.61-5.93,48.16-15.97,16.29-11.58,28.88-28.54,34.48-47.75v50.26h-.11v11.08c0,21.84-5.71,38.27-17.34,49.36-11.61,11.08-31.04,16.63-58.25,16.63-11.12,0-28.79-.59-46.6-2.41-2.83-.29-5.46,1.5-6.27,4.22l-12.78,43.11c-1.02,3.46,1.27,7.02,4.83,7.53,21.52,3.08,42.52,4.68,54.65,4.68,48.91,0,85.16-10.75,108.89-32.21,21.48-19.41,33.15-48.89,35.2-88.52V110.63c0-3.26-2.64-5.9-5.9-5.9h-56.32Zm0,64.1s.65,139.13,0,143.36c-12.08,9.77-27.11,13.59-43.49,14.7-.16,.01-.33,.03-.49,.04-1.12,.07-2.24,.1-3.36,.1-1.32,0-2.63-.03-3.94-.1-40.41-2.11-74.52-37.26-74.52-79.38,0-10.25,1.96-20.01,5.42-28.98,11.22-29.12,38.77-49.74,71.06-49.74h49.33Z">
                            </path>
                            <path class="cls-1"
                                d="M249.83,0C113.3,0,2,110.09,.03,246.16c-2,138.19,110.12,252.7,248.33,253.5,42.68,.25,83.79-10.19,120.3-30.03,3.56-1.93,4.11-6.83,1.08-9.51l-23.38-20.72c-4.75-4.21-11.51-5.4-17.36-2.92-25.48,10.84-53.17,16.38-81.71,16.03-111.68-1.37-201.91-94.29-200.13-205.96,1.76-110.26,92-199.41,202.67-199.41h202.69V407.41l-115-102.18c-3.72-3.31-9.42-2.66-12.42,1.31-18.46,24.44-48.53,39.64-81.93,37.34-46.33-3.2-83.87-40.5-87.34-86.81-4.15-55.24,39.63-101.52,94-101.52,49.18,0,89.68,37.85,93.91,85.95,.38,4.28,2.31,8.27,5.52,11.12l29.95,26.55c3.4,3.01,8.79,1.17,9.63-3.3,2.16-11.55,2.92-23.58,2.07-35.92-4.82-70.34-61.8-126.93-132.17-131.26-80.68-4.97-148.13,58.14-150.27,137.25-2.09,77.1,61.08,143.56,138.19,145.26,32.19,.71,62.03-9.41,86.14-26.95l150.26,133.2c6.44,5.71,16.61,1.14,16.61-7.47V9.48C499.66,4.25,495.42,0,490.18,0H249.83Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
