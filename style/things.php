<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<div id="puzzell">

<script type="text/javascript">

function quiz(){
  jQuery.ajax({
    'url': '<?php echo base_url();?>index.php/Group/ekesh',
    'success': function(data){
      jQuery('#puzzell').html(data);
    }
  })
  
}

</script>


  <button onclick="javascript:quiz();">Start</button>

  </div>