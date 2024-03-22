<?php

use src\Classes\DbConnexion;
use src\Repositories\CategoryRepository;
use src\Repositories\PriorityRepository;
use src\Repositories\UserRepository;

require __DIR__ . "/../src/autoload.php";

$dbConnexion = new DbConnexion();
$user = new UserRepository($dbConnexion);

$categoryRepository =   new CategoryRepository($dbConnexion);
$categories = $categoryRepository->getAllCategories();

$priorityRepository =   new PriorityRepository($dbConnexion);
$priorities = $priorityRepository->getAllPriorities();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list </title>
</head>

<body class="relative">



    <!-- Creat Account Modal -->
    <div id="creatAccount" class="modal absolute top-0 w-screen min-h-screen z-20 bg-green-300 ">
        <div class="flex flex-col justify-center lg:px-8 w-1/2 mx-auto">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 uppercase text-black text-s font-bold">Creat account</h2>
            </div>
            <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                <div class="space-y-6">

                    <div>
                        <label for="lastName" class="block text-sm font-medium leading-6 text-gray-900 uppercase text-black text-s font-semibold">Last Name</label>
                        <div class="mt-2">
                            <input id="lastName" name="lastName" type="texte" required class="block w-full bg-orange-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-green-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-300 sm:text-sm sm:leading-6 indent-3 lastNameInput">
                        </div>
                    </div>

                    <div>
                        <label for="firstName" class="block text-sm font-medium leading-6 text-gray-900 uppercase text-black text-s font-semibold">First Name</label>
                        <div class="mt-2">
                            <input id="firstName" name="firstName" type="texte" required class="block w-full bg-orange-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-green-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-300 sm:text-sm sm:leading-6 indent-3 firstNameInput">
                        </div>
                    </div>

                    <div>
                        <label for="creatEmail" class="block text-sm font-medium leading-6 text-gray-900 uppercase text-black text-s font-semibold">Email address</label>
                        <div class="mt-2">
                            <input id="creatEmail" name="creatEmail" type="email" autocomplete="email" required class="block w-full bg-orange-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-green-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-300 sm:text-sm sm:leading-6 indent-3 creatEmailInput">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="creatPassword" class="block text-sm font-medium leading-6 text-gray-900 uppercase text-black text-s font-semibold">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="creatPassword" name="creatPassword" type="password" autocomplete="current-password" required class="block w-full bg-orange-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-green-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-300 sm:text-sm sm:leading-6 indent-3 creatPasswordInput ">
                        </div>
                    </div>

                    <div>
                        <button onclick="register()" class="mt-14 mb-10 flex w-full justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 uppercase text-white text-s font-semibold">Creat account</button>
                    </div>

                    <div>
                        <button onclick="loginModal()" class=" flex w-full justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 uppercase text-white text-s font-semibold">Already member ? Just login</button>
                    </div>

                </div>
            </div>
        </div>
        <p class="toast text-red w-1/2 h-20 mx-auto"></p>
    </div>








    <!-- Login modal -->
    <div id="modalLogin" class="modal absolute top-0 w-screen h-screen z-10 bg-green-300 ">
        <div class="flex flex-col justify-center px-6  py-12 lg:px-8 w-1/2 mx-auto">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 uppercase text-black text-s font-bold">Login</h2>
            </div>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

                <div class="space-y-6">

                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900 uppercase text-black text-s font-semibold">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full bg-orange-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-green-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-300 sm:text-sm sm:leading-6 indent-3 emailInput">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900 uppercase text-black text-s font-semibold">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full bg-orange-50 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-green-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-300 sm:text-sm sm:leading-6 indent-3 passwordInput">
                        </div>
                    </div>

                    <div>
                        <button onclick="loginAccount()" class=" mt-14 mb-10 flex w-full justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 uppercase text-white text-s font-semibold">Login</button>
                    </div>
                    <div>
                        <button onclick="creatModal()" class=" mb-10 flex w-full justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 uppercase text-white text-s font-semibold">Not a member ? Creat an account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-- Main page -->
    <main id="main" class="main hidden">
        <div class="bg-lime-50 flex">
            <div class="h-dvh w-2/5"></div>
            <div class=" h-dvh w-1/5 flex-col flex items-center bg-green-300 justify-between fixed ">
                <div class="w-4/6 flex flex-col items-center">
                    <div class="h-40 w-40 bg-lime-50 my-8 rounded-full"></div>
                    <div class="w-full h-10 bg-lime-50 rounded-full mt-6 text-center pt-2 uppercase text-black text-s font-semibold">
                        <?php
                        // echo "<p>" . $user->getFirstNameUser() . "</p>" 
                        ?>
                    </div>
                    <div class="w-full h-10 bg-lime-50 rounded-full mt-6 text-center pt-2 uppercase text-black text-s font-semibold">
                        <?php
                        // echo "<p>" . $user->getLastNameUser() . "</p>" 
                        ?>
                    </div>
                </div>
                <div class="mt-60 h-10 mb-8 w-4/6 bg-green-600 rounded-full hover:bg-green-500">
                    <p class="leading-6 pt-2 text-center uppercase text-white text-xs font-bold">Log out</p>
                </div>
            </div>



            <div class="flex flex-col items-center">

                <form class="flex flex-col w-3/5 bg-green-300 rounded-xl my-10  px-20 items-center" id="addTaskForm" action="" method="POST">
                    <p class="uppercase text-black text-s font-bold mb-8 mt-10">Add task :</p>
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-black text-xs font-bold mb-2" for="namePriority">Priority :</label>
                        <select id="namePriority" class="border-0 px-3 py-3 rounded text-sm shadow w-full bg-green-50" name="namePriority" required>
                            <?php
                            foreach ($priorities as $priority) {
                                echo " <option value=" . $priority->getIdPriority() . ">
                            " . $priority->getNamePriority() . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-black text-xs font-bold mb-2" for="nameTask">Name :</label>
                        <input type="text" name="nameTask" id="nameTask" class="border-0 px-3 py-3 rounded text-sm shadow w-full
                    bg-green-50" placeholder="Grocery Store" required />
                    </div>
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-black text-xs font-bold mb-2" for="categoryTask">Category :</label>
                        <select id="categoryTask" class="border-0 px-3 py-3 rounded text-sm shadow w-full bg-green-50" name="categoryTask" required>
                            <?php
                            foreach ($categories as $category) {
                                echo "  <option value=" . $category->getIdCategory() . ">
                            " . $category->getNameCategory() . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-black text-xs font-bold mb-2" for="descriptionTask">Description :</label>
                        <textarea maxlength="300" name="descriptionTask" id="descriptionTask" rows="4" cols="80" class="border-0 px-3 py-3 rounded text-sm shadow w-full bg-green-50" placeholder="Go to the supermarket"></textarea>
                    </div>
                    <button id="addTask" class="mt-10 h-10 mb-8 w-4/6 bg-green-600 rounded-full hover:bg-green-500 uppercase text-white text-xs font-bold mb-8" type="submit">Submit
                    </button>
                </form>




                <div class="flex flex-col min-h-dvh max-h-max w-3/5 bg-green-300 rounded-xl my-10 py-10 items-center">
                    <p class="uppercase text-black text-s font-bold">To do list :</p>
                    <div class="bg-green-50 border-l-8 border-green-500 rounded-md mt-10 mx-12 px-3 py-2 shadow ">
                        <p class="bg-green-200 rounded-full px-4 max-w-fit my-4 uppercase text-black text-s font-bold ">Titre</p>
                        <p class="bg-green-200 rounded-full px-4 max-w-fit my-4 uppercase text-black text-s font-semibold">Category</p>
                        <p class="bg-green-200 rounded-xl px-4 py-2 my-4 max-w-max text-black text-s">Une épingle est un petit objet filiforme utilisé pour maintenir ensemble des objets. Elle est pointue d'un côté et a une tête de l'autre côté. Sa qualification, la forme de sa tête et la longueur de sa pointe changent avec sa fonction. </p>
                    </div>
                    <div class="bg-green-50 border-l-8 border-green-500 rounded-md mt-10 mx-12 px-3 py-2 shadow ">
                        <p class="bg-green-200 rounded-full px-4 max-w-fit my-4 uppercase text-black text-s font-bold ">Titre</p>
                        <p class="bg-green-200 rounded-full px-4 max-w-fit my-4 uppercase text-black text-s font-semibold">Category</p>
                        <p class="bg-green-200 rounded-xl px-4 py-2 my-4 max-w-max text-black text-s">Une épingle est un petit objet filiforme utilisé pour maintenir ensemble des objets. Elle est pointue d'un côté et a une tête de l'autre côté. Sa qualification, la forme de sa tête et la longueur de sa pointe changent avec sa fonction. </p>
                    </div>
                    <div class="bg-green-50 border-l-8 border-green-500 rounded-md mt-10 mx-12 px-3 py-2 shadow ">
                        <p class="bg-green-200 rounded-full px-4 max-w-fit my-4 uppercase text-black text-s font-bold ">Titre</p>
                        <p class="bg-green-200 rounded-full px-4 max-w-fit my-4 uppercase text-black text-s font-semibold">Category</p>
                        <p class="bg-green-200 rounded-xl px-4 py-2 my-4 max-w-max text-black text-s">Une épingle est un petit objet filiforme utilisé pour maintenir ensemble des objets. Elle est pointue d'un côté et a une tête de l'autre côté. Sa qualification, la forme de sa tête et la longueur de sa pointe changent avec sa fonction. </p>
                    </div>


                </div>
            </div>
        </div>

    </main>


</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://kit.fontawesome.com/91edd70f05.js" crossorigin="anonymous"></script>
<script src="./js/creatAccount.js"></script>
<script src="./js/login.js"></script>

</html>