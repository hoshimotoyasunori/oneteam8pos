@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')

  <div class="profile-wrap">
    <div class="row">
      <div class="col-md-4 text-center">
        @if ($user->image)
          <p>
            <img class="round-img" src="data:image/png;base64,{{ $user->image }}"/>
          </p>
          @else
            <img class="round-img" src="{{ asset('/images/blank_profile.png') }}"/>
        @endif
      </div>
      <div class="col-md-8">
        <div class="row">
          <h1>{{ $user->name }}</h1>
          @if ($user->id == Auth::user()->id)
  
            <a class="btn btn-outline-dark common-btn edit-profile-btn" href="/users/edit">プロフィールを編集</a>
            <a class="btn btn-outline-dark common-btn edit-profile-btn" rel="nofollow" data-method="POST" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
          @endif
        </div>
        <div class="row">
          <p>
            {{ $user->email }}
  
          </p>
        </div>
      </div>
    </div>
  </div>
</div>  



<h1>TEAM-TARGET</h1>
<main id="data" class="bb">
    <div class="box">
        <!-- 表の上の列-->
        <table>
            <!-- 表の上の左-->
            <tr>
                <td><textarea id="sub_1_1"></textarea></td>
                <td><textarea id="sub_1_2"></textarea></td>
                <td><textarea id="sub_1_3"></textarea></td>

            </tr>
            <tr>
                <td><textarea id="sub_1_4"></textarea></td>
                <td class="sub_target1"><textarea id="sub_1" class="sub_target1" placeholder="目標"></textarea>
                </td>
                <td><textarea id="sub_1_5"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_1_6"></textarea></td>
                <td><textarea id="sub_1_7"></textarea></td>
                <td><textarea id="sub_1_8"></textarea></td>
            </tr>
        </table>
        <table>
            <!-- 表の上の真ん中-->
            <tr>
                <td><textarea id="sub_2_1"></textarea></td>
                <td><textarea id="sub_2_2"></textarea></td>
                <td><textarea id="sub_2_3"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_2_4"></textarea></td>
                <td class="sub_target2"><textarea id="sub_2" class="sub_target2" placeholder="目標"></textarea>
                </td>
                <td><textarea id="sub_2_5"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_2_6"></textarea></td>
                <td><textarea id="sub_2_7"></textarea></td>
                <td><textarea id="sub_2_8"></textarea></td>
            </tr>
        </table>
        <table>
            <!-- 表の上の右-->
            <tr>
                <td><textarea id="sub_3_1"></textarea></td>
                <td><textarea id="sub_3_2"></textarea></td>
                <td><textarea id="sub_3_3"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_3_4"></textarea></td>
                <td class="sub_target3"><textarea id="sub_3" class="sub_target3" placeholder="目標"></textarea>
                <td><textarea id="sub_3_5"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_3_6"></textarea></td>
                <td><textarea id="sub_3_7"></textarea></td>
                <td><textarea id="sub_3_8"></textarea></td>
            </tr>
        </table>
    </div>
    <div class="box">
        <!-- 表の2番目の列-->
        <table>
            <!-- 表の2番目の左-->
            <tr>
                <td><textarea id="sub_4_1"></textarea></td>
                <td><textarea id="sub_4_2"></textarea></td>
                <td><textarea id="sub_4_3"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_4_4"></textarea></td>
                <td class="sub_target4"><textarea id="sub_4" class="sub_target4" style="border:none"
                        placeholder="目標"></textarea>
                </td>
                <td><textarea id="sub_4_5"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_4_6"></textarea></td>
                <td><textarea id="sub_4_7"></textarea></td>
                <td><textarea id="sub_4_8"></textarea></td>
            </tr>
        </table>
        <table>
            <!-- 表の2番目の真ん中-->
            <tr>
                <td class="sub_target1"><textarea id="sub_target1" class="sub_target1" placeholder="目標"></textarea>
                </td>
                <td class="sub_target2"><textarea id="sub_target2" class="sub_target2" placeholder="目標"></textarea>
                </td>
                <td class="sub_target3"><textarea id="sub_target3" class="sub_target3" placeholder="目標"></textarea>
                </td>
            </tr>
            <tr>
                <td class="sub_target4"><textarea id="sub_target4" class="sub_target4" placeholder="目標"></textarea>
                </td>
                <td class="main_target"><textarea id="main_target" class="main_target" placeholder="目的"
                        autofocus></textarea>
                </td>
                <td class="sub_target5"><textarea id="sub_target5" class="sub_target5" placeholder="目標"></textarea>
                </td>
            </tr>
            <tr>
                <td class="sub_target6"><textarea id="sub_target6" class="sub_target6" placeholder="目標"></textarea>
                </td>
                <td class="sub_target7"><textarea id="sub_target7" class="sub_target7" placeholder="目標"></textarea>
                </td>
                <td class="sub_target8"><textarea id="sub_target8" class="sub_target8" placeholder="目標"></textarea>
                </td>
            </tr>
        </table>
        <table>
            <!-- 表の2番目の右-->
            <tr>
                <td><textarea id="sub_5_1"></textarea></td>
                <td><textarea id="sub_5_2"></textarea></td>
                <td><textarea id="sub_5_3"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_5_4"></textarea></td>
                <td class="sub_target5"><textarea id="sub_5" class="sub_target5" placeholder="目標"></textarea>
                <td><textarea id="sub_5_5"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_5_6"></textarea></td>
                <td><textarea id="sub_5_7"></textarea></td>
                <td><textarea id="sub_5_8"></textarea></td>
        </table>
    </div>
    <div class="box">
        <!-- 表の3番目の列-->
        <table>
            <!-- 表の3番目の左-->
            <tr>
                <td><textarea id="sub_6_1"></textarea></td>
                <td><textarea id="sub_6_2"></textarea></td>
                <td><textarea id="sub_6_3"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_6_4"></textarea></td>
                <td class="sub_target6"><textarea id="sub_6" class="sub_target6" placeholder="目標"></textarea>
                <td><textarea id="sub_6_5"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_6_6"></textarea></td>
                <td><textarea id="sub_6_7"></textarea></td>
                <td><textarea id="sub_6_8"></textarea></td>
            </tr>
        </table>
        <table>
            <!-- 表の3番目の真ん中-->
            <tr>
                <td><textarea id="sub_7_1"></textarea></td>
                <td><textarea id="sub_7_2"></textarea></td>
                <td><textarea id="sub_7_3"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_7_4"></textarea></td>
                <td class="sub_target7"><textarea id="sub_7" class="sub_target7" placeholder="目標"></textarea>
                </td>
                <td><textarea id="sub_7_5"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_7_6"></textarea></td>
                <td><textarea id="sub_7_7"></textarea></td>
                <td><textarea id="sub_7_8"></textarea></td>
            </tr>
        </table>
        <table>
            <!-- 表の3番目の右-->
            <tr>
                <td><textarea id="sub_8_1"></textarea></td>
                <td><textarea id="sub_8_2"></textarea></td>
                <td><textarea id="sub_8_3"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_8_4"></textarea></td>
                <td class="sub_target8"><textarea id="sub_8" class="sub_target8" placeholder="目標"></textarea>
                </td>
                <td><textarea id="sub_8_5"></textarea></td>
            </tr>
            <tr>
                <td><textarea id="sub_8_6"></textarea></td>
                <td><textarea id="sub_8_7"></textarea></td>
                <td><textarea id="sub_8_8"></textarea></td>
            </tr>
        </table>
    </div>
</main>

<!-- <footer>
    <a href="./index.html">select target</a>
    <div>　　　　　　</div>
    <a href="./ox-game.html">ox-game</a>
</footer> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script> -->
<script>

    /////////////////////////////// main_target//////////////////////////////////
    $(function () {
        //1.Save クリックイベント
        $('textarea').keyup(function () {
            const data = {

                main: $('#main_target').val(),
                sub1: $('#sub_target1').val(),
                sub2: $('#sub_target2').val(),
                sub3: $('#sub_target3').val(),
                sub4: $('#sub_target4').val(),
                sub5: $('#sub_target5').val(),
                sub6: $('#sub_target6').val(),
                sub7: $('#sub_target7').val(),
                sub8: $('#sub_target8').val(),
                ////////////あってもなくても///////////////////////
                // sub_1: $('#sub_1').val(),
                // sub_2: $('#sub_2').val(),
                // sub_3: $('#sub_3').val(),
                // sub_4: $('#sub_4').val(),
                // sub_5: $('#sub_5').val(),
                // sub_6: $('#sub_6').val(),
                // sub_7: $('#sub_7').val(),
                // sub_8: $('#sub_8').val(),
                sub_1_1: $('#sub_1_1').val(),
                sub_1_2: $('#sub_1_2').val(),
                sub_1_3: $('#sub_1_3').val(),
                sub_1_4: $('#sub_1_4').val(),
                sub_1_5: $('#sub_1_5').val(),
                sub_1_6: $('#sub_1_6').val(),
                sub_1_7: $('#sub_1_7').val(),
                sub_1_8: $('#sub_1_8').val(),
                sub_2_1: $('#sub_2_1').val(),
                sub_2_2: $('#sub_2_2').val(),
                sub_2_3: $('#sub_2_3').val(),
                sub_2_4: $('#sub_2_4').val(),
                sub_2_5: $('#sub_2_5').val(),
                sub_2_6: $('#sub_2_6').val(),
                sub_2_7: $('#sub_2_7').val(),
                sub_2_8: $('#sub_2_8').val(),
                sub_3_1: $('#sub_3_1').val(),
                sub_3_2: $('#sub_3_2').val(),
                sub_3_3: $('#sub_3_3').val(),
                sub_3_4: $('#sub_3_4').val(),
                sub_3_5: $('#sub_3_5').val(),
                sub_3_6: $('#sub_3_6').val(),
                sub_3_7: $('#sub_3_7').val(),
                sub_3_8: $('#sub_3_8').val(),
                sub_4_1: $('#sub_4_1').val(),
                sub_4_2: $('#sub_4_2').val(),
                sub_4_3: $('#sub_4_3').val(),
                sub_4_4: $('#sub_4_4').val(),
                sub_4_5: $('#sub_4_5').val(),
                sub_4_6: $('#sub_4_6').val(),
                sub_4_7: $('#sub_4_7').val(),
                sub_4_8: $('#sub_4_8').val(),
                sub_5_1: $('#sub_5_1').val(),
                sub_5_2: $('#sub_5_2').val(),
                sub_5_3: $('#sub_5_3').val(),
                sub_5_4: $('#sub_5_4').val(),
                sub_5_5: $('#sub_5_5').val(),
                sub_5_6: $('#sub_5_6').val(),
                sub_5_7: $('#sub_5_7').val(),
                sub_5_8: $('#sub_5_8').val(),
                sub_6_1: $('#sub_6_1').val(),
                sub_6_2: $('#sub_6_2').val(),
                sub_6_3: $('#sub_6_3').val(),
                sub_6_4: $('#sub_6_4').val(),
                sub_6_5: $('#sub_6_5').val(),
                sub_6_6: $('#sub_6_6').val(),
                sub_6_7: $('#sub_6_7').val(),
                sub_6_8: $('#sub_6_8').val(),
                sub_7_1: $('#sub_7_1').val(),
                sub_7_2: $('#sub_7_2').val(),
                sub_7_3: $('#sub_7_3').val(),
                sub_7_4: $('#sub_7_4').val(),
                sub_7_5: $('#sub_7_5').val(),
                sub_7_6: $('#sub_7_6').val(),
                sub_7_7: $('#sub_7_7').val(),
                sub_7_8: $('#sub_7_8').val(),
                sub_8_1: $('#sub_8_1').val(),
                sub_8_2: $('#sub_8_2').val(),
                sub_8_3: $('#sub_8_3').val(),
                sub_8_4: $('#sub_8_4').val(),
                sub_8_5: $('#sub_8_5').val(),
                sub_8_6: $('#sub_8_6').val(),
                sub_8_7: $('#sub_8_7').val(),
                sub_8_8: $('#sub_8_8').val(),
            }
            console.log(data);
            const jasonData = JSON.stringify(data);
            console.log(jasonData);
            localStorage.setItem('memo', jasonData);
            // localStorage.setItem('memo', text);



            $('#sub_target1').keyup(function () {
                let data = document.getElementById("sub_target1").value;
                document.getElementById("sub_1").value = data;
            })
            $('#sub_target2').keyup(function () {
                let data = document.getElementById("sub_target2").value;
                document.getElementById("sub_2").value = data;
            })
            $('#sub_target3').keyup(function () {
                let data = document.getElementById("sub_target3").value;
                document.getElementById("sub_3").value = data;
            })
            $('#sub_target4').keyup(function () {
                let data = document.getElementById("sub_target4").value;
                document.getElementById("sub_4").value = data;
            })
            $('#sub_target5').keyup(function () {
                let data = document.getElementById("sub_target5").value;
                document.getElementById("sub_5").value = data;
            })
            $('#sub_target6').keyup(function () {
                let data = document.getElementById("sub_target6").value;
                document.getElementById("sub_6").value = data;
            })
            $('#sub_target7').keyup(function () {
                let data = document.getElementById("sub_target7").value;
                document.getElementById("sub_7").value = data;
            })
            $('#sub_target8').keyup(function () {
                let data = document.getElementById("sub_target8").value;
                document.getElementById("sub_8").value = data;
            })
        });

        // getValue();
        // const $formObject = document.getElementById("sub_target1");
        // for (const $i = 0; $i < $formObject.length; $i++) {
        //     $formObject.elements[$i].onkeyup = function () {
        //         getValue();
        //     };
        //     $formObject.elements[$i].onchange = function () {
        //         getValue();
        //     };
        // }
        // document.getElementById("sub_1").innerHTML = $formObject.length;

        // function getValue() {
        //     const $formObject = document.getElementById("sub_target1").value;
        //     console.log($formObject);
        //     document.getElementById("sub_1").value = $formObject;

        //2.clear クリックイベント
        $('#clear').on('click', function () {
            localStorage.removeItem('memo');

            $('#main_target').val('')
            $('#sub_target1').val('')
            $('#sub_target2').val('')
            $('#sub_target3').val('')
            $('#sub_target4').val('')
            $('#sub_target5').val('')
            $('#sub_target6').val('')
            $('#sub_target7').val('')
            $('#sub_target8').val('')
            ////////////あってもなくても///////////////////////
            // $('#sub_1').val('')
            // $('#sub_2').val('')
            // $('#sub_3').val('')
            // $('#sub_4').val('')
            // $('#sub_5').val('')
            // $('#sub_6').val('')
            // $('#sub_7').val('')
            // $('#sub_8').val('')
            $('#sub_1_1').val('')
            $('#sub_1_2').val('')
            $('#sub_1_3').val('')
            $('#sub_1_4').val('')
            $('#sub_1_5').val('')
            $('#sub_1_6').val('')
            $('#sub_1_7').val('')
            $('#sub_1_8').val('')
            $('#sub_1_1').val('')
            $('#sub_2_2').val('')
            $('#sub_2_3').val('')
            $('#sub_2_4').val('')
            $('#sub_2_5').val('')
            $('#sub_2_6').val('')
            $('#sub_2_7').val('')
            $('#sub_2_8').val('')
            $('#sub_3_1').val('')
            $('#sub_3_2').val('')
            $('#sub_3_3').val('')
            $('#sub_3_4').val('')
            $('#sub_3_5').val('')
            $('#sub_3_6').val('')
            $('#sub_3_7').val('')
            $('#sub_3_8').val('')
            $('#sub_4_1').val('')
            $('#sub_4_2').val('')
            $('#sub_4_3').val('')
            $('#sub_4_4').val('')
            $('#sub_4_5').val('')
            $('#sub_4_6').val('')
            $('#sub_4_7').val('')
            $('#sub_4_8').val('')
            $('#sub_5_1').val('')
            $('#sub_5_2').val('')
            $('#sub_5_3').val('')
            $('#sub_5_4').val('')
            $('#sub_5_5').val('')
            $('#sub_5_6').val('')
            $('#sub_5_7').val('')
            $('#sub_5_8').val('')
            $('#sub_6_1').val('')
            $('#sub_6_2').val('')
            $('#sub_6_3').val('')
            $('#sub_6_4').val('')
            $('#sub_6_5').val('')
            $('#sub_6_6').val('')
            $('#sub_6_7').val('')
            $('#sub_6_8').val('')
            $('#sub_7_1').val('')
            $('#sub_7_2').val('')
            $('#sub_7_3').val('')
            $('#sub_7_4').val('')
            $('#sub_7_5').val('')
            $('#sub_7_6').val('')
            $('#sub_7_7').val('')
            $('#sub_7_8').val('')
            $('#sub_8_1').val('')
            $('#sub_8_2').val('')
            $('#sub_8_3').val('')
            $('#sub_8_4').val('')
            $('#sub_8_5').val('')
            $('#sub_8_6').val('')
            $('#sub_8_7').val('')
            $('#sub_8_8').val('')
        });
        //3.ページ読み込み：保存データ取得表示
        if (localStorage.getItem('memo')) {
            const jasonData = localStorage.getItem('memo');
            console.log(jasonData);
            const data = JSON.parse(jasonData);
            console.log(data);

            $('#main_target').val(data.main);
            $('#sub_target1').val(data.sub1);
            $('#sub_target2').val(data.sub2);
            $('#sub_target3').val(data.sub3);
            $('#sub_target4').val(data.sub4);
            $('#sub_target5').val(data.sub5);
            $('#sub_target6').val(data.sub6);
            $('#sub_target7').val(data.sub7);
            $('#sub_target8').val(data.sub8);
            $('#sub_1').val(data.sub1);
            $('#sub_2').val(data.sub2);
            $('#sub_3').val(data.sub3);
            $('#sub_4').val(data.sub4);
            $('#sub_5').val(data.sub5);
            $('#sub_6').val(data.sub6);
            $('#sub_7').val(data.sub7);
            $('#sub_8').val(data.sub8);
            $('#sub_1_1').val(data.sub_1_1);
            $('#sub_1_2').val(data.sub_1_2);
            $('#sub_1_3').val(data.sub_1_3);
            $('#sub_1_4').val(data.sub_1_4);
            $('#sub_1_5').val(data.sub_1_5);
            $('#sub_1_6').val(data.sub_1_6);
            $('#sub_1_7').val(data.sub_1_7);
            $('#sub_1_8').val(data.sub_1_8);
            $('#sub_2_1').val(data.sub_2_1);
            $('#sub_2_2').val(data.sub_2_2);
            $('#sub_2_3').val(data.sub_2_3);
            $('#sub_2_4').val(data.sub_2_4);
            $('#sub_2_5').val(data.sub_2_5);
            $('#sub_2_6').val(data.sub_2_6);
            $('#sub_2_7').val(data.sub_2_7);
            $('#sub_2_8').val(data.sub_2_8);
            $('#sub_3_1').val(data.sub_3_1);
            $('#sub_3_2').val(data.sub_3_2);
            $('#sub_3_3').val(data.sub_3_3);
            $('#sub_3_4').val(data.sub_3_4);
            $('#sub_3_5').val(data.sub_3_5);
            $('#sub_3_6').val(data.sub_3_6);
            $('#sub_3_7').val(data.sub_3_7);
            $('#sub_3_8').val(data.sub_3_8);
            $('#sub_4_1').val(data.sub_4_1);
            $('#sub_4_2').val(data.sub_4_2);
            $('#sub_4_3').val(data.sub_4_3);
            $('#sub_4_4').val(data.sub_4_4);
            $('#sub_4_5').val(data.sub_4_5);
            $('#sub_4_6').val(data.sub_4_6);
            $('#sub_4_7').val(data.sub_4_7);
            $('#sub_4_8').val(data.sub_4_8);
            $('#sub_5_1').val(data.sub_5_1);
            $('#sub_5_2').val(data.sub_5_2);
            $('#sub_5_3').val(data.sub_5_3);
            $('#sub_5_4').val(data.sub_5_4);
            $('#sub_5_5').val(data.sub_5_5);
            $('#sub_5_6').val(data.sub_5_6);
            $('#sub_5_7').val(data.sub_5_7);
            $('#sub_5_8').val(data.sub_5_8);
            $('#sub_6_1').val(data.sub_6_1);
            $('#sub_6_2').val(data.sub_6_2);
            $('#sub_6_3').val(data.sub_6_3);
            $('#sub_6_4').val(data.sub_6_4);
            $('#sub_6_5').val(data.sub_6_5);
            $('#sub_6_6').val(data.sub_6_6);
            $('#sub_6_7').val(data.sub_6_7);
            $('#sub_6_8').val(data.sub_6_8);
            $('#sub_7_1').val(data.sub_7_1);
            $('#sub_7_2').val(data.sub_7_2);
            $('#sub_7_3').val(data.sub_7_3);
            $('#sub_7_4').val(data.sub_7_4);
            $('#sub_7_5').val(data.sub_7_5);
            $('#sub_7_6').val(data.sub_7_6);
            $('#sub_7_7').val(data.sub_7_7);
            $('#sub_7_8').val(data.sub_7_8);
            $('#sub_8_1').val(data.sub_8_1);
            $('#sub_8_2').val(data.sub_8_2);
            $('#sub_8_3').val(data.sub_8_3);
            $('#sub_8_4').val(data.sub_8_4);
            $('#sub_8_5').val(data.sub_8_5);
            $('#sub_8_6').val(data.sub_8_6);
            $('#sub_8_7').val(data.sub_8_7);
            $('#sub_8_8').val(data.sub_8_8);
        }
    });

</script>

@endsection