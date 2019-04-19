<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form id="contactform" name="contact" method="post" action="#">
                        <p class="note"><span class="req">*</span> Nhập số liệu</p>
                        <div class="row">
                            <label for="name">Your Name <span class="req">*</span></label>
                            <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder="Steve Jobs" required>
                        </div>

                        <div class="row">
                            <label for="email">E-mail Address <span class="req">*</span></label>
                            <input type="email" name="email" id="email" class="txt" tabindex="2" placeholder="address@domain.com" required>
                        </div>

                        <div class="row">
                            <label for="subject">Subject <span class="req">*</span></label>
                            <input type="text" name="subject" id="subject" class="txt" tabindex="3" placeholder="Advertising/Press Ideas" required>
                        </div>

                        <div class="center">
                            <button type="button" class="btn">Kết quả</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
