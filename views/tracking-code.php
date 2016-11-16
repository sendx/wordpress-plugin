<!-- SendX Install Code -->
<script type="text/javascript">
 var _scq = _scq || [];
 var _scs = _scs || {};
 _scs.teamId = '<?php echo $account_id ?>';

 (function() {
   var dc = document.createElement('script');
   dc.type = 'text/javascript';
   dc.async = true;
   dc.src = '//cdn.sendx.io/prod/<?php echo $account_id ?>.js';
   var s = document.getElementsByTagName('script')[0];
   s.parentNode.insertBefore(dc, s);
 })();
</script>
