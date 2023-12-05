<div class="container">
    
    <div class="row">
        <div class="col-md-8">
        <h2 class="mt-3">Visualização do pedido</h2>
            <div class="table-responsive-sm">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Itens</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>SubTotal</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php if($this->cart->total_items() > 0) { 
                    foreach($cartItems as $item) { ?>
                        <tr>
                            <td>
                                <?php $image = $item['image'];?>
                                <img class="" width="100"
                                    src="<?php echo base_url().'public/uploads/dishesh/thumb/'.$image; ?>">
                            </td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo 'R$'.$item['price']; ?></td>
                            <td><?php echo $item['qty']; ?></td>
                            <td><?php echo 'R$'.$item['subtotal']; ?></td>
                        </tr>
                        <?php } ?>
                        <?php } else { ?>
                        <tr>
                            <td colspan="5">
                                <p>Nenhum Item no seu Carrinho!!</p>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"></td>
                            <?php  if($this->cart->total_items() > 0) { ?>
                            <td class="text-left">Total: <b><?php echo 'R$'.$this->cart->total();?></b></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <form action="<?php echo base_url().'checkout/index';?>" method="POST"
                class="form-container  shadow-container" style="width:80%">
                <h3 class="mt-3">Detalhes de envio</h3><hr>
                <div class="form-group">
                    <label for="address">Endereço</label>
                    <textarea name="address" type="text" style="height:70px;"
                        class="form-control
                    <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"><?php echo set_value('address', $user['address']);?></textarea>
                    <?php echo form_error('address'); ?>
                </div>
                <p class="lead mb-0">Pagamento na entrega</p>
                <div class="container p-2 mb-3" style="background: #e5e5e5;">
                     Pague com dinheiro na entrega 
                </div>
                <div>
                    <a href="<?php echo base_url().'cart'; ?>" class="btn btn-warning"><i class="fas fa-angle-left"></i>
                        Voltar ao Carrinho</a>
                    <button type="submit" name="placeOrder" class="btn btn-success">Encomendar <i
                            class="fas fa-angle-right"></i></button>
                </div>
                </from>
        </div>
    </div>
</div>