<div class="visible-print text-center">
    {!! QrCode::size(200)->generate(Request::url()); !!}
    <p>Scan me to buy.</p>
</div>