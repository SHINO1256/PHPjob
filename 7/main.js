/*問1:isEven関数を実行して、
以下の配列から偶数だけが出力されるように実装してください。*/

let numbers = [2, 5, 12, 13, 15, 18, 22];
function isEven(elements){
    return elements % 2 === 0;
}
console.log(`${numbers.filter(isEven)}は偶数です`);
// 2,12,18,22は偶数です


/*問2:以下の要件を満たすように実装してください。
【要件】
・インスタンス化した時にガソリンとナンバーが
セットされるようなCarクラスを作成する
・「ガソリンは〇〇です。ナンバーは△△です」と出力される
「getNumGas」という関数を作成する*/

// Carクラスを作成
class Car{
    //”ガソリン”と”ナンバー”という値を受け取る
    constructor(gas,number){
        this.gas = gas;
        this.number = number;
    }

    //「getNumGas」という関数の作成　←修正のコメントをいただき、クラス内に入れました。
    getNumGas(){
        console.log(`ガソリンは${anyCar.gas}です。ナンバーは${anyCar.number}です。`);
      };
}

    //Carクラスをインスタンス化
    let anyCar = new Car('〇〇', '△△');
    anyCar. getNumGas();
   


