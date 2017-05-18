<div class="banner border-clear light-translucent-bg" style="background-image:url('<?php echo base_url(); ?>asset/images/page-about/page-about-banner-2.jpg');">
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a class="link-dark" href="<?php echo base_url(); ?>">Inicio</a></li>
                <?php
                if($this->uri->total_segments() > 1){
                for($i = 1; $i < $this->uri->total_segments() - 1; $i++){
                    echo "<li><a href='".base_url();
                    for ($j = 1; $j < $i; $j++){
                        echo "/".$this->uri->segment($j);
                    }
                    echo "/".$this->uri->segment($i)."'>".$this->uri->segment($i)."</a></li>";
                }
                }?>
                <li class="active"><?php echo $this->uri->segment($this->uri->total_segments())?></li>
            </ol>
        </div>
    </div>
    <?php if(isset($breadTitle)){?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 pv-20">
                <h2 class="title"><?php if(isset($breadTitleStrong))
                {
                    echo "<strong>".$breadTitleStrong."</strong>";
                }
                echo $breadTitle;?>
                </h2>
                <?php if(isset($breadDescription)) echo "<p>".$breadDescription."</p>";?>
            </div>
        </div>
    </div>
    <?php } ?>
</div>