<?php
/* Smarty version 4.3.0, created on 2023-03-22 16:11:21
  from '/home/lilian/Documents/webdev/WebDev-mvc/templates/profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641b1a99787d51_19458384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d04ce0423edfff48e1fd1b15da2e7dcc49075cd' => 
    array (
      0 => '/home/lilian/Documents/webdev/WebDev-mvc/templates/profil.tpl',
      1 => 1679497880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_641b1a99787d51_19458384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="bg-[#f5f5f5] h-screen">
<div>
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<!-- div globale-->
<div class="flex justify-center min-[880px]:h-screen">
<div class="bg-white flex flex-col max-[880px]:flex-col max-[880px]:items-center max-[880px]:justify-start rounded-[12px] border border-[#dadada] mt-10 min-[880px]:h-5/6 w-11/12 ">
<!-- div image et cv-->
    <div class="flex justify-between w-full mt-5">
        <!-- contact -->
        <div class="border rounded border-black h-fit ml-3">
        <p>
        NOM
        </p>
        <p>
        Prénom
        </p>
        <p>
        prénom.nom@viacesi.fr
        </p>
        </div>
        <!-- CV -->
        <div class="mr-3">
            <h3>CV:</h3>
        </div>
    </div>
    <!-- wishList-->
    <div class="my-5 mx-5 border border-black h-full">
        <div class="border-b border-black text-center text-2xl h-12">
        <h1>
            FAVORIS
        </h1>
        </div>
        <div>
            <ul>
                <li>offre 1 </li>
            </ul>
        </div>
    

    </div>
</div>
</body>
</html><?php }
}
