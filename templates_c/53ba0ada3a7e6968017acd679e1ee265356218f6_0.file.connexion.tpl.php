<?php
/* Smarty version 4.3.0, created on 2023-03-29 09:08:01
  from 'C:\Users\daval\Documents\CESI\Projet\WebDev-mvc\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6423e3d18abcd0_19138982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53ba0ada3a7e6968017acd679e1ee265356218f6' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\CESI\\Projet\\WebDev-mvc\\templates\\connexion.tpl',
      1 => 1680073605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_6423e3d18abcd0_19138982 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="fr">
<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body class="text-center">
    <section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-20 h-20 mr-2" src="/../img/Logo.png" alt="logo">
          InternTracker    
      </a>
      <?php if ($_smarty_tpl->tpl_vars['errorMessage']->value) {?>
        <div class="bg-red-200 w-full p-2 rounded-md mb-4">
          <p class="text-red-700"><i class="fas fa-exclamation-circle"></i> <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
</p>
        </div>
        <?php }?>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Sign in to your account
              </h1>
              <form class="space-y-4 md:space-y-6" method="post" action="/../index.php/connexion">
                  <div>
                      <label for="login" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your login</label>
                      <input type="text" name="login" id="login" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="login" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      
                      <button type="submit" class="w-full text-black bg-gray-50 border bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section>
</body><?php }
}
