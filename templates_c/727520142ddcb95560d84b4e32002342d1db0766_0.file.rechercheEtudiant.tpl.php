<?php
/* Smarty version 4.3.0, created on 2023-03-28 22:29:10
  from 'C:\Users\Léo\Documents\A2\Bloc4_Web\Project\web_dev\WebDev-mvc\templates\rechercheEtudiant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64234e16250960_06372637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '727520142ddcb95560d84b4e32002342d1db0766' => 
    array (
      0 => 'C:\\Users\\Léo\\Documents\\A2\\Bloc4_Web\\Project\\web_dev\\WebDev-mvc\\templates\\rechercheEtudiant.tpl',
      1 => 1680035346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64234e16250960_06372637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php echo '<script'; ?>
>
    let tab_filtre = [];
    let statement = "";
    function list_checkbox(valeur){
        if(tab_filtre.includes(valeur)){
            let index = tab_filtre.indexOf(valeur);
            if (index > -1) { // only splice array when item is found
                tab_filtre.splice(index, 1); // 2nd parameter means remove one item only
}
        }else{
        tab_filtre.push(valeur);
        }
        console.log(tab_filtre);
    }
    function search(){
        //statement = "";
        console.log("test");
        for(value in tab_filtre){
            statement = statement + " " + tab_filtre[value] + " AND";
            //console.log(tab_filtre[value]);
        }
        statement = statement.substring(0, statement.length - 3);
        //console.log(statement);
        document.location.href="/../index.php/rechercheEtudiant/index?statement="+statement;
    }

    <?php echo '</script'; ?>
>

    <div class="md:hidden flex justify-center mt-4">
        <button onclick="mobileFastSearch()" type="button"
            class="inline-flex items-center justify-center rounded-md bg-gray-300 p-2 text-white-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
            aria-controls="mobile-fast-serach" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <p>Trier Par <i class="fa-solid fa-angle-down"></i></p>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div class="hidden lg:hidden flex justify-center max-[640px]:flex-col max-[640px]:items-center pt-4"
        id="mobile-fast-serach">
        <div class=" flex lg:w-52 md:w-30 my-1 mb-3 cursor-pointer pl-8">
            <div class=" w-36">
                <div class="flex justify-between border-solid border-gray-400 border rounded overflow-hidden h-6"
                    onclick="apparitionM(bool_promoM, 'promotion')">
                    <p id="competence " class="ml-1"> Promotion </p>
                    <p class="bg-gray-100 px-1 font-extralight"><i class="fa-solid fa-chevron-down text-base "></i>
                    </p>
                </div>
                <ul class="hidden" id="liste_promoM">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                        <li><input type="checkbox" value="e.id_classe = '<?php echo $_smarty_tpl->tpl_vars['row']->value->id_classe;?>
'" name="<?php echo $_smarty_tpl->tpl_vars['row']->value->promotion;?>
m" onclick="list_checkbox('e.id_classe = <?php echo $_smarty_tpl->tpl_vars['row']->value->id_classe;?>
')"
                                onclick="filtre(test)"></a>
                            <?php echo $_smarty_tpl->tpl_vars['row']->value->promotion;?>

                            </input></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
        <div class=" flex lg:w-52 md:w-30 my-1 mb-3 cursor-pointer pl-8">
            <div class=" w-36">
                <div class="flex justify-between border-solid border-gray-400 border rounded overflow-hidden h-6"
                    onclick="apparitionM(bool_statutM, 'statut')">
                    <p id="competence " class="ml-1"> Statut </p>
                    <p class="bg-gray-100 px-1 font-extralight"><i class="fa-solid fa-chevron-down text-base "></i>
                    </p>
                </div>
                <ul class="hidden" id="liste_statutM">
                <li><input type="checkbox" name="Acceptém" value="s.statut = 'Accepté'" onclick="list_checkbox('s.statut = Accepté')">Accepté</input></li>
                <li><input type="checkbox" name="En attentem" value="s.statut = 'En attente'" onclick="list_checkbox('s.statut = En attente')">En attente</input></li>
                <li><input type="checkbox" name="En recherchem" value="s.statut = 'En recherche'" onclick="list_checkbox('s.statut = En recherche')">En recherche</input></li>
                </ul>
            </div>
        </div>
        <!--<div class=" flex lg:w-52 md:w-30  my-1 mb-3 cursor-pointer pl-8">
            <div class=" w-36">
                <div class="flex justify-between border-solid border-gray-400 border rounded overflow-hidden h-6"
                    onclick="apparitionM(bool_centreM, 'centre')">
                    <p id="competence " class="ml-1"> Centre </p>
                    <p class="bg-gray-100 px-1 font-extralight"><i class="fa-solid fa-chevron-down text-base "></i>
                    </p>
                </div>
                <ul class="hidden" id="liste_centreM">
                    <li><input type="checkbox">Validé</input></li>
                    <li><input type="checkbox">En attente</input></li>
                    <li><input type="checkbox">En recherche</input></li>
                </ul>
                
            </div>
        </div>-->
    </div>
    </div>
    <form method="POST" action="/../index.php/rechercheEtudiant/index">
        <div class="flex justify-center mt-6">

            <div class="flex flex-col max-[768px]:w-3/4 min-[768px]:w-3/5">

                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://ww  w.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Recherche ton avenir...">
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >Search</button>
                </div>

                <div
                    class="overflow-y-scroll bg-white min-[880px]:max-h-[100%] h-80 border border-[#dfdfdf] mt-6 rounded-md">
                    <ul class="list-disc ">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['etudiant']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                            <li class="flex justify-between px-3 mb-3">
                                <?php echo $_smarty_tpl->tpl_vars['row']->value->prenom_utilisateur;?>

                                <?php echo $_smarty_tpl->tpl_vars['row']->value->nom_utilisateur;?>

                                <div class="px-5">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value->statut;?>

                                </div>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mt-[5%] ml-5 w-1/5 h-1/2 border border-[#dfdfdf] rounded-md">
                <div class="text-center">
                    <p>Trier par</p>
                </div>
                <p class="mt-4 pl-2"> Promotion </p>
                <div class=" flex lg:w-52 md:w-30 my-1 mb-3 cursor-pointer pl-8">
                    <div class=" w-36">
                        <div class="flex justify-between border-solid border-gray-400 border rounded overflow-hidden h-6"
                            onclick="apparition(bool_promo, 'promotion')">
                            <p id="competence " class="ml-1"> Promotion </p>
                            <p class="bg-gray-100 px-1 font-extralight"><i
                                    class="fa-solid fa-chevron-down text-base "></i>
                            </p>
                        </div>
                        <ul class="hidden" id="liste_promo">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                                <li><input type="checkbox" value="e.id_classe = '<?php echo $_smarty_tpl->tpl_vars['row']->value->id_classe;?>
'" name="<?php echo $_smarty_tpl->tpl_vars['row']->value->promotion;?>
" onclick="list_checkbox('e.id_classe = <?php echo $_smarty_tpl->tpl_vars['row']->value->id_classe;?>
')">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value->promotion;?>

                                    </input></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </ul>
                    </div>
                </div>
                <p class="mt-4 pl-2"> Statut </p>
                <div class=" flex lg:w-52 md:w-30 my-1 mb-3 cursor-pointer pl-8">
                    <div class=" w-36">
                        <div class="flex justify-between border-solid border-gray-400 border rounded overflow-hidden h-6"
                            onclick="apparition(bool_statut, 'statut')">
                            <p id="competence " class="ml-1"> Statut </p>
                            <p class="bg-gray-100 px-1 font-extralight"><i
                                    class="fa-solid fa-chevron-down text-base "></i>
                            </p>
                        </div>
                        <ul class="hidden" id="liste_statut">
                            <li><input type="checkbox" name="Accepté" value="s.statut = 'Accepté'" onclick="list_checkbox('s.statut = Accepté')">Accepté</input></li>
                            <li><input type="checkbox" name="En attente" value="s.statut = 'En attente'" onclick="list_checkbox('s.statut = En attente')">En attente</input></li>
                            <li><input type="checkbox" name="En recherche" value="s.statut = 'En recherche'" onclick="list_checkbox('s.statut = En recherche')">En recherche</input></li>
                        </ul>
                        <label onclick="search()" class="border border-2 mt2 border-color-black "> Actualise</label>
                    </div>
                </div>
                <!--<p class="mt-4 pl-2"> Centre </p>
            <div class=" flex lg:w-52 md:w-30  my-1 mb-3 cursor-pointer pl-8">
                <div class=" w-36">
                    <div class="flex justify-between border-solid border-gray-400 border rounded overflow-hidden h-6"
                        onclick="apparition(bool_centre, 'centre')">
                        <p id="competence " class="ml-1"> Centre </p>
                        <p class="bg-gray-100 px-1 font-extralight"><i class="fa-solid fa-chevron-down text-base "></i>
                        </p>
                    </div>
                    <ul class="hidden" id="liste_centre">
                        <li><input type="checkbox">Validé</input></li>
                        <li><input type="checkbox">En attente</input></li>
                        <li><input type="checkbox">En recherche</input></li>
                    </ul>
                </div>
            </div>
        </div>-->
            </div>

        </div>
    </form>
    <?php echo '<script'; ?>
 src="/../script/rechercheEtudiant.js"><?php echo '</script'; ?>
>
    <div><?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
</body><?php }
}
