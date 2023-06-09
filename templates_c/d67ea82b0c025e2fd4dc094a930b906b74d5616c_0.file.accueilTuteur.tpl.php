<?php
/* Smarty version 4.3.0, created on 2023-03-27 11:25:44
  from 'C:\Users\Léo\Documents\A2\Bloc4_Web\Project\project_git\WebDev-mvc\templates\accueilTuteur.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64216118817d43_88371505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd67ea82b0c025e2fd4dc094a930b906b74d5616c' => 
    array (
      0 => 'C:\\Users\\Léo\\Documents\\A2\\Bloc4_Web\\Project\\project_git\\WebDev-mvc\\templates\\accueilTuteur.tpl',
      1 => 1679909142,
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
function content_64216118817d43_88371505 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!--Bouton raccourci-->
    <div class="flex flex-row flex-wrap justify-center min-[880px]:justify-evenly content-evenly ">
        <!--Bouton Raccourci Étudiant-->
        <div class=" flex flex-col max-[880px]:w-7/12 w-3/12 mt-6">

            <div
                class="flex flex-col justify-center content-center text-center  bg-[#67ade5] border border-[#dfdfdf]  rounded-t-lg ">
                <i class="fa-solid fa-user-graduate text-2xl"></i>
                <p class="">Étudiant</p>
            </div>
            <div
                class="flex justify-between items-center bg-[#fafafa] divide-x divide-[#cccccc] max-[880px]:h-10 h-20 rounded-b-lg border border-[#dfdfdf] shrink">

                <div class="flex justify-center items-center max-[880px]:h-8 h-14 shrink basis-1/2 cursor-pointer">
                    <a href="rechercheEtudiant/index">
                        <p class="text-center ">Gestion Étudiant</p>


                    </a>
                </div>
                <div class="flex justify-center items-center max-[880px]:h-8 h-14 shrink basis-1/2 cursor-pointer">
                    <a href="rechercheEtudiant/index">
                        <p class="text-center ">Statut Recherche</p>
                    </a>
                </div>
            </div>
        </div>
        <!--Bouton Raccourci Offre-->
        <div class="flex flex-col max-[880px]:w-7/12 w-3/12 mt-6">

            <div
                class="flex flex-col justify-center content-center border border-[#dfdfdf] text-center bg-[#fe7171]  rounded-t-lg ">
                <i class="fa-solid fa-briefcase text-2xl"></i>
                <p class="">Offre</p>
            </div>
            <div class="flex items-center justify-around flex-wrap border border-[#dfdfdf] bg-[#fafafa]  rounded-b-lg ">
                <a href="rechercheStage/index">
                    <div class="flex items-center max-[880px]:h-10 h-20 cursor-pointer">
                        <p>Recherche Stage</p>
                    </div>
                </a>
            </div>
        </div>
        <!--Bouton Raccourci Entreprise-->
        <div class="flex flex-col max-[880px]:w-7/12  w-3/12 mt-6 ">

            <div
                class="flex flex-col justify-center content-center text-center border border-[#dfdfdf] bg-[#ffe96b] rounded-t-lg ">
                <i class="fa-solid fa-building text-2xl"></i>
                <p class="">Entreprise</p>
            </div>
            <div class="flex justify-around flex-wrap border border-[#dfdfdf] bg-[#fafafa] rounded-b-lg ">
                <a href="vueEntreprise/index">
                    <div class="flex items-center max-[880px]:h-10 h-20 cursor-pointer">
                        <p>Gestion Entreprise</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--Statut étudiant + statistiques -->
    <div
        class=" flex justify-evenly  max-[880px]:flex-col max-[880px]:items-center min-[880px]:items-end flex-wrap h-3/6 ">
        <!--Statut étudiant-->
        <div class="  w-8/12 min-[880px]:w-5/12 ml-5 mt-10 h-96 ">
            <div class="h-16 bg-white border border-[#dfdfdf] flex items-center justify-center ">
                <h3 class="text-center">En recherche</h3>
            </div>
            <div class="overflow-y-scroll bg-white min-[880px]:max-h-[100%] h-80 border border-[#dfdfdf]">
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

                            <div class="rounded-full bg-red-200 px-5">
                                En recherche</div>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
        <!--Statistiques-->
        <div
            class="flex items-center flex-col w-8/12 min-[880px]:w-5/12 ml-5 mt-10 h-96 bg-white border border-[#dfdfdf] overflow-hidden ">
            <div class="h-10 self-start mt-2">
                <p class="px-10">
                    <i class="fa-solid fa-circle-info text-2xl"></i>Statut recherches étudiants :
                </p>
            </div>
            <div class="bg-white h-32 w-10/12 divide-y mt-2">
                <div class="h-10 flex items-center justify-between">
                    <p>Stage trouvé :</p>
                    <div class="rounded-full bg-green-200 px-5"> <?php echo $_smarty_tpl->tpl_vars['stage_trouve']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['tot_eleve']->value;?>
 </div>
                </div>
                <div class="h-10 flex items-center justify-between">
                    <p>En attente de papier :</p>
                    <div class="rounded-full bg-orange-200 px-5"> <?php echo $_smarty_tpl->tpl_vars['stage_attente']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['tot_eleve']->value;?>
</div>
                </div>
                <div class="h-10 flex items-center justify-between">
                    <p>En recherche</p>
                    <div class="rounded-full bg-red-200 px-5"> <?php echo $_smarty_tpl->tpl_vars['stage_recherche']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['tot_eleve']->value;?>
</div>
                </div>
            </div>
            <div class="min-[880px]:pt-10">
                <canvas id="graph" width="100%" height="100%" style="display: block; height: 66px; width: 133px;"
                    class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>



    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        const graph = document.getElementById("graph").getContext("2d");

        let massPopChart = new Chart(graph, {
            type: "doughnut", // bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data: {
                datasets: [{
                    label: "Population en M ",
                    data: [<?php echo $_smarty_tpl->tpl_vars['stage_recherche']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['stage_attente']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['stage_trouve']->value;?>
],
                    // backgroundColor: "blue",
                    backgroundColor: [
                        "red",
                        "orange",
                        "green",
                    ],
                    hoverBorderWidth: 3,
                }, ],
            },
        });
    <?php echo '</script'; ?>
>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</body>

</html><?php }
}
