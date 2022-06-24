<template>
    <div>
        <header>
            <span>MANGRUPA INTRANET &copy; 2021</span>
            <img src="/assets/image/logo-mantra.svg">
        </header>
        <div class="mantra-left">
            <section>
                <div class="content">
                    <img src="/assets/image/logo-mps.svg"/>
                    <label>MPS</label>
                    <em>Mangrupa Panel System</em>
                    <a href="https://m7.gmx.shoes/" target="_blank" >Live</a>
                    <a href="https://mps-staging.readykick.id/" target="_blank">Staging</a>
                    <a href="https://mps-dev.readykick.id/" target="_blank">Dev.</a>
                </div>
            </section>
            <section>
                <div class="content">
                    <img src="/assets/image/logo-web.svg"/>
                    <label>GMX</label>
                    <em>Geoff Max Official Website</em>
                    <a href="https://geoff-max.com/" target="_blank">Live</a>
                    <a href="https://gmx-staging.readykick.id/" target="_blank">Staging</a>
                    <a href="https://gmx-dev.readykick.id/" target="_blank">Dev.</a>
                </div>
            </section>
            <section>
                <div class="content">
                    <img src="/assets/image/logo-web.svg"/>
                    <label>ATH</label>
                    <em>Athlectica Official Website</em>
                    <a href="https://athletica.id/" target="_blank">Live</a>
                    <a href="https://ath-staging.readykick.id/" target="_blank">Staging</a>
                    <a href="https://ath-dev.readykick.id/" target="_blank">Dev.</a>
                </div>
            </section>
        </div>
        
        <div class="mantra-right">
            <section>
                <a href="https://redmine.gmxdev.com/" class="item" target="_blank">
                    <div>
                        <img src="/assets/image/logo-redmine.svg">
                        <label>REDMINE</label>
                        <span>Mangrupa Project Management</span>
                    </div>
                </a>
            </section>
            <section>
                <a href="https://madep.gmxdev.com/" class="item" target="_blank">
                    <div>
                        <img src="/assets/image/logo-madep.svg">
                        <label>MADEP</label>
                        <span>Mangrupa Deployer</span>
                    </div>
                </a>
            </section>
            <section>
                <a href="https://mardoc.gmxdev.com/" class="item" target="_blank">
                    <div>
                        <img src="/assets/image/logo-mardoc.svg">
                        <label>MARDOC</label>
                        <span>Mangrupa Document</span>
                    </div>
                </a>
            </section>
            <section>
                <a href="https://forms.gle/68n7kexLGYXaWUqf6" class="item" target="_blank">
                    <div>
                        <img src="/assets/image/logo-majid.svg">
                        <label>MAZID</label>
                        <span>Mangrupa Izin Dulu</span>
                    </div>
                </a>
            </section>
            <section>
                <a href="https://marq.gmxdev.com/" class="item" target="_blank">
                    <div>
                        <img src="/assets/image/logo-marq.svg">
                        <label>MARQ</label>
                        <span>Mangrupa Request</span>
                    </div>
                </a>
            </section>
            <section>
                <a href="http://app.gumasev.net/" class="item" target="_blank">
                    <div>
                        <img src="/assets/image/logo-gumasev.svg">
                        <label>GUMASEV</label>
                        <span>General Unit of Mangrupa Server</span>
                    </div>
                </a>
            </section>
            <section>
                <div class="news-info">
                    <div class="title">Informations Board</div>
                    <ul>
                        <li>
                            <label>Coming Soon</label>
                        </li>
                        <!-- <li>
                            <label>Libur Tanggal 14 Desember 2021 Diganti</label>
                            <em>10 Desember 2021</em>
                            <p>
                                Untuk Libur Tanggal 14 Desember 2021 di geser ke hari Juma'at 16 Desember 2021 berdasarkan kesepakatan bersama
                            </p>
                        </li>
                        <li>
                            <label>Libur Tanggal 14 Desember 2021 Diganti</label>
                            <em>10 Desember 2021</em>
                            <p>
                                Untuk Libur Tanggal 14 Desember 2021 di geser ke hari Juma'at 16 Desember 2021 berdasarkan kesepakatan bersama
                            </p>
                        </li>
                        <li>
                            <label>Libur Tanggal 14 Desember 2021 Diganti</label>
                            <em>10 Desember 2021</em>
                            <p>
                                Untuk Libur Tanggal 14 Desember 2021 di geser ke hari Juma'at 16 Desember 2021 berdasarkan kesepakatan bersama
                            </p>
                        </li>
                        <li>
                            <label>Libur Tanggal 14 Desember 2021 Diganti</label>
                            <em>10 Desember 2021</em>
                            <p>
                                Untuk Libur Tanggal 14 Desember 2021 di geser ke hari Juma'at 16 Desember 2021 berdasarkan kesepakatan bersama
                            </p>
                        </li> -->
                    </ul>
                </div>
            </section>
            <section>
                <div class="news-info">
                    <div class="title">Leave Today</div>
                    <ul>
                        <li>
                            <label>Coming Soon</label>
                        </li>
                        <!-- <li>
                            <label>Arif Budioyes</label>
                            <em>Halfday Morning</em>
                        </li>
                        <li>
                            <label>Fardilah Ambyah Mudzakir</label>
                            <em>Halfday Afternoon</em>
                        </li>
                        <li>
                            <label>Dicki Wahyudi</label>
                            <em>Sick</em>
                        </li> -->
                    </ul>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            menu: null
        }
    },
    created() {
        this.getMenu()
    },
    methods: {
        getMenu() {
            let uri = '/api/menu'
            this.axios.get(uri).then((response) => {
                console.log(response.data)
            })
            
        }
    }
}
</script>