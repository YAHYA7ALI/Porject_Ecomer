    <style>
        .icon-preview
        {
            position: fixed;
            bottom: 40px;
            right: -40px;
            color: white;
            font-weight: bold;
            padding: 8px;
            border-radius: 15%;
            cursor: pointer;
            font-family: "FontAwesome";
            transition: 0.2s;
            z-index: 9999;
            width: 40px;
            background: #30a8fc;
            text-align: center;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        }

        .icon-preview.show 
        {
            right: 10px;
        }
    </style>
    <div class="icon-preview">
        <i class="fa fa-arrow-circle-up"></i>
    </div>
    <script>
        let span = document.querySelector(".icon-preview");
        window.onscroll = function()
        {
            this.scrollY >= 60 ? span.classList.add("show") : span.classList.remove("show");
        };
        span.onclick = function()
        {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        }
    </script>