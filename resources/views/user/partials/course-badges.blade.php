@if ($item->kategoripelatihan->kategori === "workshop")
    <span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Webinar</span>
@elseif ($item->kategoripelatihan->kategori === "seminar")
    <span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Seminar</span>
@else
    <span class="bg-[#F5F500] px-[12px] py-[4px] rounded-[20px]">Webinar</span>
@endif
