<?php 



$msgs_sucesso = [
    "cadastrook" => "Cadastro realizado com sucesso!",
    "loginook" => "Login Realizado com sucesso!",
    "tarefaok" => "Tarefa cadastrada com sucesso!",
    "exlcuirok" => "Tarefa removida com sucesso!",
    "modificarok" => "tarefa modificado com sucesso!",
    "modificausu" => "usuario modificado com sucesso!",
    "sairok" => "Você foi desconectado."
];

$msgs_falha = [
  "cadastrofalha" => "Falha ao se cadastrar, verifique as informações digitadas.",
  "tarefafalha" => "Falha ao cadastrar a tarefa, verifique as informações digitadas.",
  "excluirtarefafalha" => "Falha ao excluir tarefa.",
  "excluirfalha" => "Falha ao excluir produto.",
  "modificarfalha" => "Falha ao modificar o a tarefa.",
  "modificausufalha" => "usuario modificado com sucesso!",
  "loginfalha" => "Usuario e/ou senha incorretos."
];

?>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  // Verificar se "erro" está no GET:
  <?php if(isset($_GET['erro'])) { ?>
  Swal.fire({
    title: "Erro!",
    text: "<?=$msgs_falha[$_GET['erro']]; ?>",
    icon: "error",
    showClass: {
                popup: `
                    animate__animated
                    animate__fadeIn
                    animate__pulse
                    `
            },
            hideClass: {
                popup: `
                    animate__animated
                    animate__fadeOut
                    `
            }
  });
  <?php } ?>
  
  <?php if(isset($_GET['sucesso'])) { ?>
    Swal.fire({
        title: "Sucesso",
        text: "<?=$msgs_sucesso[$_GET['sucesso']];?>",
        icon: "success",
        showClass: {
                popup: `
                    animate__animated
                    animate__fadeIn
                    animate__pulse
                    `
            },
            hideClass: {
                popup: `
                    animate__animated
                    animate__fadeOut
                    `
            }
    });
    <?php } ?>
  // Remover parametros da URL:
  window.history.replaceState(null, '', window.location.pathname);

</script>