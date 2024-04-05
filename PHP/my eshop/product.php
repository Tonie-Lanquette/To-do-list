<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My product</title>
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register a product</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <div class="space-y-6">


                <div>
                    <label for="productName" class="block text-sm font-medium leading-6 text-gray-900">Product name</label>
                    <div class="mt-2">
                        <input id="productName" name="productName" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6 indent-3 productName">
                    </div>
                </div>

                <div>
                    <label for="productPrice" class="block text-sm font-medium leading-6 text-gray-900">Product price</label>
                    <div class="mt-2">
                        <input id="productPrice" name="productPrice" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6 indent-3 productPrice">
                    </div>
                </div>

                <div>
                    <label for="productQuantity" class="block text-sm font-medium leading-6 text-gray-900">Product quantity</label>
                    <div class="mt-2">
                        <input id="productQuantity" name="productQuantity" type="number" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6 indent-3 productQuantity">
                    </div>
                </div>

                <div>
                    <button onclick="addProduct()" class="flex w-full justify-center rounded-md bg-orange-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Add product</button>
                </div>
                <div>
                    <button onclick="getProduct()" class="flex w-full justify-center rounded-md bg-orange-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600 mt-8 mb-4">Get products</button>

                    <div class="cards">
                    </div>

                </div>
                <div class="cards flex items-center flex-wrap justify-evenly">

                </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="./script.js"></script>

</html>