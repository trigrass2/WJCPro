<?php /* Smarty version 2.6.10, created on 2014-11-14 10:53:33
         compiled from Shengchan/Cangku/CopyEdit.tpl */ ?>
<?php echo '
<script language="javascript">
$(function(){
	/**
	 * 复制按钮
	*/
	$(\'[id="btnCopy"]\',\'#table_main\').click(function(){
		var tr = $(this).parents(\'.trRow\');
		var nt = tr.clone(true);
	    
	    //有些数据需要制空
	    $(\'[name="cnt[]"]\',nt).val(\'\');
	    $(\'[name="cntJian[]"]\',nt).val(\'\');
	    $(\'[name="cntM[]"]\',nt).val(\'\');
	    $(\'[name="money[]"]\',nt).val(\'\');
	    $(\'[name="ganghao[]"]\',nt).val(\'\');
	    $(\'[name="pihao[]"]\',nt).val(\'\');
	    $(\'[name="memoView[]"]\',nt).val(\'\');
	    $(\'[name="id[]"]\',nt).val(\'\');
	    //拼接
	    tr.after(nt);
	});
});
</script>
'; ?>