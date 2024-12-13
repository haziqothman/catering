<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caterease</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: rgb(250, 250, 250);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light"
        style="height: 80px; background-color:rgb(255, 255, 255); box-shadow: 0px 7px 10px rgb(241, 241, 241);">
        <a class="navbar-brand ms-4" href="{{route('admin.home')}}">
            <svg width="60" height="auto" viewBox="0 0 27 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M23 6.15925C22.9987 5.11984 22.4978 4.12333 21.6072 3.38835C20.7166 2.65338 19.5092 2.23999 18.2497 2.23888C18.0996 2.23888 17.9494 2.24588 17.801 2.25708C17.418 1.58241 16.8099 1.01179 16.0481 0.612045C15.2863 0.212305 14.4022 0 13.4994 0C12.5967 0 11.7126 0.212305 10.9508 0.612045C10.1889 1.01179 9.5809 1.58241 9.19788 2.25708C9.04943 2.24588 8.89929 2.23888 8.74915 2.23888C7.67081 2.23909 6.62466 2.54209 5.78265 3.09806C4.94065 3.65403 4.3529 4.42989 4.11603 5.29809C3.87916 6.16629 4.00727 7.07517 4.47929 7.87532C4.95131 8.67547 5.73915 9.31927 6.71331 9.70089V12.8799C6.71331 13.177 6.8563 13.4619 7.11083 13.6719C7.36536 13.882 7.71057 14 8.07053 14H18.9283C19.2883 14 19.6335 13.882 19.888 13.6719C20.1426 13.4619 20.2856 13.177 20.2856 12.8799V9.70089C21.0971 9.38236 21.7827 8.88068 22.2631 8.2539C22.7435 7.62713 22.999 6.90089 23 6.15925ZM15.5556 8.26365L16.2342 6.02344C16.2804 5.88158 16.3921 5.76035 16.5455 5.68587C16.6989 5.61139 16.8816 5.58961 17.0543 5.62523C17.2269 5.66085 17.3757 5.75102 17.4686 5.87631C17.5614 6.0016 17.5909 6.15199 17.5507 6.29506L16.8721 8.53528C16.8354 8.65644 16.7507 8.764 16.6315 8.84087C16.5122 8.91774 16.3652 8.9595 16.2139 8.95952C16.1581 8.95955 16.1026 8.9539 16.0485 8.94272C15.8741 8.90652 15.7242 8.81468 15.6318 8.68735C15.5394 8.56003 15.512 8.40763 15.5556 8.26365ZM12.8208 6.15925C12.8208 6.01072 12.8923 5.86826 13.0196 5.76323C13.1468 5.6582 13.3195 5.5992 13.4994 5.5992C13.6794 5.5992 13.852 5.6582 13.9793 5.76323C14.1065 5.86826 14.178 6.01072 14.178 6.15925V8.39946C14.178 8.548 14.1065 8.69045 13.9793 8.79548C13.852 8.90051 13.6794 8.95952 13.4994 8.95952C13.3195 8.95952 13.1468 8.90051 13.0196 8.79548C12.8923 8.69045 12.8208 8.548 12.8208 8.39946V6.15925ZM9.94181 5.616C10.1164 5.58 10.3011 5.6027 10.4554 5.67911C10.6097 5.75551 10.721 5.87937 10.7646 6.02344L11.4432 8.26365C11.4869 8.40773 11.4593 8.56021 11.3668 8.68755C11.2742 8.81489 11.1241 8.90668 10.9495 8.94272C10.8941 8.95419 10.8371 8.95984 10.7799 8.95952C10.6287 8.95934 10.4819 8.91751 10.3628 8.84065C10.2437 8.7638 10.1591 8.65632 10.1225 8.53528L9.44388 6.29506C9.42234 6.22349 9.41815 6.14911 9.43155 6.07619C9.44494 6.00328 9.47565 5.93326 9.52192 5.87017C9.56818 5.80707 9.62909 5.75214 9.70115 5.70852C9.7732 5.6649 9.85499 5.63346 9.94181 5.616ZM18.9283 12.8799H8.07053V10.039C8.29525 10.066 8.52205 10.0796 8.74915 10.0796H18.2497C18.4768 10.0796 18.7036 10.066 18.9283 10.039V12.8799Z"
                    fill="#494949" />
                <path
                    d="M2.48001 18.29C2.12667 18.29 1.78667 18.2367 1.46001 18.13C1.14 18.03 0.880005 17.86 0.680005 17.62C0.480005 17.38 0.380005 17.0567 0.380005 16.65C0.380005 16.2167 0.463338 15.7933 0.630005 15.38C0.796672 14.9667 1.02 14.5833 1.3 14.23C1.58 13.87 1.89334 13.56 2.24 13.3C2.54667 13.0667 2.9 12.8767 3.3 12.73C3.70667 12.5833 4.11 12.51 4.51 12.51C4.67667 12.51 4.83334 12.5233 4.98001 12.55C5.12667 12.57 5.27667 12.6167 5.43001 12.69C5.56334 12.75 5.67001 12.8267 5.75001 12.92C5.83001 13.0067 5.87001 13.1067 5.87001 13.22C5.87001 13.2333 5.87001 13.25 5.87001 13.27C5.87001 13.29 5.86667 13.3067 5.86 13.32C5.83334 13.4267 5.77001 13.55 5.67001 13.69C5.57667 13.8233 5.50334 13.9633 5.45001 14.11C5.44334 14.1367 5.40667 14.16 5.34001 14.18C5.27334 14.1933 5.24667 14.1867 5.26 14.16C5.31334 14.0733 5.35334 13.9667 5.38001 13.84C5.41334 13.7133 5.43001 13.5867 5.43001 13.46C5.43001 13.3667 5.42001 13.28 5.4 13.2C5.38667 13.1133 5.36001 13.04 5.32 12.98C5.25334 12.86 5.15001 12.7767 5.01001 12.73C4.87001 12.6833 4.72001 12.66 4.56001 12.66C4.40667 12.66 4.25334 12.6767 4.10001 12.71C3.94667 12.7433 3.81334 12.78 3.7 12.82C3.31334 12.96 2.94334 13.18 2.59 13.48C2.27667 13.7533 1.99667 14.07 1.75001 14.43C1.51001 14.79 1.32 15.16 1.18 15.54C1.04 15.92 0.970005 16.2833 0.970005 16.63C0.970005 16.9833 1.04667 17.2633 1.2 17.47C1.35334 17.6767 1.55334 17.8233 1.8 17.91C2.04667 17.9967 2.31334 18.04 2.60001 18.04C2.85334 18.04 3.10334 18.0133 3.35 17.96C3.60334 17.9067 3.83334 17.84 4.04 17.76C4.39334 17.6267 4.71001 17.4633 4.99001 17.27C5.27667 17.0767 5.54334 16.8267 5.79001 16.52C5.82334 16.4867 5.84667 16.47 5.86 16.47C5.88001 16.47 5.89001 16.4833 5.89001 16.51C5.89001 16.5633 5.86334 16.6267 5.81001 16.7C5.58334 17.0067 5.32667 17.2633 5.04 17.47C4.75334 17.6767 4.44667 17.8467 4.12001 17.98C3.9 18.0667 3.64334 18.14 3.35 18.2C3.06334 18.26 2.77334 18.29 2.48001 18.29Z"
                    fill="#414141" />
                <path
                    d="M6.97344 18.03C6.90678 18.03 6.85011 18.0167 6.80344 17.99C6.75678 17.9633 6.73344 17.9133 6.73344 17.84C6.73344 17.7467 6.75678 17.64 6.80344 17.52C6.85011 17.4 6.90344 17.2833 6.96344 17.17C7.02344 17.05 7.07678 16.9533 7.12344 16.88C6.89011 17.1267 6.64678 17.36 6.39344 17.58C6.26678 17.6867 6.12678 17.7867 5.97344 17.88C5.82011 17.9733 5.65678 18.02 5.48344 18.02C5.41678 18.02 5.37011 18 5.34344 17.96C5.31678 17.9133 5.30344 17.86 5.30344 17.8C5.30344 17.7667 5.30678 17.7433 5.31344 17.73C5.34678 17.47 5.43011 17.2 5.56344 16.92C5.69678 16.64 5.86011 16.3767 6.05344 16.13C6.24678 15.8833 6.44344 15.6833 6.64344 15.53C6.87011 15.3567 7.12011 15.27 7.39344 15.27H8.54344C8.57678 15.27 8.59344 15.2833 8.59344 15.31C8.59344 15.3633 8.56344 15.39 8.50344 15.39C8.43678 15.39 8.37011 15.4333 8.30344 15.52C8.23678 15.6 8.18678 15.6667 8.15344 15.72C8.10678 15.7933 8.03344 15.9167 7.93344 16.09C7.83344 16.2633 7.73011 16.4533 7.62344 16.66C7.52344 16.86 7.43678 17.0467 7.36344 17.22C7.29011 17.3933 7.25344 17.52 7.25344 17.6C7.25344 17.6933 7.30011 17.74 7.39344 17.74C7.49344 17.74 7.60678 17.6933 7.73344 17.6C7.86011 17.5067 7.98678 17.3933 8.11344 17.26C8.24678 17.12 8.36678 16.9833 8.47344 16.85C8.58678 16.71 8.67678 16.6 8.74344 16.52C8.78344 16.56 8.78011 16.6167 8.73344 16.69C8.69344 16.7567 8.65678 16.81 8.62344 16.85C8.49011 17.0233 8.33678 17.2033 8.16344 17.39C7.99011 17.57 7.80011 17.7233 7.59344 17.85C7.39344 17.97 7.18678 18.03 6.97344 18.03ZM5.89344 17.68C5.97344 17.68 6.08344 17.6233 6.22344 17.51C6.37011 17.39 6.52678 17.2433 6.69344 17.07C6.86011 16.89 7.01678 16.7033 7.16344 16.51C7.31011 16.31 7.43011 16.13 7.52344 15.97C7.62344 15.8033 7.67344 15.6767 7.67344 15.59C7.67344 15.5167 7.65011 15.4667 7.60344 15.44C7.56344 15.4133 7.51011 15.4 7.44344 15.4C7.33678 15.4 7.22011 15.44 7.09344 15.52C6.97344 15.5933 6.87678 15.6667 6.80344 15.74C6.72344 15.8133 6.62678 15.93 6.51344 16.09C6.40678 16.2433 6.30011 16.4133 6.19344 16.6C6.08678 16.7867 5.99678 16.9667 5.92344 17.14C5.85011 17.3133 5.81344 17.4533 5.81344 17.56C5.81344 17.64 5.84011 17.68 5.89344 17.68Z"
                    fill="#414141" />
                <path
                    d="M8.9529 18.03C8.88623 18.03 8.82956 18.0167 8.7829 17.99C8.73623 17.9633 8.7129 17.9133 8.7129 17.84C8.7129 17.7467 8.73623 17.6367 8.7829 17.51C8.83623 17.3833 8.8929 17.2567 8.9529 17.13C9.0129 17.0033 9.0629 16.9 9.1029 16.82C9.13623 16.76 9.17956 16.6667 9.2329 16.54C9.2929 16.4067 9.3529 16.27 9.4129 16.13C9.47956 15.9833 9.5329 15.86 9.5729 15.76C9.61956 15.66 9.6429 15.61 9.6429 15.61C9.5829 15.6767 9.5029 15.77 9.4029 15.89C9.30956 16.01 9.20623 16.1367 9.0929 16.27C8.98623 16.3967 8.88623 16.5167 8.7929 16.63C8.70623 16.7433 8.6429 16.8267 8.6029 16.88C8.5829 16.9067 8.56623 16.92 8.5529 16.92C8.53956 16.92 8.5329 16.9033 8.5329 16.87C8.5329 16.8167 8.54956 16.7667 8.5829 16.72C8.6629 16.62 8.75956 16.5 8.8729 16.36C8.98623 16.2133 9.09956 16.0667 9.2129 15.92C9.3329 15.7733 9.43623 15.6433 9.5229 15.53C9.46956 15.53 9.39956 15.5333 9.3129 15.54C9.2329 15.5467 9.15956 15.5567 9.0929 15.57C9.02623 15.5767 8.98956 15.58 8.9829 15.58C8.94956 15.58 8.9529 15.5533 8.9929 15.5C9.0329 15.4467 9.08623 15.3933 9.1529 15.34C9.21956 15.2867 9.26956 15.26 9.3029 15.26C9.30956 15.26 9.3629 15.2633 9.4629 15.27C9.5629 15.27 9.63623 15.27 9.6829 15.27C9.81623 15.09 9.94623 14.8833 10.0729 14.65C10.2062 14.4167 10.3362 14.16 10.4629 13.88C10.5162 13.8733 10.6062 13.8367 10.7329 13.77C10.8662 13.6967 10.9696 13.6233 11.0429 13.55C11.0762 13.5167 11.1029 13.5 11.1229 13.5C11.1629 13.5 11.1629 13.5267 11.1229 13.58C11.0762 13.6333 10.9962 13.7467 10.8829 13.92C10.7696 14.0867 10.6429 14.29 10.5029 14.53C10.3629 14.7633 10.2296 15.01 10.1029 15.27H10.9129C10.9862 15.27 11.0229 15.28 11.0229 15.3C11.0229 15.3267 10.9729 15.3533 10.8729 15.38C10.7596 15.4133 10.6396 15.4333 10.5129 15.44C10.3929 15.4467 10.2796 15.46 10.1729 15.48C10.0729 15.5 9.99956 15.5433 9.9529 15.61C9.9129 15.6567 9.85623 15.7567 9.7829 15.91C9.70956 16.0633 9.62956 16.24 9.5429 16.44C9.4629 16.6333 9.3929 16.83 9.3329 17.03C9.2729 17.2233 9.23623 17.3867 9.2229 17.52V17.56C9.2229 17.6133 9.23956 17.6567 9.2729 17.69C9.30623 17.7233 9.33956 17.74 9.3729 17.74C9.45956 17.74 9.56956 17.6867 9.7029 17.58C9.8429 17.4733 9.98623 17.3467 10.1329 17.2C10.2796 17.0467 10.4062 16.9067 10.5129 16.78C10.5596 16.7267 10.5996 16.6767 10.6329 16.63C10.6729 16.5833 10.6962 16.5533 10.7029 16.54C10.7162 16.5667 10.7229 16.5867 10.7229 16.6C10.7229 16.64 10.7096 16.6833 10.6829 16.73C10.6629 16.7767 10.6396 16.8167 10.6129 16.85C10.4862 17.0167 10.3329 17.1933 10.1529 17.38C9.9729 17.56 9.77956 17.7133 9.5729 17.84C9.3729 17.9667 9.16623 18.03 8.9529 18.03Z"
                    fill="#414141" />
                <path
                    d="M11.1053 18.08C10.832 18.08 10.642 18.0267 10.5353 17.92C10.4287 17.8133 10.3753 17.6833 10.3753 17.53C10.3753 17.3367 10.4253 17.13 10.5253 16.91C10.632 16.69 10.732 16.5033 10.8253 16.35C10.932 16.19 11.0753 16.0233 11.2553 15.85C11.4353 15.6767 11.632 15.53 11.8453 15.41C12.0587 15.29 12.2653 15.23 12.4653 15.23C12.6387 15.23 12.7587 15.2733 12.8253 15.36C12.892 15.44 12.9253 15.5367 12.9253 15.65C12.9253 15.8567 12.862 16.0267 12.7353 16.16C12.6153 16.2933 12.4653 16.4033 12.2853 16.49C12.1053 16.57 11.932 16.6367 11.7653 16.69C11.6653 16.7167 11.5487 16.7433 11.4153 16.77C11.282 16.7967 11.1553 16.81 11.0353 16.81C10.9887 16.93 10.952 17.0467 10.9253 17.16C10.8987 17.2733 10.8853 17.3767 10.8853 17.47C10.8853 17.5833 10.912 17.6767 10.9653 17.75C11.0253 17.8233 11.122 17.86 11.2553 17.86C11.3087 17.86 11.372 17.8533 11.4453 17.84C11.5187 17.8267 11.5987 17.8067 11.6853 17.78C11.8853 17.7133 12.082 17.6067 12.2753 17.46C12.4687 17.3133 12.6453 17.1567 12.8053 16.99C12.972 16.8167 13.0987 16.6733 13.1853 16.56C13.2053 16.58 13.2153 16.6033 13.2153 16.63C13.2153 16.6633 13.192 16.7167 13.1453 16.79C13.012 16.9767 12.8387 17.17 12.6253 17.37C12.412 17.57 12.1753 17.74 11.9153 17.88C11.6553 18.0133 11.3853 18.08 11.1053 18.08ZM11.1153 16.61C11.202 16.6167 11.2987 16.6167 11.4053 16.61C11.5187 16.5967 11.6287 16.5733 11.7353 16.54C12.0087 16.46 12.2053 16.3333 12.3253 16.16C12.452 15.98 12.5153 15.82 12.5153 15.68C12.5153 15.6 12.4987 15.5333 12.4653 15.48C12.432 15.4267 12.3787 15.4 12.3053 15.4C12.112 15.4 11.9387 15.4733 11.7853 15.62C11.632 15.76 11.4987 15.9233 11.3853 16.11C11.272 16.2967 11.182 16.4633 11.1153 16.61Z"
                    fill="#414141" />
                <path
                    d="M13.0856 18.14C13.0589 18.14 13.0589 18.1133 13.0856 18.06C13.1189 18 13.1489 17.9333 13.1756 17.86C13.2089 17.7867 13.2422 17.7067 13.2756 17.62C13.3422 17.46 13.4156 17.28 13.4956 17.08C13.5756 16.88 13.6522 16.6867 13.7256 16.5C13.7989 16.3067 13.8622 16.1433 13.9156 16.01C13.9756 15.87 14.0156 15.78 14.0356 15.74C13.9422 15.84 13.8289 15.9667 13.6956 16.12C13.5689 16.2667 13.4489 16.41 13.3356 16.55C13.2222 16.69 13.1356 16.8 13.0756 16.88C13.0556 16.9067 13.0389 16.92 13.0256 16.92C13.0122 16.92 13.0056 16.9033 13.0056 16.87C13.0056 16.8167 13.0222 16.7667 13.0556 16.72C13.1822 16.56 13.3222 16.38 13.4756 16.18C13.6356 15.98 13.7789 15.7967 13.9056 15.63C14.0322 15.4567 14.1122 15.3433 14.1456 15.29C14.2189 15.2767 14.3256 15.2567 14.4656 15.23C14.6122 15.2033 14.7122 15.1667 14.7656 15.12C14.7856 15.1 14.8056 15.09 14.8256 15.09C14.8389 15.09 14.8456 15.1033 14.8456 15.13C14.8522 15.15 14.8456 15.1733 14.8256 15.2C14.7856 15.24 14.7256 15.3267 14.6456 15.46C14.5722 15.5933 14.4889 15.7467 14.3956 15.92C14.3022 16.0933 14.2122 16.26 14.1256 16.42C14.1922 16.32 14.2789 16.2033 14.3856 16.07C14.4989 15.93 14.6222 15.7967 14.7556 15.67C14.8889 15.5367 15.0222 15.4267 15.1556 15.34C15.2956 15.2533 15.4256 15.21 15.5456 15.21C15.6322 15.21 15.7056 15.23 15.7656 15.27C15.8256 15.3033 15.8722 15.3667 15.9056 15.46C15.9256 15.5067 15.9356 15.56 15.9356 15.62C15.9356 15.7333 15.9056 15.8433 15.8456 15.95C15.7922 16.05 15.7522 16.1267 15.7256 16.18C15.7189 16.2 15.6956 16.22 15.6556 16.24C15.6156 16.2533 15.5989 16.2467 15.6056 16.22C15.6122 16.1867 15.6156 16.1533 15.6156 16.12C15.6222 16.0867 15.6256 16.05 15.6256 16.01C15.6256 15.8967 15.6022 15.7933 15.5556 15.7C15.5156 15.6067 15.4389 15.56 15.3256 15.56C15.2189 15.56 15.0889 15.6267 14.9356 15.76C14.7822 15.8933 14.6289 16.0467 14.4756 16.22C14.2822 16.4467 14.1289 16.6633 14.0156 16.87C13.9022 17.07 13.8089 17.2667 13.7356 17.46C13.6956 17.5667 13.6556 17.6733 13.6156 17.78C13.5756 17.88 13.5456 17.96 13.5256 18.02C13.4389 18.0267 13.3522 18.0467 13.2656 18.08C13.1789 18.12 13.1189 18.14 13.0856 18.14Z"
                    fill="#414141" />
                <path
                    d="M16.3202 18.08C16.0468 18.08 15.8568 18.0267 15.7502 17.92C15.6435 17.8133 15.5902 17.6833 15.5902 17.53C15.5902 17.3367 15.6402 17.13 15.7402 16.91C15.8468 16.69 15.9468 16.5033 16.0402 16.35C16.1468 16.19 16.2902 16.0233 16.4702 15.85C16.6502 15.6767 16.8468 15.53 17.0602 15.41C17.2735 15.29 17.4802 15.23 17.6802 15.23C17.8535 15.23 17.9735 15.2733 18.0402 15.36C18.1068 15.44 18.1402 15.5367 18.1402 15.65C18.1402 15.8567 18.0768 16.0267 17.9502 16.16C17.8302 16.2933 17.6802 16.4033 17.5002 16.49C17.3202 16.57 17.1468 16.6367 16.9802 16.69C16.8802 16.7167 16.7635 16.7433 16.6302 16.77C16.4968 16.7967 16.3702 16.81 16.2502 16.81C16.2035 16.93 16.1668 17.0467 16.1402 17.16C16.1135 17.2733 16.1002 17.3767 16.1002 17.47C16.1002 17.5833 16.1268 17.6767 16.1802 17.75C16.2402 17.8233 16.3368 17.86 16.4702 17.86C16.5235 17.86 16.5868 17.8533 16.6602 17.84C16.7335 17.8267 16.8135 17.8067 16.9002 17.78C17.1002 17.7133 17.2968 17.6067 17.4902 17.46C17.6835 17.3133 17.8602 17.1567 18.0202 16.99C18.1868 16.8167 18.3135 16.6733 18.4002 16.56C18.4202 16.58 18.4302 16.6033 18.4302 16.63C18.4302 16.6633 18.4068 16.7167 18.3602 16.79C18.2268 16.9767 18.0535 17.17 17.8402 17.37C17.6268 17.57 17.3902 17.74 17.1302 17.88C16.8702 18.0133 16.6002 18.08 16.3202 18.08ZM16.3302 16.61C16.4168 16.6167 16.5135 16.6167 16.6202 16.61C16.7335 16.5967 16.8435 16.5733 16.9502 16.54C17.2235 16.46 17.4202 16.3333 17.5402 16.16C17.6668 15.98 17.7302 15.82 17.7302 15.68C17.7302 15.6 17.7135 15.5333 17.6802 15.48C17.6468 15.4267 17.5935 15.4 17.5202 15.4C17.3268 15.4 17.1535 15.4733 17.0002 15.62C16.8468 15.76 16.7135 15.9233 16.6002 16.11C16.4868 16.2967 16.3968 16.4633 16.3302 16.61Z"
                    fill="#414141" />
                <path
                    d="M19.6004 18.03C19.5337 18.03 19.4771 18.0167 19.4304 17.99C19.3837 17.9633 19.3604 17.9133 19.3604 17.84C19.3604 17.7467 19.3837 17.64 19.4304 17.52C19.4771 17.4 19.5304 17.2833 19.5904 17.17C19.6504 17.05 19.7037 16.9533 19.7504 16.88C19.5171 17.1267 19.2737 17.36 19.0204 17.58C18.8937 17.6867 18.7537 17.7867 18.6004 17.88C18.4471 17.9733 18.2837 18.02 18.1104 18.02C18.0437 18.02 17.9971 18 17.9704 17.96C17.9437 17.9133 17.9304 17.86 17.9304 17.8C17.9304 17.7667 17.9337 17.7433 17.9404 17.73C17.9737 17.47 18.0571 17.2 18.1904 16.92C18.3237 16.64 18.4871 16.3767 18.6804 16.13C18.8737 15.8833 19.0704 15.6833 19.2704 15.53C19.4971 15.3567 19.7471 15.27 20.0204 15.27H21.1704C21.2037 15.27 21.2204 15.2833 21.2204 15.31C21.2204 15.3633 21.1904 15.39 21.1304 15.39C21.0637 15.39 20.9971 15.4333 20.9304 15.52C20.8637 15.6 20.8137 15.6667 20.7804 15.72C20.7337 15.7933 20.6604 15.9167 20.5604 16.09C20.4604 16.2633 20.3571 16.4533 20.2504 16.66C20.1504 16.86 20.0637 17.0467 19.9904 17.22C19.9171 17.3933 19.8804 17.52 19.8804 17.6C19.8804 17.6933 19.9271 17.74 20.0204 17.74C20.1204 17.74 20.2337 17.6933 20.3604 17.6C20.4871 17.5067 20.6137 17.3933 20.7404 17.26C20.8737 17.12 20.9937 16.9833 21.1004 16.85C21.2137 16.71 21.3037 16.6 21.3704 16.52C21.4104 16.56 21.4071 16.6167 21.3604 16.69C21.3204 16.7567 21.2837 16.81 21.2504 16.85C21.1171 17.0233 20.9637 17.2033 20.7904 17.39C20.6171 17.57 20.4271 17.7233 20.2204 17.85C20.0204 17.97 19.8137 18.03 19.6004 18.03ZM18.5204 17.68C18.6004 17.68 18.7104 17.6233 18.8504 17.51C18.9971 17.39 19.1537 17.2433 19.3204 17.07C19.4871 16.89 19.6437 16.7033 19.7904 16.51C19.9371 16.31 20.0571 16.13 20.1504 15.97C20.2504 15.8033 20.3004 15.6767 20.3004 15.59C20.3004 15.5167 20.2771 15.4667 20.2304 15.44C20.1904 15.4133 20.1371 15.4 20.0704 15.4C19.9637 15.4 19.8471 15.44 19.7204 15.52C19.6004 15.5933 19.5037 15.6667 19.4304 15.74C19.3504 15.8133 19.2537 15.93 19.1404 16.09C19.0337 16.2433 18.9271 16.4133 18.8204 16.6C18.7137 16.7867 18.6237 16.9667 18.5504 17.14C18.4771 17.3133 18.4404 17.4533 18.4404 17.56C18.4404 17.64 18.4671 17.68 18.5204 17.68Z"
                    fill="#414141" />
                <path
                    d="M21.7798 18.16C21.6598 18.16 21.5332 18.1433 21.3998 18.11C21.2665 18.0767 21.1465 18.0233 21.0398 17.95C20.9398 17.87 20.8732 17.7633 20.8398 17.63C20.8332 17.61 20.8298 17.58 20.8298 17.54C20.8298 17.4467 20.8498 17.3433 20.8898 17.23C20.9365 17.1167 20.9932 17.0367 21.0598 16.99C21.0865 16.9767 21.1065 16.9767 21.1198 16.99C21.1398 17.0033 21.1432 17.0167 21.1298 17.03C21.1232 17.05 21.1132 17.0767 21.0998 17.11C21.0865 17.1367 21.0765 17.1667 21.0698 17.2C21.0498 17.3733 21.0865 17.5267 21.1798 17.66C21.2198 17.7133 21.2665 17.7633 21.3198 17.81C21.3798 17.8567 21.4365 17.8967 21.4898 17.93C21.5365 17.9567 21.5932 17.9767 21.6598 17.99C21.7265 17.9967 21.7932 18 21.8598 18C21.9665 18 22.0698 17.9867 22.1698 17.96C22.2698 17.9333 22.3432 17.89 22.3898 17.83C22.4765 17.7233 22.5198 17.6033 22.5198 17.47C22.5198 17.37 22.4932 17.2633 22.4398 17.15C22.3865 17.0367 22.3032 16.9167 22.1898 16.79C22.1165 16.71 22.0465 16.6233 21.9798 16.53C21.9132 16.4367 21.8698 16.3367 21.8498 16.23C21.8432 16.21 21.8365 16.19 21.8298 16.17C21.8298 16.15 21.8298 16.13 21.8298 16.11C21.7432 16.2367 21.6532 16.3567 21.5598 16.47C21.4732 16.5767 21.3965 16.67 21.3298 16.75C21.3032 16.79 21.2798 16.81 21.2598 16.81C21.2465 16.81 21.2398 16.7967 21.2398 16.77C21.2398 16.71 21.2665 16.6467 21.3198 16.58C21.3732 16.52 21.4332 16.4467 21.4998 16.36C21.5665 16.2667 21.6198 16.1933 21.6598 16.14C21.7732 15.9733 21.8565 15.8433 21.9098 15.75C21.9698 15.65 22.0332 15.56 22.0998 15.48C22.1732 15.3933 22.2632 15.3233 22.3698 15.27C22.4832 15.2167 22.5998 15.19 22.7198 15.19C22.8598 15.19 22.9865 15.2133 23.0998 15.26C23.2198 15.3 23.2832 15.4067 23.2898 15.58C23.2898 15.66 23.2732 15.7433 23.2398 15.83C23.2132 15.91 23.1832 15.9867 23.1498 16.06C23.1298 16.1 23.0998 16.13 23.0598 16.15C23.0265 16.1633 23.0098 16.1567 23.0098 16.13C23.0098 16.1033 23.0132 16.0733 23.0198 16.04C23.0265 16.0067 23.0298 15.9767 23.0298 15.95C23.0298 15.8367 23.0098 15.7367 22.9698 15.65C22.9365 15.5567 22.8865 15.49 22.8198 15.45C22.7532 15.4033 22.6832 15.38 22.6098 15.38C22.5032 15.38 22.3998 15.4233 22.2998 15.51C22.1998 15.59 22.1498 15.6967 22.1498 15.83C22.1498 15.8433 22.1498 15.86 22.1498 15.88C22.1498 15.9 22.1532 15.9167 22.1598 15.93C22.1865 16.0367 22.2665 16.1567 22.3998 16.29C22.5332 16.4233 22.6365 16.54 22.7098 16.64C22.8365 16.8133 22.8998 16.99 22.8998 17.17C22.8998 17.35 22.8465 17.5167 22.7398 17.67C22.6398 17.8167 22.5032 17.9333 22.3298 18.02C22.1632 18.1133 21.9798 18.16 21.7798 18.16Z"
                    fill="#414141" />
                <path
                    d="M24.0741 18.08C23.8007 18.08 23.6107 18.0267 23.5041 17.92C23.3974 17.8133 23.3441 17.6833 23.3441 17.53C23.3441 17.3367 23.3941 17.13 23.4941 16.91C23.6007 16.69 23.7007 16.5033 23.7941 16.35C23.9007 16.19 24.0441 16.0233 24.2241 15.85C24.4041 15.6767 24.6007 15.53 24.8141 15.41C25.0274 15.29 25.2341 15.23 25.4341 15.23C25.6074 15.23 25.7274 15.2733 25.7941 15.36C25.8607 15.44 25.8941 15.5367 25.8941 15.65C25.8941 15.8567 25.8307 16.0267 25.7041 16.16C25.5841 16.2933 25.4341 16.4033 25.2541 16.49C25.0741 16.57 24.9007 16.6367 24.7341 16.69C24.6341 16.7167 24.5174 16.7433 24.3841 16.77C24.2507 16.7967 24.1241 16.81 24.0041 16.81C23.9574 16.93 23.9207 17.0467 23.8941 17.16C23.8674 17.2733 23.8541 17.3767 23.8541 17.47C23.8541 17.5833 23.8807 17.6767 23.9341 17.75C23.9941 17.8233 24.0907 17.86 24.2241 17.86C24.2774 17.86 24.3407 17.8533 24.4141 17.84C24.4874 17.8267 24.5674 17.8067 24.6541 17.78C24.8541 17.7133 25.0507 17.6067 25.2441 17.46C25.4374 17.3133 25.6141 17.1567 25.7741 16.99C25.9407 16.8167 26.0674 16.6733 26.1541 16.56C26.1741 16.58 26.1841 16.6033 26.1841 16.63C26.1841 16.6633 26.1607 16.7167 26.1141 16.79C25.9807 16.9767 25.8074 17.17 25.5941 17.37C25.3807 17.57 25.1441 17.74 24.8841 17.88C24.6241 18.0133 24.3541 18.08 24.0741 18.08ZM24.0841 16.61C24.1707 16.6167 24.2674 16.6167 24.3741 16.61C24.4874 16.5967 24.5974 16.5733 24.7041 16.54C24.9774 16.46 25.1741 16.3333 25.2941 16.16C25.4207 15.98 25.4841 15.82 25.4841 15.68C25.4841 15.6 25.4674 15.5333 25.4341 15.48C25.4007 15.4267 25.3474 15.4 25.2741 15.4C25.0807 15.4 24.9074 15.4733 24.7541 15.62C24.6007 15.76 24.4674 15.9233 24.3541 16.11C24.2407 16.2967 24.1507 16.4633 24.0841 16.61Z"
                    fill="#414141" />
            </svg>
        </a>

        <div class="collapse navbar-collapse ms-5" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</span></a>
                </li>
                <li class="nav-item">
                    @if (Auth::user()->type == 'admin')
                        <a class="nav-link" href="{{route('admin.display.package')}}">Catalogue</a>
                    @else
                        <a class="nav-link" href="#">Catalogue</a>
                    @endif

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Review</a>
                </li>
            </ul>
        </div>

        <div class="me-4">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

    </nav>
    @yield('content')
</body>

</html>
