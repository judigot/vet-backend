/* Owner: App Scaffolder */
export interface IProduct {
  product_id: number;
  product_name: string;
}

export function isIProduct(data: unknown): data is IProduct {
  return (
    data !== null &&
    typeof data === 'object' &&
    'product_id' in data &&
    'product_name' in data &&
    typeof data.product_id === 'number' &&
    typeof data.product_name === 'string'
  );
}

export function isIProductArray(data: unknown): data is IProduct[] {
  return Array.isArray(data) && data.every(isIProduct);
}
