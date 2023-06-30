const _CONVERSION_UNIT = 1024;

/**
 * Получив значение в мегабайтах, преобразует его обратно в байты.
 */
function mbToBytes(megabytes: number): number {
    return Math.floor(megabytes * _CONVERSION_UNIT * _CONVERSION_UNIT);
}

/**
 * Учитывая количество байт, преобразует их в человекочитаемый формат строки.
 * используя "1024" в качестве делителя.
 */
function bytesToString(bytes: number, decimals = 2): string {
    const k = _CONVERSION_UNIT;

    if (bytes < 1) return '0 байт';

    decimals = Math.floor(Math.max(0, decimals));
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    const value = Number((bytes / Math.pow(k, i)).toFixed(decimals));

    return `${value} ${['Байт', 'КиБ', 'МиБ', 'ГиБ', 'ТиБ'][i]}`;
}

/**
 * Форматирует адрес IPv4 или IPv6.
 */
function ip(value: string): string {
    // noinspection RegExpSimplifiable
    return /([a-f0-9:]+:+)+[a-f0-9]+/.test(value) ? `[${value}]` : value;
}

export { ip, mbToBytes, bytesToString };
