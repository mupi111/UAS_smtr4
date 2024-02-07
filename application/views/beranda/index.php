<div class="row dashboard">
    <h5>Dashboard</h5>
    <div class="col s12 dashboard-main">
        <div class="col s3">
            <div class="card horizontal blue lighten-3">
                <div class="card-image">
                    <i class="large material-icons" style="margin: 20px 0 0 20px;">credit_card</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p style="font-size: 30px;">
                        <?php foreach( $income as $total): ?>
                            <?php if($total['total']==""){ 
                  		echo "9";
                  	}else{ 
                  		echo $total['total'];
                  	} ?>
                            <?php endforeach; ?>
                        </p>
                        <h6>Customer</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card horizontal blue lighten-3">
                <div class="card-image">
                    <i class="large material-icons" style="margin: 20px 0 0 20px;">person</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p style="font-size: 30px;">
                        <?php foreach( $income as $total): ?>
                            <?php if($total['total']==""){ 
                  		 echo "13";
                  	}else{ 
                  		echo $total['total'];
                  	} ?>
                            <?php endforeach; ?>
                        </p>
                        <h6>Pendaftar</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card horizontal blue lighten-3">
                <div class="card-image">
                    <i class="large material-icons" style="margin: 20px 0 0 20px;">assignment</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p style="font-size: 30px;">
                            <?php foreach( $income as $total): ?>
                            <?php if($total['total']==""){ 
                  		 echo "6";
                  	}else{ 
                  		echo $total['total'];
                  	} ?>
                            <?php endforeach; ?>
                        </p>
                        <h6>Informasi</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>