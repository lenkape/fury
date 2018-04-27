<?php include 'header.php'; ?>

		<article>
			<header class="post-header">
				<div class="container">
					<h1 class="post-title">Vyberte si z naších kníh</h1>
				</div>
			</header>
			<div class="post-content">

          <div class="container">
            <div class="row text-center header ">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>KONTATKTT NA NÁS</h3>
                  <hr />
              </div>
            </div>                   
       		<form action="" method="get" class="group">
				
				<div class="pull-left">
					<label>
						Meno: <input type="text" name="meno" required>
					</label>
					
					<label>
						Email: <input type="email" name="email" required>
					</label>
					
					<label>
						Vybraná Kniha: <input type="kniha" name="kniha">
					</label>
				</div>

				<div class="pull-left">
					<label>
						Sprivodný text: <textarea name="sprava"></textarea>
					</label>					
				</div>
				<button type="submit">
					Pošli
				</button>

			</form>        
		</article>

<?php include 'footer.php'; ?>