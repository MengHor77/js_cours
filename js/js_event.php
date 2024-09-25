<?php
// PHP logic here if needed
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello JS</title>
    <!-- Tailwind CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <!-- Local Tailwind Styles -->
    <link rel="stylesheet" href="../dist/styles.css">
    <!-- Iconify and FontAwesome -->
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.3/css/all.min.css">
    <style>
    .hidden-text {
        display: none;
        /* Hides the text */

    }

    .transition-opacity {
        transition: opacity 0.2s ease;
    }
    </style>
</head>

<body>
    <div class="bg-red-700 w-full flex flex-row gap-1 ">
        <!-- Sidebar -->
        <div id="menu_bar" class="w-[20%] h-screen bg-gray-300 flex flex-col gap-2">
            <div class="w-full h-10 flex  flex-row  gap-2   items-center font-bold text-xl px-2   bg-blue-300 hover:bg-blue-500  ">
                <span class="iconify w-7 h-7 hover:cursor-pointer" data-icon="ant-design:home-filled"
                    data-inline="false"></span>
                <h1>Dashboard</h1>
            </div>
            <!-- Sidebar Links -->
            <div
                class="  flex flex-row  gap-2  px-2 bg-blue-300 hover:bg-blue-500 text-xl font-bold transition-opacity">
                <span class="iconify w-7 h-7  hover:cursor-pointer" data-icon="dashicons:category"
                    data-inline="false"></span>
                <h1>Category</h1>
            </div>
            <div
                class="  flex flex-row px-2 gap-2 w-full bg-blue-300 hover:bg-blue-500 text-xl font-bold transition-opacity">
                <span class="iconify w-7 h-7 hover:cursor-pointer"
                    data-icon="streamline:decent-work-and-economic-growth-solid" data-inline="false"></span>
                <h1>Sell</h1>
            </div>
            <div class=" flex flex-row px-2   gap-2   w-full bg-blue-300 hover:bg-blue-500 text-xl font-bold">
                <span class="iconify w-7 h-7 hover:cursor-pointer" data-icon="icon-park-outline:buy"
                    data-inline="false"></span>
                <h1>Purchase</h1>
            </div>
            <div
                class=" flex flex-row  px-2   gap-2  w-full bg-blue-300 hover:bg-blue-500 text-xl font-bold  transition-opacity">
                <span class="iconify w-7 h-7 hover:cursor-pointer" data-icon="icomoon-free:cart"
                    data-inline="false"></span>
                <h1>Cart</h1>
            </div>
            <div
                class=" flex flex-row  px-2   gap-2  w-full bg-blue-300 hover:bg-blue-500 text-xl font-bold  transition-opacity">
                <span class="iconify w-7 h-7 hover:cursor-pointer" data-icon="fontisto:product-hunt"
                    data-inline="false"></span>
                    
                <h1>Product Update</h1>
            </div>
        </div>

        <!-- Main Content Area -->
        <div id="icon_menu" class="w-full h-screen bg-gray-300 relative transition-width duration-1000">
            <span class="iconify bg-blue-500 absolute left-1 top-1 w-7 h-7 hover:cursor-pointer"
                data-icon="material-symbols:menu" data-inline="false"></span>
            <div>

            </div>
        </div>
    </div>
    <script>
    // Select the elements
    const menu_bar = document.getElementById('menu_bar');
    const icon_menu = document.getElementById('icon_menu');
    const textElements = menu_bar.querySelectorAll('h1'); // Select all text elements
    const iconContainers = menu_bar.querySelectorAll('.flex-row'); // Select all icon containers

    // Toggle width class on click
    icon_menu.addEventListener('click', function() {
        if (menu_bar.classList.contains('w-[20%]')) {
            // Change to narrow width
            menu_bar.classList.remove('w-[20%]');
            menu_bar.classList.add('w-20');
            textElements.forEach(text => text.classList.add('hidden-text')); // Hide text
            iconContainers.forEach(container => {
                container.classList.remove('justify-start'); // Remove left alignment
                container.classList.add('justify-center'); // Center the icons
            });
        } else {
            // Change to wide width
            menu_bar.classList.remove('w-20');
            menu_bar.classList.add('w-[20%]');
            textElements.forEach(text => text.classList.remove('hidden-text')); // Show text
            iconContainers.forEach(container => {
                container.classList.remove('justify-center'); // Remove center alignment
                container.classList.add('justify-start'); // Reset to left alignment
            });
        }
    });
    </script>
</body>


</html>