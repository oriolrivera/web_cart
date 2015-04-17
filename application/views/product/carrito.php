<article class="contenido">
    <?php echo anchor('product/listaproductos','Volver al listado');?>
    <hr>
    <form action="<?php echo base_url();?>product/actualizar_carrito" method="post">
        <table class="carrito">
            <tr>
                <th>Nombre del producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            <?php
            foreach ($this->cart->contents() as $item):
                ?>
                <input type="hidden" name="rowid[]" value="<?php echo $item['rowid']; ?>">
                <tr>
                    <td>
                        <?php
                        echo $item['name'];
                        if ($this->cart->has_options($item['rowid']) === TRUE):
                            ?>
                            <p>
                                <?php
                                foreach ($this->cart->product_options($item['rowid']) as $option_name => $option_value):
                                    ?>
                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
                                <?php endforeach; ?>
                            </p>
                        <?php endif; ?>
                    </td>
                    <td>Bs.F. <?php echo number_format($item['price'],2,',','.'); ?></td>
                    <td>
                        <input type="text" name="qty[]" value="<?php echo $item['qty']; ?>" maxlength="3" size="5">
                    </td>
                    <td>Bs.F. <?php echo number_format($item['subtotal'],2,',','.'); ?></td>
                </tr>
                <?php
            endforeach;
            ?>
            <tr>
                <td colspan="2">
                    <input type="submit" name="actualizar" value="Actualizar Carrito">
                    <?php echo anchor('product/vaciar_carrito', 'Vaciar Carrito'); ?>
                </td>
                <td>Total:</td>
                <td>Bs.F. <?php echo number_format($this->cart->total(),2,',','.'); ?></td>
            </tr>
        </table>
    </form>
</article>