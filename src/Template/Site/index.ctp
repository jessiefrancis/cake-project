
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="user form large-9 medium-8 columns content">
<div id="post">
</div>

    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('Username');
            echo $this->Form->control('Password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('login'),['id'=>'loginBtn','type'=>'button']) ?>
    <?= $this->Form->end() ?>
</div> 
<script>
   
    var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
    console.log(csrfToken);
    $(function(){
        $("#loginBtn").click(function(){
            $.ajax({
                type:'POST',
                url:"<?= $this->Url->build(['controller'=>'Site','action'=>'login'])?>",
                headers: {
                'X-CSRF-Token': csrfToken
                },
                data:{
                    id:10
                },
                success:function(data){
                    $("#msg").html(data.msg);
                }
            })
        })
    })
</script>
