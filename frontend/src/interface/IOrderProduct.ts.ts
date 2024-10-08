/* Owner: App Scaffolder */
export interface IOrderProduct {
  order_product_id: number;
  order_id: number;
  product_id: number;
}

export function isIOrderProduct(data: unknown): data is IOrderProduct {
  return (
    data !== null &&
    typeof data === 'object' &&
    'order_product_id' in data &&
    'order_id' in data &&
    'product_id' in data &&
    typeof data.order_product_id === 'number' &&
    typeof data.order_id === 'number' &&
    typeof data.product_id === 'number'
  );
}

export function isIOrderProductArray(data: unknown): data is IOrderProduct[] {
  return Array.isArray(data) && data.every(isIOrderProduct);
}
