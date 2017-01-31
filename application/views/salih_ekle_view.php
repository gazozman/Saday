</br>
<div class="container">
        <div class="row">
        <?php echo form_open('salih/veriEkle'); ?>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">library_books</i>
                    <input type="text" class="validate" name="dersin_adi">
                    <label for="icon_prefix">Dersin Adı</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">av_timer</i>
                    <input type="tel" class="validate" name="dersin_saati">
                    <label for="icon_telephone">Dersin Saati</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">person_pin</i>
                    <input type="tel" class="validate" name="dersin_hocasi">
                    <label for="icon_telephone">Dersin Hocası</label>
                </div>
                 <div class="input-field col s12">
                    <i class="material-icons prefix">present_to_all</i>
                    <input type="text" class="validate" name="dersin_resmi">
                    <label for="icon_prefix">Resim</label>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="buton_ismi" value="Sent">Gönder
                    <i class="material-icons right">send</i>
                </button>
            </div>
            </form>
        </div>
</div>