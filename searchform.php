<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <div><br/>
        <input type="text" size="100" name="s" id="s" value="Write your search and hit Enter" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
        <input type="submit" id="searchsubmit" value="Search" class="btn" />
    </div>
</form>