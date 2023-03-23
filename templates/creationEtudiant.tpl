{include file="head.tpl"}

<body>
    <div>
        {include file="navbar.tpl"}
        <div class="flex w-[90%] bg-none mx-20 my-[2%] h-screen">
            <div class="flex rounded-md w-[95%] bg-[#fefefe] h-5/6 flex-col content-center flex-wrap">
                <h3 class="text-base xs:text-xl mt-5 text-center content-center"> Création Etudiant </h3>
                <div class=" content-center  w-[95%] sm:w-[70%] lg:w-[50%] xl:w-[40%]">
                    <form name="creation_enteprise" action="creation_entreprise.php" id="creation_entreprise"
                        method="post" class="">
                        <label name="nom_étudiant" class="my-1"> Nom étudiant </label>
                        <input type="text" name="nom_étudiant" placeholder="Nom étudiant"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                        <label name="prenom_etudiant" class="my-1"> Prénom étudiant
                        </label>
                        <input type="text" name="prenom_etudiant" placeholder="Prénom étudiant"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-4">

                        <select id="selectCentre" name="centre" size="1" value="centre"
                            class="flex justify-between border-solid border-gray-400 border rounded mb-4 w-24"
                            onclick="selectScroll('centre')">
                            <option onclick="setValueSelect('centre')">Centre</option>
                            <option onclick="setValueSelect('Orleans')">Orléans</option>
                            <option onclick="setValueSelect('Nanterre')">Nanterre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Centre</option>
                            <option onclick="setValueSelect('Nanterre')">Orléans</option>
                            <option onclick="setValueSelect('Nanterre')">Nanterre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>

                        </select>
                        <select id="selectPromo" name="promo" size="1" value="promo"
                            class="flex justify-between border-solid border-gray-400 border rounded mb-4 w-24"
                            onclick="selectScroll('promo')">
                            <option onclick="setValuePromo('Promo')">Promo</option>
                            <option onclick="setValuePromo('CPI A2')">CPI A2</option>
                            <option onclick="setValuePromo('CPI A3')">CPI A3</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Centre</option>
                            <option onclick="setValuePromo('Nanterre')">Orléans</option>

                        </select>
                        <label name="login" class="my-1"> Login </label>
                        <input type="text" name="login" placeholder="login"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                        <label name="mdp" class="my-1"> Mot de passe 
                        </label>
                        <input type="text" name="mdp"
                            placeholder="************"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                        <div class="flex  justify-evenly mt-5">
                            <button type="reset" name="reset"
                                class="border border-solid border-gray-500 p-1  rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer">
                                Annuler
                            </button>
                            <button type="submit" name="valider "
                                class="border border-solid border-gray-500 p-1 rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer">
                                Valider
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <script>
            let boolCentre = true;
            let boolPromo = true;

            function selectScroll(stringSelect) {

                if (stringSelect === 'centre') {
                    if (boolSelect) {
                        selectCentre.setAttribute("class",
                            "flex justify-between border-solid border-gray-400 border rounded absolute mb-4 w-24");
                        selectCentre.setAttribute("size",
                            "5")
                        boolCentre = !boolCentre;
                    } else {
                        boolCentre = !boolCentre;
                    }
                } else if (stringSelect === 'promo') {
                    if (boolSelect) {
                        selectPromo.setAttribute("class",
                            "flex justify-between border-solid border-gray-400 border rounded absolute mb-4 w-24");
                        selectPromo.setAttribute("size",
                            "5")
                        boolPromo = !boolPromo;
                    } else {
                        boolPromo = !boolPromo;
                    }
                }
            }

            function setValueSelect(centre) {
                selectCentre.setAttribute("value", centre);
                selectCentre.setAttribute("size", "1");
                selectCentre.setAttribute("class", "flex justify-between border-solid border-gray-400 border rounded");
            }

            function setValuePromo(centre) {
                selectPromo.setAttribute("value", centre);
                selectPromo.setAttribute("size", "1");
                selectPromo.setAttribute("class", "flex justify-between border-solid border-gray-400 border rounded");
            }
        </script>
</div>