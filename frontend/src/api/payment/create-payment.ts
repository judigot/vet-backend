/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IPayment } from "../../interfaces/interfaces";

type IBody = Omit<IPayment, 'id'>;

export const createPayment = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/payments`,
    body: JSON.stringify(formData),
  });
  return result;
};

