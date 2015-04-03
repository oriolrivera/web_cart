<article class="contenido">
    <? echo anchor('product/listaproductos','Volver al listado');?>
    <hr>
    <form action="<? echo base_url();?>product/actualizar_carrito" method="post">
        <table class="carrito">
            <tr>
                <th>Nombre del producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            <?
            foreach ($this->cart->contents() as $item):
                ?>
                <input type="hidden" name="rowid[]" value="<? echo $item['rowid']; ?>">
                <tr>
                    <td>
                        <?
                        echo $item['name'];
                        if ($this->cart->has_options($item['rowid']) === TRUE):
                            ?>
                            <p>
                                <?
                                foreach ($this->cart->product_options($item['rowid']) as $option_name => $option_value):
                                    ?>
                                    <strong><? echo $option_name; ?>:</strong> <? echo $option_value; ?><br />
                                <? endforeach; ?>
                            </p>
                        <? endif; ?>
                    </td>
                    <td>Bs.F. <? echo number_format($item['price'],2,',','.'); ?></td>
                    <td>
                        <input type="text" name="qty[]" value="<? echo $item['qty']; ?>" maxlength="3" size="5">
                    </td>
                    <td>Bs.F. <? echo number_format($item['subtotal'],2,',','.'); ?></td>
                </tr>
                <?
            endforeach;
            ?>
            <tr>
                <td colspan="2">
                    <input type="submit" name="actualizar" value="Actualizar Carrito">
                    <? echo anchor('product/vaciar_carrito', 'Vaciar Carrito'); ?>
                </td>
                <td>Total:</td>
                <td>Bs.F. <? echo number_format($this->cart->total(),2,',','.'); ?></td>
            </tr>
        </table>
    </form>
</article>