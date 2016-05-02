<a href="#"></a>

<script>
var fileName = 'my file(2).txt';
var header = "Content-Disposition: attachment; filename*=UTF-8''" 
             + encodeRFC5987ValueChars(fileName);

console.log(header); 
// логирует "Content-Disposition: attachment; filename*=UTF-8''my%20file%282%29.txt"


function encodeRFC5987ValueChars (str) {
    return encodeURIComponent(str).
        // Замечание: хотя RFC3986 резервирует "!", RFC5987 это не делает, так что нам не нужно избегать этого
        replace(/['()]/g, escape). // i.e., %27 %28 %29
        replace(/\*/g, '%2A').
            // Следующее не требуется для кодировки процентов для RFC5987, так что мы можем разрешить немного больше читаемости через провод: |`^
            replace(/%(?:7C|60|5E)/g, unescape);
} 

</script>
