<header>
    <div class="wrap">
        <div class="logo">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 652.25 600.42">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #126ba4;
                            }

                            .cls-2 {
                                fill: #213165;
                            }
                        </style>
                    </defs>
                    <title>Asset 6</title>
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                            <path class="cls-1" d="M278.25,99C341.12,70,394.8,63.88,429.18,63.18c38.75-.8,93.07-1.91,111.34,29.14,14.83,25.2-1,59.79-8.22,75.47C479.23,283.5,283.53,369.05,218.47,395.68a1118.78,1118.78,0,0,0,201.75-82.19,873.74,873.74,0,0,0,100.12-62c60-42.91,89-75.14,108.35-106.85,8-13.21,19.53-34.75,22.41-63.51,1.34-13.34,3-29.64-4.48-44.08C632,8.62,590.48,3.53,571.15,1.16,469-11.38,308.24,81.42,278.25,99Z" />
                            <path class="cls-2" d="M445.13,91.57C290.67,210,185,316.75,158.59,375.83c-6.61,14.82-20.24,45.36-10.35,78.38,1.45,4.88,9.1,28.77,38.85,51.31,99.23,75.2,281.76,12.1,315.32.5,33.91-11.72,61.86-24.79,62-24.41.33.8-77,37.72-171.61,69.74C268,593.61,198,598.61,164.18,599.67c-61.74,1.94-117.61,2.92-146.46-33.87C-7.08,534.16.31,490.18,3.78,471.15c8.41-46.2,37.42-114.42,258-265C305.39,176.4,367.47,135.91,445.13,91.57Z" />
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <nav id="content">
            <div class="cancel-btn">
                <div class="btn">
                    <svg viewBox="0 0 137 137">
                        <defs>
                            <style>
                                .cls-3 {
                                    fill: #fff;
                                }
                            </style>
                        </defs>
                        <title>Asset 1@2</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-3" d="M137,68.5A68.5,68.5,0,1,1,68.5,0,68.5,68.5,0,0,1,137,68.5" />
                                <path d="M31.12,65.54H92.24l-18.3-18.3a3.13,3.13,0,0,1,4.42-4.42L102,66.46a3.13,3.13,0,0,1,0,4.42L78.36,94.52a3.13,3.13,0,0,1-4.42-4.42l18.3-18.3H31.12A3.12,3.12,0,0,1,28,68.68v0a3.12,3.12,0,0,1,3.12-3.12" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="/">home</a></li>
                    <li><a href="/about">about us</a></li>
                    <li><a href="/services">services</a></li>
                    <li><a href="/partners">our partners</a></li>
                    <li><a href="/clients">clients</a></li>
                    <li><a href="/knowledge">knowledge hub</a></li>
                    <li><a href="/contact">contact us</a></li>
                </ul>
            </div>
            <div class="nav-links-md">
                <ul>
                    <li><a href="/">home</a></li>
                    <li><a href="/about">about us</a></li>
                    <li><a href="/services">services</a></li>
                    <li><a href="/partners">our partners</a></li>
                    <li><a href="/clients">clients</a></li>
                    <li><a href="/knowledge">knowledge hub</a></li>
                    <li><a href="/contact">contact us</a></li>
                </ul>
            </div>
        </nav>
        <div class="right">
            <a href="/enquire">Enquire Now</a>
            <div class="hamburger" id="hamburger">
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            // $(document).ready(function() {
            //     $(".hamburger").click(function() {
            //         $(this).toggleClass("is-active");
            //     });
            // });

            let content = document.getElementById("content")
            let hamburger = document.getElementById("hamburger")
            let cancel = document.querySelector(".cancel-btn")
            hamburger.addEventListener("click", () => {
                content.classList.add("active")
            });
            cancel.addEventListener("click", () => {
                content.classList.remove("active")
            });
        </script>
    </div>
</header>