<form action="/restaurants/">
    <div class="p-14">
        <div >
            <h1 class="text-bold text-pink-800 text-2xl pb-2">Cuisines</h1>
            <div class=" w-36">
                <div class="py-1">
                    <input type="radio" value="Khmer" name="cuisines"/>
                    <label>Khmer</label>
                </div>
                <div class="py-1">
                    <input type="radio" value="Western" name="cuisines"/>
                    <label>Western</label>
                </div>
                <div class="py-1">
                    <input type="radio" value="Chinese" name="cuisines"/>
                    <label>Chinese</label>
                </div>
                <div class="py-1">
                    <input type="radio" value="Vietnamese" name="cuisines"/>
                    <label>Vietnamese</label>
                </div>
                <div class="py-1">
                    <input type="radio" value="International" name="cuisines"/>
                    <label>International</label>
                </div>
            </div>
        </div>
        <div class="pt-4 w-36">
            <h1 class="text-bold text-pink-800 text-2xl pb-2">Dress Code</h1>
            <div class="flex-col">
                <div class="py-1">
                    <input type="radio" value="Casual" name="dress_code"/>
                    <label>Casual</label>
                </div>
                <div class="py-1">
                    <input type="radio" value="Business Casual" name="dress_code"/>
                    <label>Business Casual</label>
                </div>
                <div class="py-1">
                    <input type="radio" value="Casual Elegant" name="dress_code"/>
                    <label>Casual Elegant</label>
                </div>
                <div class="py-1">
                    <input type="radio" value="Formal" name="dress_code"/>
                    <label>Formal</label>
                </div>
                <div class="py-1">
                    <input type="radio" value="Jacket" name="dress_code"/>
                    <label>Jacket</label>
                </div>
            </div>
            <button type="submit" class="border-2 border-blue-300 px-4 rounded hover:bg-blue-300">
                Search
            </button>
        </div>
    </div>
</form>
