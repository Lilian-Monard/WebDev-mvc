<?php
/* Smarty version 4.3.0, created on 2023-03-29 10:04:43
  from 'C:\Users\daval\Documents\CESI\Projet\WebDev-mvc\templates\accueilEtudiant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6423f11b6352a6_81013747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa4824c1282954c9cf662ff2f63a65d66819d984' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\CESI\\Projet\\WebDev-mvc\\templates\\accueilEtudiant.tpl',
      1 => 1680077078,
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
function content_6423f11b6352a6_81013747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div
        
        class="flex sm:flex-wrap sm:justify-between lg:mr-[7%] lg:ml-[10%] mt-5 md:ml-[10%] sm:mx-[3%] md:mr-[5%] lg:mt-6 flex-col sm:flex-row">
        <div class="rounded-md w-[90%] sm:w-[30%] h-[8rem] bg-white mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] border border-[#dfdfdf]">
            <div
                class="rounded-t-md h-1/2 bg-[#67ace6] text-2xl flex flex-col justify-center text-center content-center">
                <i class=" fa-solid fa-user-graduate "></i>
                <p class="text-base">Etudiant</p>
            </div>
            <div class="rounded-b-md flex h-1/2 divide-x py-2">
                <div
                    class="rounded-bl-md border-gray-300 w-1/2 bg-[#fafafa] flex flex-col justify-center text-center content-center">
                    <p>Candidatures</p>
                </div>
                <div
                    class="rounded-br-md border-gray-300 w-1/2 bg-[#fafafa] flex flex-col justify-center text-center content-center hidden">
                    <select id="statut-0" class="rounded-full bg-red-400 text-center mx-2 us" onchange="staut(this.id)">
                        <option class="bg-white" value="En Recherche">En Recherche</option>
                        <option class="bg-white" value="Validé">Validé</option>
                    </select>
                </div>


            </div>
        </div>
        <div class="rounded-md w-[90%] sm:w-[30%] h-[8rem]  bg-gray-300 mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] border border-[#dfdfdf]">
            <div
                class="rounded-t-md h-1/2 sm:h-1/2 md:h-1/2 lg:h-[45] bg-[#fe7171] text-2xl flex flex-col justify-center text-center content-center ">
                <i class="fa-solid fa-briefcase"></i>
                <p class="text-base">Stage</p>
            </div>
            <div
                class="rounded-b-md h-1/2 sm:h-1/2 md:h-1/2 lg:h-[45] bg-[#fafafa] flex flex-col justify-center text-center content-center">
                <a href="/../index.php/rechercheStage"><p>Parcourir les offres</p></a>
            </div>
        </div>
        <div class="rounded-md w-[90%] sm:w-[30%] h-[8rem]  bg-gray-300 mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] flex ">
            <div class="rounded-l-md w-1/2  flex items-center pb-2 max-[270px]:-ml-6">
                <div class="lg:pl-6 md:pl-1 sm:pl-0 pl-7 ">
                    <canvas id="graph" width="100%" height="100%"
                        class="block chartjs-render-monitor md:h-[100px] md:w-[115px] "></canvas>
                </div>
            </div>
            <div class="rounded-r-md w-1/2 lg:pr-4 md:pr-2 pr-0 pt-2 max-[270px]:w-[60%] max-[270px]:pl-1 ">
                <p class="lg:text-[15px] md:text-[12px] sm:text-[11px] text-[14px]">Vous avez postulé à</p>
                <p class="lg:text-[14px] md:text-[11px] sm:text-[10px] text-[13px] pl-3"><strong
                        class="lg:text-[15px] md:text-[14px] sm:text-[12px] text-[14px]"><?php echo $_smarty_tpl->tpl_vars['NbOffre']->value;?>
</strong> offres</p>
                <p class="lg:text-[15px] md:text-[12px] sm:text-[11px] text-[14px]">Vous avez</p>
                <p class="lg:text-[14px] md:text-[11px] sm:text-[10px] text-[13px] pl-3"><strong
                        class="lg:text-[15px] md:text-[14px] sm:text-[12px] text-[14px]"><?php echo $_smarty_tpl->tpl_vars['NbWaiting']->value;?>
</strong> en attente</p>
                <p class="lg:text-[14px] md:text-[11px] sm:text-[10px] text-[13px] pl-3"><strong
                        class="lg:text-[15px] md:text-[14px] sm:text-[12px] text-[14px]"><?php echo $_smarty_tpl->tpl_vars['NbRefused']->value;?>
</strong> refus</p>
            </div>
        </div>
    </div>
    <div
        class="flex flex-col sm:flex-row sm:flex-wrap sm:justify-between lg:mr-[7%] lg:ml-[10%] mt-5 md:ml-[10%] md:mr-[5%] sm:mx-[3%] lg:mt-0">
        <div class=" w-[90%] sm:w-[40%] h-60 bg-gray-300 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%]">
        <div class="h-12 bg-white border border-[#dfdfdf] flex items-center justify-center ">
        <h3 class="text-center">Dernières offres</h3>
    </div>
    <div class="overflow-y-scroll bg-white min-[880px]:max-h-[100%] h-80 border border-[#dfdfdf]">
        <ul class="list-disc ">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DerniereOffre']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
        <a href="/../index.php/offre/index?id=<?php echo $_smarty_tpl->tpl_vars['data']->value->id_offre;?>
" class="block odd:bg-gray-100 py-2 px-2"><li class="flex justify-between "><?php echo $_smarty_tpl->tpl_vars['data']->value->nom_offre;?>
 <div class="px-5"><?php echo $_smarty_tpl->tpl_vars['data']->value->nom_entreprise;?>
</div></li></a> <!-- dollar est une variable/  nom_offre =attribut attribut lié a l'objet
         -->
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
        </div>
        <div class=" w-[90%] sm:w-[50%] h-60 bg-gray-300 mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] max-[639px]:mt-40">
        <div class="h-12 bg-white border border-[#dfdfdf] flex items-center justify-center ">
            <h3 class="text-center">Candidatures en attente</h3>
            </div>
            <div class="overflow-y-scroll bg-white min-[880px]:max-h-[100%] h-80 border border-[#dfdfdf]">
                <ul class="list-disc ">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AllOffer']->value, 'Offer');
$_smarty_tpl->tpl_vars['Offer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Offer']->value) {
$_smarty_tpl->tpl_vars['Offer']->do_else = false;
?>
                    <li class="flex justify-between items-center px-3 border"><?php echo $_smarty_tpl->tpl_vars['Offer']->value->nom_offre;?>
<div class="rounded-full  px-5 my-1"> <div
                    class="rounded-br-md border-gray-300 w-full bg-[#fafafa] flex flex-col justify-center text-center content-center">
                    <select id="statut-<?php echo $_smarty_tpl->tpl_vars['Offer']->value->id_offre;?>
" class="rounded-full bg-orange-400 text-center w-full " onchange="staut(this.id)">
                        <option class="bg-white" value="En attente">En attente</option>
                        <option class="bg-white" value="Refusé">Refusé</option>
                        <option class="bg-white" value="Validé">Validé</option>
                    </select>
                </div> </div></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                    </ul>
            </div>
        </div>
        </div>
    </div>
    <!-----------------------------------------------graphe----------------------------------------->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"><?php echo '</script'; ?>
>
    <!---------------------------------------------------------------------------------------------->
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html>

<?php echo '<script'; ?>
>

    const graph = document.getElementById("graph").getContext("2d");

    let massPopChart = new Chart(graph, {
        type: "doughnut", // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            datasets: [
                {
                    label: "Population en M ",
                    data: [<?php echo $_smarty_tpl->tpl_vars['NbRefused']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['NbWaiting']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['NbOffre']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['NbRefused']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['NbWaiting']->value;?>
],
                    // backgroundColor: "blue",
                    backgroundColor: [
                        "red",
                        "orange",
                        "green"
                    ],
                    hoverBorderWidth: 3,
                },
            ],
        },
    });

    var statut = document.getElementById('statut')
    switch (statut.value) {
        case 'Recherche':
            statut.classList.add('bg-red-400');
            break;
        case 'En attente':
            statut.classList.add('bg-orange-400');
            break;
        case 'Validé':
            statut.classList.add('bg-green-400');
            break;
    };


    function staut(id) {
        var stat = document.getElementById(id);
        var bg = document.getElementById('statut');
        var id_offre=id.substring(7);
        console.log(id_offre);
        switch (stat.value) {
            case 'Refusé':
                if (stat.classList.contains("bg-orange-400") || stat.classList.contains("bg-green-400")) {
                    stat.classList.remove("bg-orange-400");
                    stat.classList.remove("bg-green-400");
                }
                stat.classList.add("bg-red-400");
                var id_statut=4;
                break;
            case 'En attente':
                if (stat.classList.contains("bg-red-400") || stat.classList.contains("bg-green-400")) {
                    stat.classList.remove("bg-red-400");
                    stat.classList.remove("bg-green-400");
                }
                stat.classList.add("bg-orange-400");
                var id_statut=1;
                break;
            case 'En Recherche':
            if (stat.classList.contains("bg-orange-400") || stat.classList.contains("bg-green-400")) {
                    stat.classList.remove("bg-orange-400");
                    stat.classList.remove("bg-green-400");
                }
                stat.classList.add("bg-red-400");
                var id_statut=3;
                break;
            case 'Validé':
                if (stat.classList.contains("bg-orange-400") || stat.classList.contains("bg-red-400")) {
                    stat.classList.remove("bg-orange-400");
                    stat.classList.remove("bg-red-400");
                }
                stat.classList.add("bg-green-400");
                var id_statut=2;
                break;
        }
        window.location.href="/../index.php/AccueilEtudiant/changeStatut?id_offre="+id_offre+"&id_statut="+id_statut;
    }; 
<?php echo '</script'; ?>
><?php }
}
