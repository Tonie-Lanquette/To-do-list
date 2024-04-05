<form action="./traitement.php" method="post" name="newProduct">
    <div class="mb-2 mt-12 text-purlple-red">
        <label class="text-white block ml-4">Name</label>
        <input name="name" type="text" class="title w-72 my-2 ml-4 rounded-md indent-2" required value="2121" />
    </div>
    <div class="my-2">
        <label class="text-white block ml-4">Price</label>
        <input type="text" class="description w-72 my-2 ml-4 rounded-md indent-2" required name="price" value="21" />
    </div>
    <div class="my-2">
        <label class="text-white block ml-4">Description</label>
        <input type="text" class="date w-72 my-2 ml-4 rounded-md indent-2" aria-placeholder="espece" name="description" value="hello" />
    </div>
    <div class="mb-2 text-purlple-red">
        <label class="text-white block ml-4">Category</label>

        <select class="description w-72 my-2 ml-4 rounded-md indent-2" name="id_category">
            <?php
            foreach ($categories as $category) {
                echo "  <option value=" . $category->getId() . ">
                            " . $category->getNameCategory() . "          </option>";
            }
            ?>
        </select>
    </div>
    <div class="my-2">
        <input type="submit" name="newProduct" class="border border-2 border-white text-white rounded-md ml-4 px-2 py-2 my-4" />
    </div>
</form>