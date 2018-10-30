 <hr class="line-head">
 <div class="box-titu">
 	<div class="container">
 		<h1> <a href="#">Carritos de compras</a><span>|</span> Detalles de pedido</h1>
 	</div>
 </div>
 <div class="container">
 	<form class="logg">
 		<div class="row"">
 			<div class="col-md-6">
 				<p class="l-cod2">INFORMACIÓN DE PERSONAL</p>
 				<div class="row">
 					<div class="col-sm-6">
 						<label><span>*</span> Nombre</label>
 						<input type="email" class="f" id="inputEmail3" placeholder="Email">
 					</div>
 					<div class="col-sm-6">
 						<label><span>*</span> Apellidos</label>
 						<input type="email" class="f" id="inputEmail3" placeholder="Email">
 					</div>
 				</div>
 				<p class="l-cod2">DIRECCIÓN DE PERSONAL</p>
 				<label><span>*</span> Dirección Principal</label>
 				<input type="password" class="" id="inputPassword3" placeholder="Password">

 				<label><span>*</span> Dirección Secundarial</label>
 				<input type="password" class="" id="inputPassword3" placeholder="Password">
 				<div class="row">
 					<div class="col-sm-6">
 						<label><span>*</span>  País</label>
 						<select><option></option></select>
 					</div>
 					<div class="col-sm-6">
 						<label><span>*</span> Apellidos</label>
 						<select><option></option></select>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-sm-6">
 						<label><span>*</span>  Ciudad</label>
 						<select><option></option></select>
 					</div>
 					<div class="col-sm-6">
 						<label><span>*</span> Teléfono</label>
 						<input type="password" class="" id="inputPassword3" placeholder="Password">
 					</div>
 				</div>
 			</div>
 			<div class="col-md-6">
 				<p class="l-cod2">OPCIONES DE ENVÍO</p>
 				<label>Por favor selecciones un metodo de envio para este pedido</label>
 				<div class="checkbox">
 					<label>
 						<input type="checkbox"> <img src="assets/img/icon/Servientrega_1998.png" class="chec-img">
 					</label>
 				</div>
 				<p class="l-cod2">CARRITO DE COMPRAS </p>
 				<label>Detalles de los productos a comprar</label>

 				<table role="table" class="table-deta">
 					<thead role="rowgroup">
 						<tr role="row">
 							<th role="columnheader">Producto</th>
 							<th role="columnheader">Cantidad</th>
 							<th role="columnheader">Precio Unitario</th>
 							<th role="columnheader">Desc.</th>
 							<th role="columnheader">Total</th>
 						</tr>
 					</thead>
 					<tbody role="rowgroup">
 						<tr role="row">
 							<td role="cell" class="con">EJERCITADOR FLEXBAR BLUE <span>Color: BEIGE  Talla: S</span></td>
 							<td role="cell" class="con">1</td>
 							<td role="cell" class="con">$97.800</td>
 							<td role="cell" class="con">$19.560</td>
 							<td role="cell" class="con">$78.240</td>
 						</tr>
 					</tbody>
 					<tfoot>
 						<tr>
 							<th colspan="4" class="simpl">Subtotal Antes de IVA:</th>
 							<td role="cell" class="sin">$ 82.185</td>
 						</tr>
 						<tr>
 							<th colspan="4" class="simpl">IVA:</th>
 							<td class="sin">$ 82.185</td>
 						</tr>
 						<tr>
 							<th colspan="4" class="simpl">Descuento:</th>
 							<td class="sin">$ 82.185</td>
 						</tr>
 						<tr>
 							<th colspan="4" class="simpl">Total:</th>
 							<td class="sin">$ 82.185</td>
 						</tr>
 					</tfoot>
 				</table>
 				<p class="l-cod2">PLATAFORMA DE PAGO </p>
 				<label>Por favor selecciones una plataforma de pago.</label>
 				<div class="checkbox">
 					<label>
 						<input type="checkbox"> <img src="assets/img/icon/tu-compra.png" class="chec-img">
 					</label>
 				</div>
 				<label>Agrega comentarios a tu orden</label>
 				<textarea rows="4"></textarea>
 				<div class="checkbox" style="text-align:right; margin:0;">
 					<label>
 					<input type="checkbox"><a href="#">Acepto Terminos y Condiciones</a>
 					</label>
 				</div>
 				<button class="btn b-deta" data-toggle="modal" data-target="#exampleModalCenter">REALIZAR PAGO</button>
 			</div>
 		</div>
 	</form>
 </div>


 <!-- Modal -->
 <div class="modal" tabindex="-1" role="dialog" id="exampleModalCenter">
 	<div class="modal-dialog" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title">Modal title</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				<p>Modal body text goes here.</p>
 			</div>
 			<div class="modal-footer">
 				<button type="button" class="btn btn-primary">Save changes</button>
 				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 			</div>
 		</div>
 	</div>
 </div>