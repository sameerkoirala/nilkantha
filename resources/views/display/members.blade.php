@include('display.header')

@include('display.navbar')

@include("display." . strtolower($type))

@include('display.footer')
