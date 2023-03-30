<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tag HTML</title>
</head>
<body>
    <b>konten tag HTML dibawah ini dibungkus dengan menggunakan tag <"table">...<"/table">.</b>
    <p>Beberapa tag yang digunakan dalam tabel antara lain:
        <ul>
            <li><"tr">, tag yang digunakan untuk menampilkan row atau baris dalam tabel</li>
            <li><"th">, tag yang digunakan untuk judul kolom atau baris pada tabel</li>
            <li><"td">, tag yang digunakan untuk menampilkan data pada tabel</li>
        </ul>
    </p>
    <table border="1">
        <tr>
            <th>Nama Tag</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>Heading, Ada 6 tingkatan heading: 
                <br><"h1">, <"h2">, <"h3">, <"h4">, <"h5">, dan <"h6">.
            </td>
            <td>
                <h1>Heading 1</h1>
                <h2>Heading 2</h2>
                <h3>Heading 3</h3>
                <h4>Heading 4</h4>
                <h5>Heading 5</h5>
                <h6>Heading 6</h6>
            </td>
        </tr>
        <tr>
            <td>Paragraf
            <br>Tag paragraf dalam HTML kita tuliskan menggunakan sepasang tag <"p"> ... <"/p">.
            </td>
            <td><p>Hello World!!!</p></td>
        </tr>
        <tr>
            <td>Text Format
                <br>Ada beberapa kegunaan dalam formatting text, seperti:
                <p><"b"> - Bold text</p>
                <p><"strong"> - Important text</p>
                <p><"i"> - Italic text</p>
                <p><"em"> - Emphasized text</p>
                <p><"mark"> - Marked text</p>
                <p><"small"> - Smaller text</p>
                <p><"del"> - Deleted text</p>
                <p><"ins"> - Inserted text</p>
                <p><"sub"> - Subscript text</p>
            </td>
            <td>
                <p><b>Hello World!</b></p>
                <p><strong>Hello World!</strong></p>
                <p><i>Hello World!</i></p>
                <p><em>Hello World!</em></p>
                <p><mark>Hello World!</mark></p>
                <p><small>Hello World!</small></p>
                <p><del>Hello World!</del></p>
                <p><ins>Hello World!</ins></p>
                <p><sub>Hello World!</sub></p>
            </td>
        </tr>
        <tr>
            <td>Anchor (hyperlink)
            <br>Hyperlink pada HTML menggunakan tag <"a">.
            </td>
            <td>
                <a href="#">pindah halaman</a>
            </td>
        </tr>
        <tr>
            <td>List
            <br>Dalam HTML terdapat dua jenis list, yaitu:
            <p>Ordered List <"ol"> ... <"/ol">, digunakan untuk menampilkan list yang terurut seperti menggunakan nomor maupun abjad</p>
            <p>UnOrdered List <'ul'> ... <"/ul">, digunakan untuk menampilkan list berupa simbol</p>
            </td>
            <td>
                <p>ini adalah ordered list</p>
                <ol>
                    <li>order 1</li>
                    <li>order 2</li>
                    <li>order 3</li>
                </ol>
                <p>ini adalah unordered list</p>
                <ul>
                    <li>unorder 1</li>
                    <li>unorder 2</li>
                    <li>unorder 3</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Image
            <br>Untuk menampilkan file gambar dalam HTML, kita menggunakan tag <"img">.
            </td>
            <td><img src="computer.png" width="200"></td>
        </tr>
        <tr>
            <td>Div
            <br>Dalam sebuah halaman web, terdapat section atau bagian-bagian tempat kita meletakkan konten website kita dengan menggunakan tag <"div">.
            </td>
            <td>
                <div>
                    <h4>ini adalah header</h4>
                </div>
                <div>
                    <h4>ini adalah content</h4>
                </div>
                <div>
                    <h4>ini adalah footer</h4>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>