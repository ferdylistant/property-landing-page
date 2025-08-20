<section id="properties" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 flex items-center justify-center gap-2">
            <x-heroicon-o-building-office-2 class="w-7 h-7 text-emerald-600" /> Properti Unggulan
        </h2>

        <!-- Menambahkan grid responsif yang lebih dinamis -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Properti 1 -->
            <x-property-card title="Villa Puncak Indah" price="Rp 2.000.000/malam"
                image="https://images.unsplash.com/photo-1568605114967-8130f3a36994" slug="villa-puncak-indah"
                location="Puncak" type="Villa" />

            <!-- Properti 2 -->
            <x-property-card title="Tanah Strategis Jogja" price="Rp 850.000.000"
                image="https://images.unsplash.com/photo-1505691938895-1758d7feb511" slug="tanah-strategis-jogja"
                location="Yogyakarta" type="Tanah" />

            <!-- Properti 3 -->
            <x-property-card title="Villa Bali View" price="Rp 3.500.000/malam"
                image="https://images.unsplash.com/photo-1580587771525-78b9dba3b914" slug="villa-bali-view"
                location="Bali" type="Villa" />
        </div>
    </div>
</section>
