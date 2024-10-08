/* Owner: App Scaffolder */
export interface IOrder {
  order_id: number;
  customer_id: number;
}

export function isIOrder(data: unknown): data is IOrder {
  return (
    data !== null &&
    typeof data === 'object' &&
    'order_id' in data &&
    'customer_id' in data &&
    typeof data.order_id === 'number' &&
    typeof data.customer_id === 'number'
  );
}

export function isIOrderArray(data: unknown): data is IOrder[] {
  return Array.isArray(data) && data.every(isIOrder);
}
