<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
                 ?>
            </div><br><br>

            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>">
        
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">No. Telpon</label>
                    <input type="text" name="no_telp" placeholder="No Telpon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select name="" id="" class="form-control">
                        <option value="">GOJEK</option>
                        <option value="">GRAB</option>
                    </select>
                </div> 

                <div class="form-group">
                    <label for="">Pilih Metode Pembayaran</label>
                    <select name="" id="" class="form-control">
                        <option value="">DANA</option>
                        <option value="">OVO</option>
                        <option value="">GOPAY</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>

            <?php 
            }else
            {
                echo "<h4>keranjang Belanja Anda Masih Kosong";
            } ?>

        </div>
        
        <div class="col-md-2"></div>
    </div>
</div>