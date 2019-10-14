# NFQ First PHP homework

Atliko Eligijus Kiudys

# Paleidimas

Programą paleidau per konsole su "php index.php" konsoles komanda.

# Paaiškinimas

Naudojant funkciją "function calculateHomeWorkSum(...$numbers)" gavau ataskymą <b>6.2</b>, funkcijai skaičiuojant rezultatus nebuvo atsižvelgiama į argumentų tipus, rezultatas buvo gražinamas kaip float arba double tipas.

Naudojant funkciją "function calculateHomeWorkSum(...$numbers):int" gavau ataskymą <b>6</b>, funkcijai skaičiuojant rezultatus nebuvo atsižvelgiama į argumentų tipus, visi paduoti argumentų yra sudedami. Rezultato gražinimo tipas yra int.
 
Naudojant funkciją "function calculateHomeWorkSum(int...$numbers):int" gavau ataskymą <b>6</b>, funkcijai skaičiuojant rezultatus buvo atsižvelgiama į argumentų tipus. Jeigu panaudotu argumentų tipas nėra int, tada jeigu įmanoma argumantas yra paverčiamas į int tipo kintamajį. Visi argumentai yra sudedami. Rezultato gražinimo tipas yra int.

Naudojant funkciją "function calculateHomeWorkSum(int...$numbers):int" su "strict_types=1" skaičiuojant su rezultatus su float, double ar string tipais yra išmetama klaida kad kintamieji nėra tipo kurio reikia, visi paduoti argumentų yra sudedami jeigu jų tipas yra int. Jeigu kalaidos nėra rezlutatai gražinami int tipo. Gaunamas rezultatas jeigu visi argumentai yra int tipo: <b>6</b>
 
 
 