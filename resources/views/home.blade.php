@extends('layouts.app')

@section('content')
<div class="container">
    <div class='d-flex justify-content-between align-items-baseline border-bottom'>
        <h1 class=''>{{ $user->username }}'s Scorecards</h1>
        <p class='pr-5'><strong>{{ $user->scorecards->count() }}</strong> Scorecards</p>
        <a href='/scorecard/create' class='btn-sm btn-primary'>Add Scorecard</a>
    </div>
    <div>
        <p>{{ $user->profile->about }}</p>
    </div>
    
    <!-- scorecards -->
    <div class='pt-5'>
        @foreach($user->scorecards as $scorecard)
        <div class='d-flex'>
            <h5 class='w-100'>Course Name: <strong>{{ $scorecard->course }}</strong></h5>
            <h5 class=''>Date: <strong>{{ $scorecard->date }}</strong></h5>
        </div>
        <table class="table-bordered table-striped text-center scorecard">
            <tbody>
                <tr>
                    <th scope="row">Distance</th>
                    <td class='col'>{{ $scorecard->distance1 }}</td>
                    <td class='col'>{{ $scorecard->distance2 }}</td>
                    <td class='col'>{{ $scorecard->distance3 }}</td>
                    <td class='col'>{{ $scorecard->distance4 }}</td>
                    <td class='col'>{{ $scorecard->distance5 }}</td>
                    <td class='col'>{{ $scorecard->distance6 }}</td>
                    <td class='col'>{{ $scorecard->distance7 }}</td>
                    <td class='col'>{{ $scorecard->distance8 }}</td>
                    <td class='col'>{{ $scorecard->distance9 }}</td>
                    <td class='col bg-dark'></td>
                    <td class='col'>{{ $scorecard->distance10 }}</td>
                    <td class='col'>{{ $scorecard->distance11 }}</td>
                    <td class='col'>{{ $scorecard->distance12 }}</td>
                    <td class='col'>{{ $scorecard->distance13 }}</td>
                    <td class='col'>{{ $scorecard->distance14 }}</td>
                    <td class='col'>{{ $scorecard->distance15 }}</td>
                    <td class='col'>{{ $scorecard->distance16 }}</td>
                    <td class='col'>{{ $scorecard->distance17 }}</td>
                    <td class='col'>{{ $scorecard->distance18 }}</td>
                    <td class='col bg-dark'></td>
                    <td class='col bg-dark'></td>
                    <td class='col bg-dark'></td>
                </tr>
                <tr>
                    <th scope="row">Par</th>
                    <td class='col'>{{ $scorecard->par1 }}</td>
                    <td class='col'>{{ $scorecard->par2 }}</td>
                    <td class='col'>{{ $scorecard->par3 }}</td>
                    <td class='col'>{{ $scorecard->par4 }}</td>
                    <td class='col'>{{ $scorecard->par5 }}</td>
                    <td class='col'>{{ $scorecard->par6 }}</td>
                    <td class='col'>{{ $scorecard->par7 }}</td>
                    <td class='col'>{{ $scorecard->par8 }}</td>
                    <td class='col'>{{ $scorecard->par9 }}</td>
                    <td class='col bg-dark'></td>
                    <td class='col'>{{ $scorecard->par10 }}</td>
                    <td class='col'>{{ $scorecard->par11 }}</td>
                    <td class='col'>{{ $scorecard->par12 }}</td>
                    <td class='col'>{{ $scorecard->par13 }}</td>
                    <td class='col'>{{ $scorecard->par14 }}</td>
                    <td class='col'>{{ $scorecard->par15 }}</td>
                    <td class='col'>{{ $scorecard->par16 }}</td>
                    <td class='col'>{{ $scorecard->par17 }}</td>
                    <td class='col'>{{ $scorecard->par18 }}</td>
                    <td class='col bg-dark'></td>
                    <td class='col bg-dark'></td>
                    <td class='col bg-dark'></td>
                </tr>
                <tr>
                    <th scope="row">Name</th>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>Front</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>Back</td>
                    <td>Total</td>
                    <td>+/-</td>
                </tr>
                <tr>
                    <th scope="row">Player 1</th>
                    <td>{{ $scorecard->player1hole1 }}</td>
                    <td>{{ $scorecard->player1hole2 }}</td>
                    <td>{{ $scorecard->player1hole3 }}</td>
                    <td>{{ $scorecard->player1hole4 }}</td>
                    <td>{{ $scorecard->player1hole5 }}</td>
                    <td>{{ $scorecard->player1hole6 }}</td>
                    <td>{{ $scorecard->player1hole7 }}</td>
                    <td>{{ $scorecard->player1hole8 }}</td>
                    <td>{{ $scorecard->player1hole9 }}</td>
                    <td><strong>{{ $scorecard->player1hole1 + $scorecard->player1hole2 + $scorecard->player1hole3 + $scorecard->player1hole4 + $scorecard->player1hole5 + $scorecard->player1hole6 + $scorecard->player1hole7 + $scorecard->player1hole8 + $scorecard->player1hole9 }}</strong></td>
                    <td>{{ $scorecard->player1hole10 }}</td>
                    <td>{{ $scorecard->player1hole11 }}</td>
                    <td>{{ $scorecard->player1hole12 }}</td>
                    <td>{{ $scorecard->player1hole13 }}</td>
                    <td>{{ $scorecard->player1hole14 }}</td>
                    <td>{{ $scorecard->player1hole15 }}</td>
                    <td>{{ $scorecard->player1hole16 }}</td>
                    <td>{{ $scorecard->player1hole17 }}</td>
                    <td>{{ $scorecard->player1hole18 }}</td>
                    <td><strong>{{ $scorecard->player1hole10 + $scorecard->player1hole11 + $scorecard->player1hole12 + $scorecard->player1hole13 + $scorecard->player1hole14 + $scorecard->player1hole15 + $scorecard->player1hole16 + $scorecard->player1hole17 + $scorecard->player1hole18 }}</strong></td>
                    <td><strong>{{ $scorecard->player1hole1 + $scorecard->player1hole2 + $scorecard->player1hole3 + $scorecard->player1hole4 + $scorecard->player1hole5 + $scorecard->player1hole6 + $scorecard->player1hole7 + $scorecard->player1hole8 + $scorecard->player1hole9 + $scorecard->player1hole10 + $scorecard->player1hole11 + $scorecard->player1hole12 + $scorecard->player1hole13 + $scorecard->player1hole14 + $scorecard->player1hole15 + $scorecard->player1hole16 + $scorecard->player1hole17 + $scorecard->player1hole18 }}</strong></td>
                    <!-- TODO: calculate +/- -->
                    <td><strong></strong></td>
                </tr>
                <tr>
                    <th scope="row">Player 2</th>
                    <td>{{ $scorecard->player2hole1 }}</td>
                    <td>{{ $scorecard->player2hole2 }}</td>
                    <td>{{ $scorecard->player2hole3 }}</td>
                    <td>{{ $scorecard->player2hole4 }}</td>
                    <td>{{ $scorecard->player2hole5 }}</td>
                    <td>{{ $scorecard->player2hole6 }}</td>
                    <td>{{ $scorecard->player2hole7 }}</td>
                    <td>{{ $scorecard->player2hole8 }}</td>
                    <td>{{ $scorecard->player2hole9 }}</td>
                    <td>{{ $scorecard->player2hole1 + $scorecard->player2hole2 + $scorecard->player2hole3 + $scorecard->player2hole4 + $scorecard->player2hole5 + $scorecard->player2hole6 + $scorecard->player2hole7 + $scorecard->player2hole8 + $scorecard->player2hole9 }}</td>
                    <td>{{ $scorecard->player2hole10 }}</td>
                    <td>{{ $scorecard->player2hole11 }}</td>
                    <td>{{ $scorecard->player2hole12 }}</td>
                    <td>{{ $scorecard->player2hole13 }}</td>
                    <td>{{ $scorecard->player2hole14 }}</td>
                    <td>{{ $scorecard->player2hole15 }}</td>
                    <td>{{ $scorecard->player2hole16 }}</td>
                    <td>{{ $scorecard->player2hole17 }}</td>
                    <td>{{ $scorecard->player2hole18 }}</td>
                    <td>{{ $scorecard->player2hole10 + $scorecard->player2hole11 + $scorecard->player2hole12 + $scorecard->player2hole13 + $scorecard->player2hole14 + $scorecard->player2hole15 + $scorecard->player2hole16 + $scorecard->player2hole17 + $scorecard->player2hole18 }}</td>
                    <td>{{ $scorecard->player2hole1 + $scorecard->player2hole2 + $scorecard->player2hole3 + $scorecard->player2hole4 + $scorecard->player2hole5 + $scorecard->player2hole6 + $scorecard->player2hole7 + $scorecard->player2hole8 + $scorecard->player2hole9 + $scorecard->player2hole10 + $scorecard->player2hole11 + $scorecard->player2hole12 + $scorecard->player2hole13 + $scorecard->player2hole14 + $scorecard->player2hole15 + $scorecard->player2hole16 + $scorecard->player2hole17 + $scorecard->player2hole18 }}</td>
                    <!-- TODO: calculate +/- -->
                    <td><strong></strong></td>
                </tr>
                <tr>
                    <th scope="row">Player 3</th>
                    <td>{{ $scorecard->player3hole1 }}</td>
                    <td>{{ $scorecard->player3hole2 }}</td>
                    <td>{{ $scorecard->player3hole3 }}</td>
                    <td>{{ $scorecard->player3hole4 }}</td>
                    <td>{{ $scorecard->player3hole5 }}</td>
                    <td>{{ $scorecard->player3hole6 }}</td>
                    <td>{{ $scorecard->player3hole7 }}</td>
                    <td>{{ $scorecard->player3hole8 }}</td>
                    <td>{{ $scorecard->player3hole9 }}</td>
                    <td>{{ $scorecard->player3hole1 + $scorecard->player3hole2 + $scorecard->player3hole3 + $scorecard->player3hole4 + $scorecard->player3hole5 + $scorecard->player3hole6 + $scorecard->player3hole7 + $scorecard->player3hole8 + $scorecard->player3hole9 }}</td>
                    <td>{{ $scorecard->player3hole10 }}</td>
                    <td>{{ $scorecard->player3hole11 }}</td>
                    <td>{{ $scorecard->player3hole12 }}</td>
                    <td>{{ $scorecard->player3hole13 }}</td>
                    <td>{{ $scorecard->player3hole14 }}</td>
                    <td>{{ $scorecard->player3hole15 }}</td>
                    <td>{{ $scorecard->player3hole16 }}</td>
                    <td>{{ $scorecard->player3hole17 }}</td>
                    <td>{{ $scorecard->player3hole18 }}</td>
                    <td>{{ $scorecard->player3hole10 + $scorecard->player3hole11 + $scorecard->player3hole12 + $scorecard->player3hole13 + $scorecard->player3hole14 + $scorecard->player3hole15 + $scorecard->player3hole16 + $scorecard->player3hole17 + $scorecard->player3hole18 }}</td>
                    <td>{{ $scorecard->player3hole1 + $scorecard->player3hole2 + $scorecard->player3hole3 + $scorecard->player3hole4 + $scorecard->player3hole5 + $scorecard->player3hole6 + $scorecard->player3hole7 + $scorecard->player3hole8 + $scorecard->player3hole9 + $scorecard->player3hole10 + $scorecard->player3hole11 + $scorecard->player3hole12 + $scorecard->player3hole13 + $scorecard->player3hole14 + $scorecard->player3hole15 + $scorecard->player3hole16 + $scorecard->player3hole17 + $scorecard->player3hole18 }}</td>
                    <!-- TODO: calculate +/- -->
                    <td><strong></strong></td>
                </class=>
                <tr>
                    <th scope="row">Player 4</th>
                    <td>{{ $scorecard->player4hole1 }}</td>
                    <td>{{ $scorecard->player4hole2 }}</td>
                    <td>{{ $scorecard->player4hole3 }}</td>
                    <td>{{ $scorecard->player4hole4 }}</td>
                    <td>{{ $scorecard->player4hole5 }}</td>
                    <td>{{ $scorecard->player4hole6 }}</td>
                    <td>{{ $scorecard->player4hole7 }}</td>
                    <td>{{ $scorecard->player4hole8 }}</td>
                    <td>{{ $scorecard->player4hole9 }}</td>
                    <td>{{ $scorecard->player4hole1 + $scorecard->player4hole2 + $scorecard->player4hole3 + $scorecard->player4hole4 + $scorecard->player4hole5 + $scorecard->player4hole6 + $scorecard->player4hole7 + $scorecard->player4hole8 + $scorecard->player4hole9 }}</td>
                    <td>{{ $scorecard->player4hole10 }}</td>
                    <td>{{ $scorecard->player4hole11 }}</td>
                    <td>{{ $scorecard->player4hole12 }}</td>
                    <td>{{ $scorecard->player4hole13 }}</td>
                    <td>{{ $scorecard->player4hole14 }}</td>
                    <td>{{ $scorecard->player4hole15 }}</td>
                    <td>{{ $scorecard->player4hole16 }}</td>
                    <td>{{ $scorecard->player4hole17 }}</td>
                    <td>{{ $scorecard->player4hole18 }}</td>
                    <td>{{ $scorecard->player4hole10 + $scorecard->player4hole11 + $scorecard->player4hole12 + $scorecard->player4hole13 + $scorecard->player4hole14 + $scorecard->player4hole15 + $scorecard->player4hole16 + $scorecard->player4hole17 + $scorecard->player4hole18 }}</td>
                    <td>{{ $scorecard->player4hole1 + $scorecard->player4hole2 + $scorecard->player4hole3 + $scorecard->player4hole4 + $scorecard->player4hole5 + $scorecard->player4hole6 + $scorecard->player4hole7 + $scorecard->player4hole8 + $scorecard->player4hole9 + $scorecard->player4hole10 + $scorecard->player4hole11 + $scorecard->player4hole12 + $scorecard->player4hole13 + $scorecard->player4hole14 + $scorecard->player4hole15 + $scorecard->player4hole16 + $scorecard->player4hole17 + $scorecard->player4hole18 }}</td>
                    <!-- TODO: calculate +/- -->
                    <td><strong></strong></td>
                </tr>
            </tbody>
        </table>
        <!-- TODO: make buttons function -->
        <div class='mt-3 mb-3 pb-2 border-bottom'>
            <a href="/scorecard/{{ $scorecard->id }}">
                <button class='btn btn-dark'>View More</button>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
