{include file="head.tpl"}

<body>
    <div>
        {include file="navbar.tpl"}
        <div class="flex w-[90%] bg-none mx-20 my-[2%] ">
        <div class="flex rounded-md w-[95%] bg-[#fefefe] h-5/6 flex-col content-center flex-wrap">
            <h3 class="text-base xs:text-xl mt-5 text-center content-center"> Création Entreprise </h3>
            <div class=" content-center  w-[95%] sm:w-[70%] lg:w-[50%] xl:w-[40%]">
                <form name="creation_enteprise" action="CreationEntreprise/createEntreprise" id="creation_entreprise" method="post" class="">
                    <label name="nom_entreprise" class="my-1"> Nom entreprise </label>
                    <input type="text" name="nom_entreprise" placeholder="Nom entreprise"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="secteur_activite" class="my-1"> Secteur d'activité </label>
                    <input type="text" name="secteur_activite" placeholder="Secteur d'activité"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="localite" class="my-1"> Localité </label>
                    <input type="text" name="localite" placeholder="localite"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="CP" class="my-1"> Code Postal </label>
                    <input type="number" name="CP" placeholder="CP"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="nb_ancien_stagiaire" class="my-1"> Nombre d'anciens stagiaires venant de CESI </label>
                    <input type="text" name="nb_ancien_stagiaire"
                        placeholder="Nombre d'anciens stagiaires venant de CESI"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">
                        <p class="my-1">Confiance du pilote</p>
                    <div class="" >
                        <i class="fa fa-star cursor-pointer text-yellow-300" name="star1" id="star1" onclick="star(1)"></i>
                        <i class="fa fa-star cursor-pointer text-black" name="star2" id="star2" onclick="star(2)"></i>
                        <i class="fa fa-star cursor-pointer text-black" name="star3" id="star3" onclick="star(3)"></i>
                        <i class="fa fa-star cursor-pointer text-black" name="star4" id="star4" onclick="star(4)"></i>
                        <i class="fa fa-star cursor-pointer text-black" name="star5" id="star5" onclick="star(5)"></i>
                    </div>
                    <input type="hidden" name="confiance" value="1" id="confiance"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <div class="flex  justify-evenly mt-5">
                        <button type="reset" name="reset"
                            class="border border-solid border-gray-500 p-1  rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer"> Annuler
                        </button>
                        <button type="submit" name="valider"
                            class="border border-solid border-gray-500 p-1 rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer"> Valider
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
<script>

    let star_value;

    function star(etoile){
        switch(etoile){
            case 5:
                star5.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                star4.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                star3.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                star2.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                star1.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
            break;
            case 4:
                star5.setAttribute("class", "fa fa-star text-black cursor-pointer");
                star4.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                star3.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                star2.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                star1.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
            break;
            case 3:
                star5.setAttribute("class", "fa fa-star text-black cursor-pointer");
                star4.setAttribute("class", "fa fa-star text-black cursor-pointer");
                star3.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                star2.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                star1.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
            break;
            case 2:
                star5.setAttribute("class", "fa fa-star text-black cursor-pointer");
                star4.setAttribute("class", "fa fa-star text-black cursor-pointer");
                star3.setAttribute("class", "fa fa-star text-black cursor-pointer");
                star2.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                star1.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
            break;
            case 1:
                star5.setAttribute("class", "fa fa-star text-black cursor-pointer");
                star4.setAttribute("class", "fa fa-star text-black cursor-pointer");
                star3.setAttribute("class", "fa fa-star text-black cursor-pointer");
                star2.setAttribute("class", "fa fa-star text-black cursor-pointer");
                star1.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
            break;
           
        };
        star_value = etoile;
        confiance.setAttribute("value", star_value);
       };

</script>
</div>
{include file="footer.tpl"}
</body>
</html>
